<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//------- models ----------
//use Modules\Food\Models\Cuisine as MyModel;

use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateCuisinesTable.
 */
class CreateCuisinesTable extends XotBaseMigration {
    /*
    public function getTable()
    {
        return with(new MyModel())->getTable();
    }
    */
    public function up() {
        //-- CREATE --
        if (! $this->tableExists()) {
            $this->getConn()->create($this->getTable(), function (Blueprint $table) {
                $table->increments('id'); //->primary();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->timestamps();
            }
            );
        }
        //-- UPDATE --
        $this->getConn()->table($this->getTable(), function (Blueprint $table) {
            //$table->increments('post_id')->change();
            //->autoIncrement()

            if ($this->hasColumn('post_id')) {
                $table->renameColumn('post_id', 'id');
            }
            if ($this->hasColumn('id')) {
                $table->increments('id')->change();
            }

            //------ ADD
            if (! $this->hasColumn('created_by')) {
                $table->string('created_by')->nullable();
            }
            if (! $this->hasColumn('updated_by')) {
                $table->string('updated_by')->nullable();
            }
            if (! $this->hasColumn('updated_at') && ! $this->hasColumn('created_at')) {
                $table->timestamps();
            }
            //------ CHANGE
            $schema_builder = Schema::getConnection()
                    ->getDoctrineSchemaManager()
                    ->listTableDetails($table->getTable());
            /*
            if (! $schema_builder->hasIndex($this->getTable().'_'.'post_id'.'_unique')) {
            $table->integer('post_id')->index()->unique()->change();
            }
            */

            if (! $this->hasColumn('status')) {
                $table->integer('status')->nullable();
            }
        }
        );
    }

    public function down() {
        Schema::dropIfExists($this->getTable());
    }
}