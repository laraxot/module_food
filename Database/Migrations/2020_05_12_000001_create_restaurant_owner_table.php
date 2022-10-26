<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
// ----- bases ----
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateRestaurantOwnerTable.
 */
class CreateRestaurantOwnerTable extends XotBaseMigration {
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
                $table->integer('phone')->nullable();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->timestamps();
            });

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                /*
                if (! $this->hasColumn('birthday')) {
                    $table->date('birthday')->nullable();
                    $table->string('vehicle_type')->nullable();
                    $table->string('vehicle_model')->nullable();
                }
                */

                if (Schema::hasColumn($this->getTable(), 'post_id')) {
                    $table->renameColumn('post_id', 'id');
                }
            });
    }

    // end up
}// end class
