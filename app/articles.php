<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    
    
    protected $table = "articles";

    // An array of the fields we can fill in the comments table
   	protected $fillable = ['title', 'content'];

    //protected $hidden = ['id'];


	






}
