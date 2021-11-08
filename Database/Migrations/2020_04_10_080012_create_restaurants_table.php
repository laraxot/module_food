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
 * Class CreateRestaurantsTable.
 */
class CreateRestaurantsTable extends XotBaseMigration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        //-- CREATE --
        $this->tableCreate(
        function (Blueprint $table) {
            $table->increments('id'); //->primary();
            $table->decimal('min_order', 10, 2)->nullable();
            $table->decimal('latitude', 16, 13)->index()->nullable();
            $table->decimal('longitude', 16, 13)->index()->nullable();
            $table->boolean('is_closed')->nullable();
            $table->string('price')->nullable();
            $table->integer('review_count')->nullable();
            $table->string('rating')->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('display_phone', 50)->nullable();
            //--- fields managed by updater.php
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            //$table->string('deleted_by')->nullable();
            //$table->string('deleted_ip')->nullable();
            //$table->string('created_ip')->nullable();
            //$table->string('updated_ip')->nullable();
            $table->timestamps();
            //$table->softDeletes();
        }
            );

        // mi da la lista dei fields ma mi interessa anche se son stringa o text
        //dddx($this->getConn()->getColumnListing($this->getTable()));
        //$columns = $this->getConn()->getDoctrineSchemaManager()->listTableColumns($this->getTable());
        //Call to undefined method Illuminate\Database\Schema\MySqlBuilder::getDoctrineSchemaManager()
        /*
        $columns = Schema::getConnection()
                    ->getDoctrineSchemaManager()
                    ->listTableDetails($this->getTable());
        */
        //dddx($columns);

        //-- UPDATE --
        //-- UPDATE --
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

                if (! $this->hasColumn('min_order')) { //ordine minimo (minimum order  troppo lungo)
                    $table->decimal('min_order', 10, 2)->nullable();
                }

                if (! $this->hasColumn('delivery_cost')) { //ordine minimo (minimum order  troppo lungo)
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

                if (! $this->hasColumn('address')) {
                    $table->text('address')->nullable();
                }

                if (! $this->hasColumn('status')) {
                    $table->integer('status')->nullable();
                }
                if (! $this->hasColumn('ratings_avg')) {
                    $table->decimal('ratings_avg', 10, 3);
                    $table->integer('ratings_count');
                }
                if ($this->hasColumn('post_id')) {
                    $table->renameColumn('post_id', 'id');
                }
                if (! $this->hasColumn('checkout_enable')) {
                    $table->boolean('checkout_enable')->default(0);
                }

                if ($this->hasColumn('price')) {
                    $table->string('price')->nullable()->change();
                }

                $old_providers = [
                    'justeat_url', 'sgnamit_url', 'foodracers_url', 'foodora_url', 'moovenda_url',
                    'deliveroo_url', 'bacchetteforchette_url', 'theforkit_url', 'misiedocom_url',
                    'restopolitanit_url', 'yelp_url', 'zomato_url', 'mymenu_url', '"foodpanda_url',
                ];

                foreach ($old_providers as $old_provider) {
                    if ($this->hasColumn($old_provider)) {
                        $table->dropColumn($old_provider);
                    }
                }

                if (! $this->hasColumn('table_enable')) {
                    $table->boolean('table_enable')->default(0);
                }

                if (! $this->hasColumn('is_reclamed')) {
                    $table->boolean('is_reclamed')->default(0);
                }
            }
        );
    }
}
