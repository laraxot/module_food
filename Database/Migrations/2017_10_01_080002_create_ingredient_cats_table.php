<?php

declare(strict_types=1);
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
//--- models --
use Modules\Food\Models\IngredientCat as MyModel;

class CreateIngredientCatsTable extends Migration {
    //protected $table = 'blog_post_ingredient_cats'; // potrebbe essere un ristorante, un ufficio etc etc
    public function getTable() {
        return with(new MyModel())->getTable();
    }

    /**
     * Run the migrations.
     */
    public function up(): void {
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table): void {
                $table->increments('id'); //->primary();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->string('deleted_by')->nullable();
                $table->ipAddress('created_ip')->nullable();
                $table->ipAddress('updated_ip')->nullable();
                $table->ipAddress('deleted_ip')->nullable(); //$table->ipAddress('visitor');	IP address equivalent column.
                $table->timestamps();
                $table->softDeletes();
            });
        }

        Schema::table($this->getTable(), function (Blueprint $table): void {
            if (! Schema::hasColumn($this->getTable(), 'created_by')) {
                $table->string('created_by')->nullable();
            }
            if (! Schema::hasColumn($this->getTable(), 'updated_by')) {
                $table->string('updated_by')->nullable();
            }
            if (Schema::hasColumn($this->getTable(), 'created_by')) {
                $table->string('created_by')->nullable()->change();
            }
            if (Schema::hasColumn($this->getTable(), 'updated_by')) {
                $table->string('updated_by')->nullable()->change();
            }
            if (Schema::hasColumn($this->getTable(), 'deleted_by')) {
                $table->string('deleted_by')->nullable()->change();
            }
            if (Schema::hasColumn($this->getTable(), 'created_ip')) {
                $table->string('created_ip')->nullable()->change();
            }
            if (Schema::hasColumn($this->getTable(), 'updated_ip')) {
                $table->string('updated_ip')->nullable()->change();
            }
            if (Schema::hasColumn($this->getTable(), 'deleted_ip')) {
                $table->string('deleted_ip')->nullable()->change();
            }
            //-------- CHANGE ----------------
            /* --- usare nel caso modelservice
            $schema_builder = Schema::getConnection()
                ->getDoctrineSchemaManager()
                ->listTableDetails($table->getTable());

            if (!$schema_builder->hasIndex($this->getTable().'_'.'post_id'.'_unique')) {
                $table->integer('post_id')->index()->unique()->change();
            }

            //$table->increments('post_id')->change();
            //->autoIncrement()
            $sql='ALTER TABLE '.$this->getTable().' CHANGE COLUMN post_id post_id INT(16) NOT NULL AUTO_INCREMENT FIRST;';
            \DB::unprepared($sql);
            */
        });
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
