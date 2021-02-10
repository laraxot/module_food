<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//----- models-------
use Modules\Food\Models\Location as MyModel;

use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateLocationsTable
 */
class CreateLocationsTable extends Migration
{
    /**
     * @return mixed
     */
    public function getTable()
    {
        return with(new MyModel())->getTable();
    }
/**
* db up
*
* @return void
*/
    public function up()
    {
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                $table->increments('post_id'); //->primary();
                $table->string('term')->nullable();
                //$table->string('location')->nullable(); // location sostituito da locality per copia da google api
                $address_components = MyModel::$address_components;
                foreach ($address_components as $el) {
                    if (! Schema::hasColumn($this->getTable(), $el)) {
                        $table->string($el)->nullable();
                    }
                }
                $table->decimal('latitude', 15, 10)->nullable();
                $table->decimal('longitude', 15, 10)->nullable();
                $table->integer('radius')->nullable();
                $table->string('formatted_address')->nullable();
                $table->string('nearest_street')->nullable();
                $table->timestamps();
            });
        }
        //--- up --
        Schema::table($this->getTable(), function (Blueprint $table) {
            //$table->increments('post_id')->change();
            //->autoIncrement()
            if (! Schema::hasColumn($this->getTable(), 'created_by')) {
                $table->string('created_by')->index()->nullable(); // item collegati all'utente
                $table->string('updated_by')->index()->nullable(); // item collegati all'utente
            }
            $address_components = MyModel::$address_components;
            foreach ($address_components as $el) {
                if (! Schema::hasColumn($this->getTable(), $el)) {
                    $table->string($el)->nullable();
                }
            }

            if (! Schema::hasColumn($this->getTable(), 'restaurants_count')) {
                $table->integer('restaurants_count')->index()->nullable();
            }

            if (! Schema::hasColumn($this->getTable(), 'status')) {
                $table->integer('status')->nullable()->after('post_id');
            }
            if (Schema::hasColumn($this->getTable(), 'post_id')) {
                $table->renameColumn('post_id', 'id');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists($this->getTable());
    }
}//end CreateBlogPostLocationsTable
