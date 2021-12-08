<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmtpMailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smtp_mail', function (Blueprint $table) {
            $table->id();
            $table->string('smtp_name',100)->nullable();
            $table->string('smtp_host',50)->nullable();
            $table->string('smtp_port',10)->nullable();
            $table->string('smtp_user',50)->nullable();
            $table->string('smtp_pass',50)->nullable();
            $table->string('subject',200)->nullable();
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
        Schema::dropIfExists('smtp_mail');
    }
}
