<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return[
            'id'=>$this->id,
            'cus_name'=>$this->name,
            'cus_email'=>$this->email,
            'country_id'=>$this->country_id,
            // 'created_at'=>$this->created_at,
            // 'updated_at'=>$this->updated_at,
            
        ];
    }
}
