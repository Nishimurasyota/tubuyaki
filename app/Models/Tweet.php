<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    //Mass Assignmentの対策
    protected $fillable = ["content"];

    public static $rules = array(
        "content" => "required",
    );
    public function comments(){
        return $this->hasMany("App\Models\Comment");
    }
}
