<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Food\Models\Location;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateFoodProfilesTable.
 */
class CreateFoodProfilesTable extends XotBaseMigration {
    /**
     * db up.
     */
    public function up(): void {
        //-- CREATE --
        $this->tableCreate(
        function (Blueprint $table) {
            $table->increments('id'); //->primary();
            //$table->string('article_type',50)->nullable();
            //$table->datetime('published_at')->nullable();
            $table->text('bio')->nullable();
            $table->timestamps();
        }
        );

        //-- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! Schema::hasColumn($this->getTable(), 'created_by')) {
                    $table->string('created_by')->nullable();
                }
                if (! Schema::hasColumn($this->getTable(), 'updated_by')) {
                    $table->string('updated_by')->nullable();
                }
                if (! Schema::hasColumn($this->getTable(), 'deleted_by')) {
                    $table->string('deleted_by')->nullable();
                }
                if (! Schema::hasColumn($this->getTable(), 'firstname')) {
                    $table->string('firstname')->nullable();
                }
                if (! Schema::hasColumn($this->getTable(), 'surname')) {
                    $table->string('surname')->nullable();
                }
                if (! Schema::hasColumn($this->getTable(), 'email')) {
                    $table->string('email')->nullable();
                }
                if (! Schema::hasColumn($this->getTable(), 'phone')) {
                    $table->string('phone')->nullable();
                }
                if (! Schema::hasColumn($this->getTable(), 'address')) {
                    $table->string('address')->nullable();
                }
                if (! Schema::hasColumn($this->getTable(), 'user_id')) {
                    $table->integer('user_id')->nullable()->index();
                }

                $address_components = Location::$address_components;
                foreach ($address_components as $el) {
                    if (! Schema::hasColumn($this->getTable(), $el)) {
                        $table->string($el)->nullable();
                    }
                    if (! Schema::hasColumn($this->getTable(), $el.'_short')) {
                        $table->string($el.'_short')->nullable();
                    }
                }
                //$table->increments('post_id')->change();
                //->autoIncrement()

                if (! Schema::hasColumn($this->getTable(), 'status')) {
                    $table->integer('status')->nullable();
                }
                if (Schema::hasColumn($this->getTable(), 'post_id')) {
                    $table->renameColumn('post_id', 'id');
                }
            }
        );
    }
}
