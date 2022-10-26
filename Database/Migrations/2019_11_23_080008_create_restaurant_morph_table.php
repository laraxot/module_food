<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Xot\Database\Migrations\XotBaseMigration;

// ----- models -----

// --
/* 2019_11_23_080004_
https://phppot.com/php/php-star-rating-system-with-javascript/
https://www.phpzag.com/star-rating-system-with-ajax-php-and-mysql/
*/

/**
 * Class CreateRestaurantMorphTable.
 */
class CreateRestaurantMorphTable extends XotBaseMigration {
    /**
     * db up.
     */
    public function up(): void {
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id');
                $table->nullableMorphs('post');
                $table->nullableMorphs('related');
                $table->integer('user_id')->nullable()->index();

                $table->string('note')->nullable();

                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
                $table->string('deleted_by')->nullable();
                $table->timestamps();
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                if (! Schema::hasColumn($this->getTable(), 'role_id')) {
                    $table->integer('role_id')->nullable();
                }

                if (! Schema::hasColumn($this->getTable(), 'status')) {
                    $table->integer('status')->nullable();
                }
                if (Schema::hasColumn($this->getTable(), 'related_id')) {
                    $table->renameColumn('related_id', 'restaurant_id');
                }
                if (Schema::hasColumn($this->getTable(), 'auth_user_id')) {
                    $table->renameColumn('auth_user_id', 'user_id');
                }

                /*
                if (!Schema::hasColumn($this->getTable(), 'created_by')) {
                    $table->string('created_by')->nullable();
                    $table->string('updated_by')->nullable();
                    $table->string('deleted_by')->nullable();
                };
                */
            });
    }
}
