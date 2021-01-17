<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fdplan extends Model
{
    protected $fillable = [
        'p_brand', 'p_name', 'p_image', 'p_descript', 'pay_ins_pre', 'protection', 'age', 'net_income', 'saving_goal',
        'pay_ip_type', 'divident', 'health_ck', 'add_contract' , 'details'
    ];
}
