<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//----models----
use Modules\Food\Models\CartStatus as MyModel;

class CartStatusTable extends Migration {
    public function getTable() {
        return with(new MyModel())->getTable();
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //--- create ---
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('color');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        if (Schema::hasTable($this->getTable())) {
            Schema::drop($this->getTable());
        }
    }
}
