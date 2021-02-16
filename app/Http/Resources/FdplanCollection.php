<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class FdplanCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
             'data' => $this->collection->map(function ($each){
                 $each->payandprotect = 'จ่ายเบี้ยประกัน ' . $each->pay_ins_pre . ' ปี คุ้มครอง ' . $each->protection . ' ปี';
                 return $each;
             }), //ข้อมูลมาเหมือนเดิม เพิ่ม virtual field => company
            'links' => [
                'foo' => url('api/testpath/foo') //test add links passed property name is foo
            ]
        ];
    }

    public function with($request)
    {
        return [
            'api-version' => '1.0',
            'laravel-version' => '7.30.0'
        ];
    }
}
