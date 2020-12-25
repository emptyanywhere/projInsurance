<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConditionFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condition_forms', function (Blueprint $table) {
            $table->id();
            $table->integer('age');
            $table->integer('income');
            $table->boolean('goal');
            $table->boolean('divident');
            $table->boolean('pay_type');
            $table->boolean('check_health');
            $table->boolean('other_plan');
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
        Schema::dropIfExists('condition_forms');
    }
}
