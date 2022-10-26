<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
/*
* read spatial
* https://github.com/grimzy/laravel-mysql-spatial
*
**/

// --- models --
use Modules\Food\Models\Location;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateRestaurantOwnersTable.
 */
class CreateRestaurantOwnersTable extends XotBaseMigration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->string('deleted_by')->nullable();
                $table->string('deleted_ip')->nullable();
                $table->string('created_ip')->nullable();
                $table->string('updated_ip')->nullable();
                $table->timestamps();
                $table->softDeletes();
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                $address_components = Location::$address_components;
                foreach ($address_components as $el) {
                    if (! $this->hasColumn($el)) {
                        $table->string($el)->nullable();
                    }
                    if (! $this->hasColumn($el.'_short')) {
                        $table->string($el.'_short')->nullable();
                    }
                }

                if (! $this->hasColumn('phone')) {
                    $table->string('phone')->nullable();
                }

                if (! $this->hasColumn('website')) {
                    $table->string('website')->nullable();
                }
                if (! $this->hasColumn('email')) {
                    $table->string('email')->nullable();
                }

                if (! $this->hasColumn('formatted_address')) {
                    $table->string('formatted_address')->nullable();
                }

                if (! $this->hasColumn('min_order')) { // ordine minimo (minimum order  troppo lungo)
                    $table->decimal('min_order', 10, 2)->nullable();
                }

                if (! $this->hasColumn('delivery_cost')) { // ordine minimo (minimum order  troppo lungo)
                    $table->decimal('delivery_cost', 10, 2)->nullable();
                }

                if (! $this->hasColumn('delivery_options')) {
                    $table->string('delivery_options')->nullable();
                }

                if (! $this->hasColumn('order_action')) {
                    $table->boolean('order_action')->nullable();
                }

                if (! $this->hasColumn('price_currency')) {
                    $table->string('price_currency')->nullable();
                }

                if (! $this->hasColumn('created_by')) {
                    $table->string('created_by')->nullable();
                }
                if (! $this->hasColumn('updated_by')) {
                    $table->string('updated_by')->nullable();
                }
                if (! $this->hasColumn('price_range')) {
                    $table->string('price_range')->nullable();
                }

                if (! $this->hasColumn('updated_at') && ! $this->hasColumn('created_at')) {
                    $table->timestamps();
                }

                if (! $this->hasColumn('latitude')) {
                    $table->decimal('latitude', 16, 13)->nullable();
                }
                if (! $this->hasColumn('longitude')) {
                    $table->decimal('longitude', 16, 13)->nullable();
                }

                if ($this->hasColumn('post_id')) {
                    $table->renameColumn('post_id', 'id');
                }

                if ($this->hasColumn('auth_user_id') && ! $this->hasColumn('user_id')) {
                    $table->renameColumn('auth_user_id', 'user_id');
                }

                if (! $this->hasColumn('status')) {
                    $table->integer('status')->nullable();
                }
                if ($this->hasColumn('related_id')) {
                    $table->renameColumn('related_id', 'restaurant_owners_id');
                }
            }
        );
    }
}
