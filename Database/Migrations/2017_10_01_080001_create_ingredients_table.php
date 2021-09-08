<?php

declare(strict_types=1);
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
//---- models ---
use Modules\Food\Models\Ingredient as MyModel;

class CreateIngredientsTable extends Migration {
    //protected $table = 'blog_post_ingredients'; // potrebbe essere un ristorante, un ufficio etc etc
    public function getTable(): string {
        return with(new MyModel())->getTable();
    }

    /**
     * Run the migrations.
     */
    public function up(): void {
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table): void {
                $table->increments('id'); //->primary();
                $table->string('created_by');
                $table->string('updated_by');
                //$table->string('deleted_by');
                $table->ipAddress('created_ip');
                $table->ipAddress('updated_ip');
                //$table->ipAddress('deleted_ip'); //$table->ipAddress('visitor');	IP address equivalent column.
                $table->timestamps();
                //$table->softDeletes();
            });
        }

        Schema::table($this->getTable(), function (Blueprint $table): void {
            //$table->increments('post_id')->change();
            //->autoIncrement()
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
