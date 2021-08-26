<?php

declare(strict_types=1);
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
//----- models -----
use Modules\Food\Models\CartItem as MyModel;

class CreateCartItemsTable extends Migration {
    public function getTable() {
        return with(new MyModel())->getTable();
    }

    /**
     * Run the migrations.
     */
    public function up() {
        //--- create ---
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                $table->increments('id');
                $table->integer('parent_id')->index()->nullable();
                //--- morph !! --
                $table->integer('post_id')->index()->nullable();
                $table->string('post_type')->index()->nullable();
                //------
                $table->integer('pivot_id')->nullable();
                $table->integer('qty')->nullable();
                $table->text('note')->nullable();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->string('deleted_by')->nullable();
                $table->ipAddress('created_ip')->nullable();
                $table->ipAddress('updated_ip')->nullable();
                $table->ipAddress('deleted_ip')->nullable();
                //$table->ipAddress('visitor');	IP address equivalent column.
                $table->timestamps();
                $table->softDeletes();
            });
        }
        //--- up --
        Schema::table($this->getTable(), function (Blueprint $table) {
            if (! Schema::hasColumn($this->getTable(), 'auth_user_id')) {
                $table->integer('auth_user_id')->index()->nullable(); // item collegati all'utente
                $table->string('sess_id', 32)->index()->nullable();    // item collegati alla sessione se utente non loggato
                $table->integer('cart_id')->index()->nullable();      // carrello
            }
        });

        Schema::table($this->getTable(), function (Blueprint $table) {
            $table->string('sess_id', 40)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() {
        if (Schema::hasTable($this->getTable())) {
            Schema::drop($this->getTable());
        }
    }
}
