<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //
	protected $fillable = ['id', 'text', 'completed', 'user_id'];
	//
	public function __construct() {
		session(['data' => collect([
				[
				'id'=> 1,
				'text'=> "Tache n°1",
				'completed'=> true,
				'user_id'=> 1
				],
				[
				'id'=> 2,
				'text'=> "Tache n°2",
				'completed'=> false,
				'user_id'=> 1
				],
				[
				'id'=> 3,
				'text'=> "Tache n°3",
				'completed'=> false,
				'user_id'=> 1
				],
				[
				'id'=> 4,
				'text'=> "Tache n°4",
				'completed'=> false,
				'user_id'=> 1
				],
				[
				'id'=> 5,
				'text'=> "Tache n°5",
				'completed'=> false,
				'user_id'=> 1
				]
			])
		]);
	}
	public function getData() {
		//dd(session('data'));
		return session('data');
	}
	public  function getDataById($id) {
		//dump('id='.$id);
		//dump('data='.$this->getData());
		foreach($this->getData() as $item) {
			//dump('item='.$item['id']); 
			//dd('id='.$id);
			if ($item['id'] == $id) {
				return collect($item);
			}
		}
		return collect();
	}
	public function add($data) {
		session(['data'=> $this->getData()->push($data)]);
	}
}
