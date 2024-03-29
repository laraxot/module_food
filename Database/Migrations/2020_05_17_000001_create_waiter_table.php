<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
// ----- bases ----
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateWaiterTable.
 */
class CreateWaiterTable extends XotBaseMigration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->nullable();
                $table->string('email')->nullable();
                $table->string('phone', 50)->nullable();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->timestamps();
            }
        );

        // -- UPDATE --
        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                /*
                if (! $this->hasColumn('birthday')) {
                    $table->date('birthday')->nullable();
                    $table->string('email')->nullable();
                    $table->string('phone', 50)->nullable();
                    $table->string('vehicle_type')->nullable();
                    $table->string('vehicle_model')->nullable();
                }
                */
                if ($this->hasColumn('auth_user_id')) {
                    $table->renameColumn('auth_user_id', 'user_id');
                }
            }
        );
    }

    // end up
}// end class
