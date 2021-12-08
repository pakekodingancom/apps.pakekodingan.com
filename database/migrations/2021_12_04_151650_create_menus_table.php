<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('parent_id')->unsigned()->comment='menu id';
            $table->string('menu_name',100)->nullable();
            $table->string('root',50)->nullable();
            $table->tinyInteger('weight')->nullable()->default(0);
            $table->string('icon',50)->nullable();
            $table->tinyInteger('active')->nullable()->default(0);
            $table->string('created_by',50)->nullable();
            $table->string('updated_by',50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
