<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// ----- models-------
use Modules\Food\Models\Location as MyModel;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateLocationsTable.
 */
class CreateLocationsTable extends XotBaseMigration {
    /**
     * db up.
     */
    public function up(): void {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id'); // ->primary();
                $table->string('term')->nullable();
                // $table->string('location')->nullable(); // location sostituito da locality per copia da google api
                $address_components = MyModel::$address_components;
                foreach ($address_components as $el) {
                    if (! Schema::hasColumn($this->getTable(), $el)) {
                        $table->string($el)->nullable();
                    }
                }
                $table->decimal('latitude', 15, 10)->nullable();
                $table->decimal('longitude', 15, 10)->nullable();
                $table->integer('radius')->nullable();
                $table->string('formatted_address')->nullable();
                $table->string('nearest_street')->nullable();
                $table->timestamps();
            });

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                // $table->increments('post_id')->change();
                // ->autoIncrement()
                if (! Schema::hasColumn($this->getTable(), 'created_by')) {
                    $table->string('created_by')->index()->nullable(); // item collegati all'utente
                    $table->string('updated_by')->index()->nullable(); // item collegati all'utente
                }
                $address_components = MyModel::$address_components;
                foreach ($address_components as $el) {
                    if (! Schema::hasColumn($this->getTable(), $el)) {
                        $table->string($el)->nullable();
                    }
                }

                if (! Schema::hasColumn($this->getTable(), 'restaurants_count')) {
                    $table->integer('restaurants_count')->index()->nullable();
                }

                if (! Schema::hasColumn($this->getTable(), 'status')) {
                    $table->integer('status')->nullable();
                }
                if (Schema::hasColumn($this->getTable(), 'post_id')) {
                    $table->renameColumn('post_id', 'id');
                }
            });
    }
}// end CreateBlogPostLocationsTable
