<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

//--- models --
use Modules\Food\Models\CuisineCat as MyModel;

class CreateCuisineCatsTable extends Migration
{
    //protected $table = 'blog_post_cuisine_cats'; // potrebbe essere un ristorante, un ufficio etc etc

    public function getTable()
    {
        return with(new MyModel())->getTable();
    }
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                $table->increments('post_id');//->primary();
                $table->string('day_name');
                $table->integer('day_of_week');
                $table->time('open_at'); //time or timeTz ??
                $table->time('close_at');
                $table->boolean('is_closed')->nullable();  //field from closed to is_closed is more readable
                $table->text('note')->nullable();
                $table->string('created_by');
                $table->string('updated_by');
                $table->string('deleted_by');

                $table->ipAddress('created_ip');
                $table->ipAddress('updated_ip');
                $table->ipAddress('deleted_ip'); //$table->ipAddress('visitor');	IP address equivalent column.

                $table->timestamps();
                $table->softDeletes();
            });
        }
        Schema::table($this->getTable(), function (Blueprint $table) {

            //----------- ADD -----------
            if (!Schema::hasColumn($this->getTable(), 'created_by')) {
                $table->string('created_by')->nullable();
            }
            if (!Schema::hasColumn($this->getTable(), 'updated_by')) {
                $table->string('updated_by')->nullable();
            }
            //-------- CHANGE ----------------
            $schema_builder = Schema::getConnection()
                ->getDoctrineSchemaManager()
                ->listTableDetails($table->getTable());

            if (!$schema_builder->hasIndex($this->getTable().'_'.'post_id'.'_unique')) {
                $table->integer('post_id')->ignore()->index()->unique()->change();
            }

            $table->string('created_by')->nullable()->change();
            $table->string('updated_by')->nullable()->change();
            $table->string('deleted_by')->nullable()->change();
            $table->string('created_ip')->nullable()->change();
            $table->string('updated_ip')->nullable()->change();
            $table->string('deleted_ip')->nullable()->change();
            //---------- DELETE ------------
            if (Schema::hasColumn($this->getTable(), 'day_name')) {
                $table->dropColumn('day_name');
            }
            if (Schema::hasColumn($this->getTable(), 'day_of_week')) {
                $table->dropColumn('day_of_week');
            }
            if (Schema::hasColumn($this->getTable(), 'open_at')) {
                $table->dropColumn('open_at');
            }
            if (Schema::hasColumn($this->getTable(), 'close_at')) {
                $table->dropColumn('close_at');
            }







            //$table->increments('post_id')->change();
            //->autoIncrement()
            if (Schema::hasColumn($this->getTable(), 'id')) {
                $table->dropColumn('id');
                $sql='ALTER TABLE '.$this->getTable().' DROP id';
                \DB::unprepared($sql);

                $table->integer('post_id')->nullable()->index()->change();
                $sql='ALTER TABLE '.$this->getTable().' CHANGE COLUMN post_id post_id INT(16) NOT NULL AUTO_INCREMENT FIRST;';
                \DB::unprepared($sql);
            }
            // $table->dropColumn('id');
            // $table->string('post_id', 16)->autoIncrement()->unsigned()->nullable()->change();
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
