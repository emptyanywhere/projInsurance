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
            $table->boolean('gender'); 
            $table->integer('age'); //อายุ
            $table->integer('income'); //รายได้ของผู้ใช้
            $table->boolean('goal'); //เป้าหมายระยะเวลาในการออม
            $table->boolean('divident'); //ต้องการเงินปันผลไหม
            $table->boolean('pay_type'); //รูปแบบการจ่าย
            $table->boolean('check_health'); //ต้องการตรวจสุขภาพ
            $table->boolean('additional_contract'); //สัญญาเพิ่มเดิม
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
