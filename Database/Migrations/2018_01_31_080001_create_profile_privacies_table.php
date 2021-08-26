<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//----- models-------
use Modules\Food\Models\ProfilePrivacy  as MyModel;

/**
 * Class CreateProfilePrivaciesTable.
 */
class CreateProfilePrivaciesTable extends Migration {
    public function getTable(): string {
        return with(new MyModel())->getTable();
    }

    /**
     * db up.
     *
     * @return void
     */
    public function up() {
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                $table->increments('id');
                $table->integer('auth_user_id')->nullable()->index();
                $table->integer('flag_id')->nullable();
                $table->string('flag_value')->nullable();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                //$table->string('deleted_by')->nullable();//se mettero' softdelete
                $table->string('created_ip')->nullable();
                $table->string('updated_ip')->nullable();
                //$table->string('deleted_ip')->nullable();
                $table->timestamps();
            });
        }
        Schema::table($this->getTable(), function (Blueprint $table) {
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() {
        Schema::dropIfExists($this->getTable());
    }
}//end CreateBlogPostLocationsTable
