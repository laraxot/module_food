<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//----- models-------
use Modules\Food\Models\ProfilePrivacyChrono;

/**
 * Class CreateProfilePrivacyChronosTable.
 */
class CreateProfilePrivacyChronosTable extends Migration {
    public function getTable(): string {
        return with(new ProfilePrivacyChrono())->getTable();
    }

    /**
     * db up.
     *
     * @return void
     */
    public function up(): void {
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->nullable()->index();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->string('created_ip')->nullable();
                $table->string('updated_ip')->nullable();
                //$table->string('deleted_by')->nullable();
                //$table->string('deleted_ip')->nullable();
                $table->timestamps();
            });
        }
        Schema::table($this->getTable(), function (Blueprint $table) {
            if (! Schema::hasColumn($this->getTable(), 'checkbox_position')) {
                $table->integer('checkbox_position')->nullable();
            }
            if (! Schema::hasColumn($this->getTable(), 'checkbox_value')) {
                $table->string('checkbox_value')->nullable();
            }
            if (! Schema::hasColumn($this->getTable(), 'checkbox_label_id')) {
                $table->integer('checkbox_label_id')->nullable();
            }
            if (! Schema::hasColumn($this->getTable(), 'checkbox_label')) {
                $table->text('checkbox_label')->nullable();
            }
            if (Schema::hasColumn($this->getTable(), 'auth_user_id')) {
                $table->renameColumn('auth_user_id', 'user_id');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists($this->getTable());
    }
}//end
