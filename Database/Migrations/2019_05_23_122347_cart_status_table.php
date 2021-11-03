<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
//----models----
use Modules\Xot\Database\Migrations\XotBaseMigration;

class CartStatusTable extends XotBaseMigration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        //-- CREATE --
        $this->tableCreate(
        function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('color');
            $table->timestamps();
        }
        );

        //-- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
            }
        );
    }
}
