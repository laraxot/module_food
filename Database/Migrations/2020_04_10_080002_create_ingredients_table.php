<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
//---- models ---
use Modules\Food\Models\Ingredient as MyModel;

/**
 * Class CreateIngredientsTable.
 */
class CreateIngredientsTable extends Migration {
    /**
     * @return mixed
     */
    public function getTable(): string {
        return with(new MyModel())->getTable();
    }

    /**
     * Run the migrations.
     */
    public function up(): void {
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                $table->increments('id');
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
            if (! Schema::hasColumn($this->getTable(), 'status')) {
                $table->integer('status')->nullable();
            }
            if (Schema::hasColumn($this->getTable(), 'post_id')) {
                $table->renameColumn('post_id', 'id');
            }
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
