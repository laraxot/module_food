<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
/*
* read spatial
* https://github.com/grimzy/laravel-mysql-spatial
*
**/

//--- models --
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
        if (! Schema::hasTable($this->getTable())) {
            Schema::create(
                $this->getTable(), function (Blueprint $table) {
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
        }
        Schema::table(
            $this->getTable(), function (Blueprint $table) {
                $address_components = Location::$address_components;
                foreach ($address_components as $el) {
                    if (! Schema::hasColumn($this->getTable(), $el)) {
                        $table->string($el)->nullable();
                    }
                    if (! Schema::hasColumn($this->getTable(), $el.'_short')) {
                        $table->string($el.'_short')->nullable();
                    }
                }

                if (! Schema::hasColumn($this->getTable(), 'phone')) {
                    $table->string('phone')->nullable();
                }

                if (! Schema::hasColumn($this->getTable(), 'website')) {
                    $table->string('website')->nullable();
                }
                if (! Schema::hasColumn($this->getTable(), 'email')) {
                    $table->string('email')->nullable();
                }

                if (! Schema::hasColumn($this->getTable(), 'formatted_address')) {
                    $table->string('formatted_address')->nullable();
                }

                if (! Schema::hasColumn($this->getTable(), 'min_order')) { //ordine minimo (minimum order  troppo lungo)
                    $table->decimal('min_order', 10, 2)->nullable();
                }

                if (! Schema::hasColumn($this->getTable(), 'delivery_cost')) { //ordine minimo (minimum order  troppo lungo)
                    $table->decimal('delivery_cost', 10, 2)->nullable();
                }

                if (! Schema::hasColumn($this->getTable(), 'delivery_options')) {
                    $table->string('delivery_options')->nullable();
                }

                if (! Schema::hasColumn($this->getTable(), 'order_action')) {
                    $table->boolean('order_action')->nullable();
                }

                if (! Schema::hasColumn($this->getTable(), 'price_currency')) {
                    $table->string('price_currency')->nullable();
                }

                if (! Schema::hasColumn($this->getTable(), 'created_by')) {
                    $table->string('created_by')->nullable();
                }
                if (! Schema::hasColumn($this->getTable(), 'updated_by')) {
                    $table->string('updated_by')->nullable();
                }
                if (! Schema::hasColumn($this->getTable(), 'price_range')) {
                    $table->string('price_range')->nullable();
                }

                if (! Schema::hasColumn($this->getTable(), 'updated_at') && ! Schema::hasColumn($this->getTable(), 'created_at')) {
                    $table->timestamps();
                }

                if (! Schema::hasColumn($this->getTable(), 'latitude')) {
                    $table->decimal('latitude', 16, 13)->nullable();
                }
                if (! Schema::hasColumn($this->getTable(), 'longitude')) {
                    $table->decimal('longitude', 16, 13)->nullable();
                }

                if (Schema::hasColumn($this->getTable(), 'post_id')) {
                    $table->renameColumn('post_id', 'id');
                }
                if (! Schema::hasColumn($this->getTable(), 'user_id')) {
                    $table->integer('user_id')->nullable();
                }
                if (! Schema::hasColumn($this->getTable(), 'status')) {
                    $table->integer('status')->nullable();
                }
                if (Schema::hasColumn($this->getTable(), 'related_id')) {
                    $table->renameColumn('related_id', 'restaurant_owners_id');
                }
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        if (Schema::hasTable($this->getTable())) {
            Schema::drop($this->getTable());
        }
    }
}
