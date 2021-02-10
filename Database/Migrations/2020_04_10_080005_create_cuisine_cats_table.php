<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
//--- models --
use Modules\Food\Models\CuisineCat as MyModel;

use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateCuisineCatsTable
 */
class CreateCuisineCatsTable extends Migration
{
    /**
     * @return mixed
     */
    public function getTable()
    {
        return with(new MyModel())->getTable();
    }

    /**
     * Run the migrations.
     */
    public function up()
    {
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                $table->increments('post_id'); //->primary();
                $table->string('day_name');
                $table->integer('day_of_week');
                $table->time('open_at'); //time or timeTz ??
                $table->time('close_at');
                $table->boolean('is_closed')->nullable();  //field from closed to is_closed is more readable
                $table->text('note')->nullable();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->string('deleted_by')->nullable();

                $table->ipAddress('created_ip')->nullable();
                $table->ipAddress('updated_ip')->nullable();
                $table->ipAddress('deleted_ip')->nullable(); //$table->ipAddress('visitor');	IP address equivalent column.

                $table->timestamps();
               // $table->softDeletes();
            });
        }
        Schema::table($this->getTable(), function (Blueprint $table) {
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
        if (Schema::hasTable($this->getTable())) {
            Schema::drop($this->getTable());
        }
    }
}
