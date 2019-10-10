<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Student extends JsonResource
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
         'responseMessage' => "Success", "responseCode" => 200,
        'data'=>['student_id' =>$this->student_id,
          'Name' => $this->Name,
          'Address'=> $this->Address,
          'gender'=> $this->gender,
          'year'=>$this->year
       ],
      ];
    }
}
