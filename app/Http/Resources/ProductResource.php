<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'inventory_id'=>$this->id,
            'name'=>$this->name,
            'picture'=>$this->picture,
            'price'=>$this->price,
            'category'=>$this->category,
            'cus_id'=>CustomerResource::make($this->arrange),
            'country'=>CustomerResource::make($this->arrange->country),
            // 'created_at'=>$this->created_at,
            // 'updated_at'=>$this->updated_at,
            
        ];
    }
}
