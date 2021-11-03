<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;

//---- models ---

/**
 * Class CreateIngredientsTable.
 */
class CreateIngredientsTable extends XotBaseMigration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        //-- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('created_by');
                $table->string('updated_by');
                $table->string('deleted_by');
                $table->ipAddress('created_ip');
                $table->ipAddress('updated_ip');
                $table->ipAddress('deleted_ip'); //$table->ipAddress('visitor');	IP address equivalent column.
                $table->timestamps();
                $table->softDeletes();
            }
        );

        //-- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! Schema::hasColumn($this->getTable(), 'status')) {
                    $table->integer('status')->nullable();
                }
                if (Schema::hasColumn($this->getTable(), 'post_id')) {
                    $table->renameColumn('post_id', 'id');
                }
            });
    }
}
