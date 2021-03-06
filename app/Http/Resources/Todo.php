<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Todo extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    /*
	public function toArray($request)
    {
        return parent::toArray($request);
    }
	*/
	public function toArray($request)
	{
		return [
		'text'=> $this->text,
		'completed'=> $this->completed ? true : false,
		];
	}

}
