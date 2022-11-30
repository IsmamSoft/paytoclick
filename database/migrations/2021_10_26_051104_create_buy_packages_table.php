<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_packages', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('quote')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('package')->nullable();
            $table->string('oparetor')->nullable();
            $table->string('number')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('buy_packages');
    }
}
