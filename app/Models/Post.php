<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Table Name--If you want a custom name
    protected $table = 'posts';
	//Primary Key
	public $primaryKey = 'id';
	//Time Stamps
	public $timeStamp = true;

	public function user()
	{
		return $this->belongsTo('App\User');
	}   
}
