<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFdplansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fdplans', function (Blueprint $table) {
            $table->id();
            $table->string('p_brand');
            $table->string('p_name');
            $table->mediumText('p_image')->nullable();
            $table->string('p_descript')->nullable();
            $table->string('pay_ins_pre');
            $table->string('protection');
            $table->mediumInteger('age');
            $table->integer('net_income');
            $table->string('saving_goal');
            $table->string('pay_ip_type');
            $table->string('divident');
            $table->string('health_ck');
            $table->string('add_contract');
            $table->string('details');
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
        Schema::dropIfExists('fdplans');
    }
}
