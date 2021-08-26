<?php

declare(strict_types=1);
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
/* read spatial
https://github.com/grimzy/laravel-mysql-spatial
*/

//--- models --
use Modules\Food\Models\Location;
use Modules\Food\Models\Restaurant as MyModel;

//  !!!!    Duplicate key name 'blog_post_restaurants_post_id_unique'")

class CreateRestaurantsTable extends Migration {
    //protected $table = 'blog_post_restaurants';

    public function getTable() {
        return with(new MyModel())->getTable();
    }

    /**
     * Run the migrations.
     */
    public function up() {
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                $table->increments('id'); //->primary();
                $table->string('status', 40)->nullable();
                $table->decimal('min_order', 10, 2)->nullable();
                $table->decimal('latitude', 16, 13)->index()->nullable();
                $table->decimal('longitude', 16, 13)->index()->nullable();
                $table->text('is_closed', 65535)->nullable();
                $table->text('price', 65535)->nullable();
                $table->text('review_count', 65535)->nullable();
                $table->text('rating', 65535)->nullable();
                $table->text('phone', 65535)->nullable();
                $table->text('display_phone', 65535)->nullable();
                $table->string('guid')->nullable();
                //--- fields managed by updater.php
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->string('deleted_by')->nullable();
                $table->string('deleted_ip')->nullable();
                $table->string('created_ip')->nullable();
                $table->string('updated_ip')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
        Schema::table($this->getTable(), function (Blueprint $table) {
            if (Schema::hasColumn($this->getTable(), 'latitude')) {
                //Duplicate key name 'blog_post_restaurants_latitude_index'
                //$table->index('latitude');
            }
            if (Schema::hasColumn($this->getTable(), 'longitude')) {
                //$table->index('longitude');
            }
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
            //Duplicate key name 'blog_post_restaurants_post_id_unique'
            //$table->integer('post_id')->index()->unique()->change();

            //$table->primary(['post_id']);
            //$table->biginteger('post_id')->autoIncrement();//->change();
            //->autoIncrement()
            /*
            $sql='ALTER TABLE '.$this->getTable().' CHANGE COLUMN post_id post_id INT(16) NOT NULL AUTO_INCREMENT FIRST;';
            \DB::unprepared($sql);
            */
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
