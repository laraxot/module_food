<?php

declare(strict_types=1);
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//----- models-------
use Modules\Food\Models\RestaurantProvider as MyModel;

class CreateRestaurantProvidersTable extends Migration {
    //protected $table = 'restaurant_providers'; //blog_post_locations
    public function getTable(): string {
        return with(new MyModel())->getTable();
    }

    public function up(): void {
        if (! Schema::hasTable($this->getTable())) {
            Schema::create($this->getTable(), function (Blueprint $table) {
                $table->increments('id');
                $table->string('provider')->nullable();
                $table->integer('post_id')->index();
                $table->string('url')->nullable();

                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists($this->getTable());
    }
}//end CreateBlogPostLocationsTable
