<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_accesses', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('role_id')->unsigned()->nullable();
            $table->tinyInteger('menu_id')->unsigned()->nullable();
            $table->tinyInteger('view')->unsigned()->nullable()->default(0);
            $table->tinyInteger('read')->unsigned()->nullable()->default(0);
            $table->tinyInteger('read_all')->unsigned()->nullable()->default(0);
            $table->tinyInteger('create')->unsigned()->nullable()->default(0);
            $table->tinyInteger('update')->unsigned()->nullable()->default(0);
            $table->tinyInteger('delete')->unsigned()->nullable()->default(0);
            $table->tinyInteger('approve')->unsigned()->nullable()->default(0);
            $table->tinyInteger('download')->unsigned()->nullable()->default(0);
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
        Schema::dropIfExists('role_accesses');
    }
}
