<?php

declare(strict_types=1);
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Food\Models\Location;
use Modules\Food\Models\Profile as MyModel;

class CreateFoodProfilesTable extends Migration {
    public function getTable(): string {
        return with(new MyModel())->getTable();
    }

    public function up(): void {
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                $table->increments('id'); //->primary();
                //$table->string('article_type',50)->nullable();
                //$table->datetime('published_at')->nullable();
                $table->text('bio')->nullable();
                $table->timestamps();
            });
        }
        Schema::table($this->getTable(), function (Blueprint $table) {
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
            if (! Schema::hasColumn($this->getTable(), 'auth_user_id')) {
                $table->integer('auth_user_id')->nullable()->index();
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
            //$sql = 'ALTER TABLE '.$this->getTable().' CHANGE COLUMN post_id post_id INT(16) NOT NULL AUTO_INCREMENT FIRST;';
            //\DB::unprepared($sql);
        });
    }

    public function down(): void {
        Schema::dropIfExists($this->getTable());
    }
}
