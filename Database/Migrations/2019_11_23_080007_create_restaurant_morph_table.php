<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//----- models -----
use Modules\Food\Models\RestaurantMorph as MyModel;

//--
/* 2019_11_23_080004_
https://phppot.com/php/php-star-rating-system-with-javascript/
https://www.phpzag.com/star-rating-system-with-ajax-php-and-mysql/
*/
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateRestaurantMorphTable
 */
class CreateRestaurantMorphTable extends Migration
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
        //----- create -----
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                $table->increments('id');
                $table->nullableMorphs('post');
                $table->nullableMorphs('related');
                $table->integer('auth_user_id')->nullable()->index();

                $table->string('note')->nullable();

                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->string('deleted_by')->nullable();
                $table->timestamps();
            });
        }
        //----- update -----
        Schema::table($this->getTable(), function (Blueprint $table) {
            if (!Schema::hasColumn($this->getTable(), 'role_id')) {
                $table->integer('role_id')->nullable();
            };

            if (!Schema::hasColumn($this->getTable(), 'status')) {
                $table->integer('status')->nullable();
            };
            if (Schema::hasColumn($this->getTable(), 'related_id')) {
                $table->renameColumn('related_id', 'restaurant_id');
            };



            /*
            if (!Schema::hasColumn($this->getTable(), 'created_by')) {
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->string('deleted_by')->nullable();
            };
            */
        });
    }

    public function down()
    {
        Schema::dropIfExists($this->getTable());
    }
}
