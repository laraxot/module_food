<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// ----- models-------
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateProfilePrivacyChronosTable.
 */
class CreateProfilePrivacyChronosTable extends XotBaseMigration {
    /**
     * db up.
     */
    public function up(): void {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->nullable()->index();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->string('created_ip')->nullable();
                $table->string('updated_ip')->nullable();
                // $table->string('deleted_by')->nullable();
                // $table->string('deleted_ip')->nullable();
                $table->timestamps();
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
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
            }
        );
    }
}// end
