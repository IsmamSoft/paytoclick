<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefferDasboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reffer_dasboards', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('reffer_type')->nullable();
            $table->string('refferer_code')->nullable();
            $table->string('refferer_username')->nullable();
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
        Schema::dropIfExists('reffer_dasboards');
    }
}
