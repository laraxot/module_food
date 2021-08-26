<?php

declare(strict_types=1);
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//------- models ----------
use Modules\Food\Models\Cuisine as MyModel;

class CreateCuisinesTable extends Migration {
    public function getTable() {
        return with(new MyModel())->getTable();
    }

    public function up(): void {
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table): void {
                $table->increments('id'); //->primary();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->timestamps();
            });
        }
        Schema::table($this->getTable(), function (Blueprint $table): void {
            //$table->increments('post_id')->change();
            //->autoIncrement()

            //------ ADD
            if (! Schema::hasColumn($this->getTable(), 'created_by')) {
                $table->string('created_by')->nullable();
            }
            if (! Schema::hasColumn($this->getTable(), 'updated_by')) {
                $table->string('updated_by')->nullable();
            }
            if (! Schema::hasColumn($this->getTable(), 'updated_at') && ! Schema::hasColumn($this->getTable(), 'created_at')) {
                $table->timestamps();
            }
            //------ CHANGE
            /* -- modelservice
            $schema_builder = Schema::getConnection()
                ->getDoctrineSchemaManager()
                ->listTableDetails($table->getTable());

            if (!$schema_builder->hasIndex($this->getTable().'_'.'post_id'.'_unique')) {
                $table->integer('post_id')->index()->unique()->change();
            }
            */
        });
    }

    public function down(): void {
        Schema::dropIfExists($this->getTable());
    }
}
