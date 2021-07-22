<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

//----- models -----
use Modules\Food\Models\Cart as MyModel;

class CreateCartsTable extends Migration{

    public function getTable(){
        return with(new MyModel())->getTable();
    }
    /**
     * Run the migrations.
     */
    public function up()
    {
        //--- create ---
        if (!Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                $table->increments('id');
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
            if (!Schema::hasColumn($this->getTable(), 'auth_user_id')) {
                $table->integer('auth_user_id')->index()->nullable(); // item collegati all'utente
            }
            if (!Schema::hasColumn($this->getTable(), 'post_id')) {
                $table->integer('post_id')->index()->nullable(); // item collegati all'utente
            }
            if (!Schema::hasColumn($this->getTable(), 'post_type')) {
                $table->string('post_type')->index()->nullable(); // item collegati all'utente
            }
            if (!Schema::hasColumn($this->getTable(), 'status_id')) {
                $table->integer('status_id')->index()->nullable(); // item collegati all'utente
            }

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        if (Schema::hasTable($this->getTable())) {
            Schema::drop($this->getTable());
        }
    }
}
