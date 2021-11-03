<?php

declare(strict_types=1);
use Illuminate\Database\Schema\Blueprint;
//----- models -----
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CreateFoodCartsTable extends XotBaseMigration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        //-- CREATE --
        $this->tableCreate(
        function (Blueprint $table) {
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
        }
        );

        //-- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! Schema::hasColumn($this->getTable(), 'user_id')) {
                    $table->integer('user_id')->index()->nullable(); // item collegati all'utente
                }
                // if (! Schema::hasColumn($this->getTable(), 'post_id')) {
                //    $table->integer('post_id')->index()->nullable(); // item collegati all'utente
                //}
                if (! Schema::hasColumn($this->getTable(), 'post_type')) {
                    $table->string('post_type')->index()->nullable(); // item collegati all'utente
                }
                if (! Schema::hasColumn($this->getTable(), 'status_id')) {
                    $table->integer('status_id')->index()->nullable(); // item collegati all'utente
                }
            });
    }
}
