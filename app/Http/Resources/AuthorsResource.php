<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthorsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string,mixed>
     */
    public function toArray(Request $req): array
    {

        return
        [
                // 'dataa'=>[

// according to the json specification ids must be in string
// so we use 'id'=>(string)$this->id, instead of 'id'=>$this->id,
                    'id'=>(string)$this->id,

                     'type'=>"Authors here it come",
                    'attributes' =>[
                        'name'=>$this->name,
                        'Created_at'=>$this->created_at->format('Y-m-d'), //incase you wanna format 'Y-m-d-h-m-s'
                        'Updated_at'=>$this->updated_at->format('Y-m-d')
                        ]
                // ]
               ];
   }
}
