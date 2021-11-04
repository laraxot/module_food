<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//---- models ---
//use Modules\Food\Models\Recipe as MyModel;

use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateRecipesTable.
 */
class CreateRecipesTable extends XotBaseMigration {
    /*
    public function getTable()
    {
        return with(new MyModel())->getTable();
    }
    */

    public function up(): void {
        //-- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id'); //->primary();

                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->string('deleted_by')->nullable();

                $table->ipAddress('created_ip')->nullable();
                $table->ipAddress('updated_ip')->nullable();
                $table->ipAddress('deleted_ip')->nullable();
                $table->timestamps();
            }
        );

        //-- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                //------- add
                if (! Schema::hasColumn($this->getTable(), 'created_by')) {
                    $table->string('created_by')->nullable();
                }
                if (! Schema::hasColumn($this->getTable(), 'updated_by')) {
                    $table->string('updated_by')->nullable();
                }
                if (! Schema::hasColumn($this->getTable(), 'deleted_by')) {
                    $table->string('deleted_by')->nullable();
                }
                //---------- delete
                if (Schema::hasColumn($this->getTable(), 'day_name')) {
                    $table->dropColumn(['day_name']);
                }
                if (Schema::hasColumn($this->getTable(), 'day_of_week')) {
                    $table->dropColumn(['day_of_week']);
                }
                if (Schema::hasColumn($this->getTable(), 'open_at')) {
                    $table->dropColumn(['open_at']);
                }
                if (Schema::hasColumn($this->getTable(), 'close_at')) {
                    $table->dropColumn(['close_at']);
                }
                //-------- CHANGE INDEX----------------
                $schema_builder = Schema::getConnection()
                    ->getDoctrineSchemaManager()
                    ->listTableDetails($table->getTable());
                /*
                if (! $schema_builder->hasIndex($this->getTable().'_'.'post_id'.'_unique')) {
                $table->integer('post_id')->ignore()->index()->unique()->change();
                }
                */

                //-------- CHANGE ----------------

                $table->string('created_by')->nullable()->change();
                $table->string('updated_by')->nullable()->change();
                //$table->string('deleted_by')->nullable()->change();
                //$table->string('deleted_by')->nullable()->change();
                //$table->string('created_ip')->nullable()->change();
                //$table->string('updated_ip')->nullable()->change();
                //$table->string('deleted_ip')->nullable()->change();
                if (Schema::hasColumn($this->getTable(), 'post_id')) {
                    $table->renameColumn('post_id', 'id');
                }
                if (Schema::hasColumn($this->getTable(), 'id')) {
                    $table->increments('id')->change();
                }
                if (! Schema::hasColumn($this->getTable(), 'status')) {
                    $table->integer('status')->nullable();
                }
            }
        );
    }
}