<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
//----- bases ----
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateBellBoysTable.
 */
class CreateBellBoysTable extends XotBaseMigration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void {
        //-- CREATE --
        if (! $this->tableExists()) {
            $this->getConn()->create($this->getTable(), function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->nullable();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->timestamps();
            });
        }
        //-- UPDATE --
        $this->getConn()->table($this->getTable(), function (Blueprint $table) {
            if (! $this->hasColumn('birthday')) {
                $table->date('birthday')->nullable();
                $table->string('email')->nullable();
                $table->string('phone', 50)->nullable();
                $table->string('vehicle_type')->nullable();
                $table->string('vehicle_model')->nullable();
            }

            if (! $this->hasColumn('driving_license')) {
                $table->boolean('driving_license')->nullable();
                $table->boolean('has_car')->nullable();
                $table->boolean('has_motorcycle')->nullable();
                $table->boolean('has_bicycle')->nullable();
            }
            if ($this->hasColumn('auth_user_id')) {
                $table->renameColumn('auth_user_id', 'user_id');
            }
        });
    }

    //end up
}//end class
