<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
// --- models --
// use Modules\Food\Models\IngredientCat as MyModel;

use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateIngredientCatsTable.
 */
class CreateIngredientCatsTable extends XotBaseMigration {
    /*
    public function getTable()
    {
        return with(new MyModel())->getTable();
    }
    */

    /**
     * Run the migrations.
     */
    public function up(): void {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id'); // ->primary();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->string('deleted_by')->nullable();
                $table->ipAddress('created_ip')->nullable();
                $table->ipAddress('updated_ip')->nullable();
                $table->ipAddress('deleted_ip')->nullable(); // $table->ipAddress('visitor');    IP address equivalent column.
                $table->timestamps();
                $table->softDeletes();
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
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
                // -------- CHANGE ----------------
                $schema_builder = Schema::getConnection()
                    ->getDoctrineSchemaManager()
                    ->listTableDetails($table->getTable());
                /*
                if (! $schema_builder->hasIndex($this->getTable().'_'.'post_id'.'_unique')) {
                    $table->integer('post_id')->index()->unique()->change();
                }
                */
                if (Schema::hasColumn($this->getTable(), 'post_id')) {
                    $table->renameColumn('post_id', 'id');
                }
                if (! Schema::hasColumn($this->getTable(), 'status')) {
                    $table->integer('status')->nullable();
                }
            }
        );
    }
}
