<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Modules\Food\Models\OpeningHour as MyModel;

/**
 * Class CreateOpeningHoursTable.
 */
class CreateOpeningHoursTable extends Migration {
    public function getTable(): string {
        return with(new MyModel())->getTable();
    }

    /**
     * Run the migrations.
     */
    public function up() {
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                $table->increments('id');
                $table->integer('post_id');
                $table->string('day_name');
                $table->integer('day_of_week');
                $table->time('open_at')->nullable();
                //time or timeTz ??
                $table->time('close_at')->nullable();

                $table->boolean('is_closed')->nullable();  //field from closed to is_closed is more readable
                $table->text('note')->nullable();
                $table->string('created_by')->nullable();

                $table->string('updated_by')->nullable();

                $table->string('deleted_by')->nullable();

                $table->ipAddress('created_ip')->nullable();

                $table->ipAddress('updated_ip')->nullable();

                $table->ipAddress('deleted_ip')->nullable();
                //$table->ipAddress('visitor');	IP address equivalent column.

                $table->timestamps();
                $table->softDeletes();
            });
        }

        Schema::table($this->getTable(), function (Blueprint $table) {
            if (! Schema::hasColumn($this->getTable(), 'is_closed')) {
                $table->boolean('is_closed')->nullable();
            }
            if (! Schema::hasColumn($this->getTable(), 'post_type')) {
                $table->string('post_type')->index()->nullable();
            }
            if (! Schema::hasColumn($this->getTable(), 'deleted_by')) {
                $table->string('deleted_by')->nullable();
            }
            //-------------- CHANGE -------------
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
            if (Schema::hasColumn($this->getTable(), 'open_at')) {
                $table->time('open_at')->nullable()->change();
            }
            if (Schema::hasColumn($this->getTable(), 'close_at')) {
                $table->time('close_at')->nullable()->change();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() {
        if (Schema::hasTable($this->getTable())) {
            Schema::drop($this->getTable());
        }
    }
}
