<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
//----- models-------
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateRestaurantProvidersTable.
 */
class CreateRestaurantProvidersTable extends XotBaseMigration {
    /**
     * db up.
     *
     * @return void
     */
    public function up() {
        //-- CREATE --
        if (! $this->tableExists()) {
            $this->getConn()->create($this->getTable(), function (Blueprint $table) {
                $table->increments('id');
                $table->string('provider')->nullable();
                $table->integer('post_id')->index();
                $table->string('url')->nullable();
                $table->timestamps();
            });
        }
        //-- UPDATE --
        $this->getConn()->table($this->getTable(), function (Blueprint $table) {
            if (! $this->hasColumn('created_by')) {
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();
            }

            if ($this->hasColumn('post_id')) {
                $table->renameColumn('post_id', 'restaurant_id');
            }
        });
    }
}
