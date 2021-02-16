<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FdplanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'company' => $this->p_brand,
            'product' => $this->p_name
        ];
    }

    public function with($request)
    {
        return [
            'api-verison' => '1.0',
            'laravel-version' => '7.30.0'
        ];
    }
}
