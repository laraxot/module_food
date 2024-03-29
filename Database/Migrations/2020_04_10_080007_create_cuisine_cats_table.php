<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Modules\Xot\Database\Migrations\XotBaseMigration;

/**
 * Class CreateCuisineCatsTable.
 */
class CreateCuisineCatsTable extends XotBaseMigration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        // -- CREATE --
        // -- CREATE --
        $this->tableCreate(
            function (Blueprint $table) {
                $table->increments('id'); // ->primary();
                $table->string('day_name');
                $table->integer('day_of_week');
                $table->time('open_at'); // time or timeTz ??
                $table->time('close_at');
                $table->boolean('is_closed')->nullable();  // field from closed to is_closed is more readable
                $table->text('note')->nullable();
                $table->string('created_by')->nullable();
                $table->string('updated_by')->nullable();

                $table->timestamps();
                // $table->softDeletes();
            }
        );

        // -- UPDATE --
        $this->tableUpdate(
            function (Blueprint $table) {
                /* if ($this->hasColumn('post_id')) {
                     $table->renameColumn('post_id', 'id');
                 }
                 try {
                     $table->increments('id'); //->primary();
                 } catch (\Exception $e) {
                     echo $e->getMessage();
                 }
                 */
            }
        );

        /*
        Schema::table($this->getTable(), function (Blueprint $table): void {
            if (! Schema::hasColumn($this->getTable(), 'status')) {
                $table->integer('status')->nullable()->after('post_id');
            }
            if (Schema::hasColumn($this->getTable(), 'post_id')) {
                $table->renameColumn('post_id', 'id');
            }
        });
        */
    }
}
