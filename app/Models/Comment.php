<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tweet;

class Comment extends Model
{
    use HasFactory;

    public static $rules = array(
        "comment" => "required",
    );

    public function tweet(){
        return $this->belongsTo("App\Models\Tweet");
    }

    protected $fillable = [
        "comment",
        "tweet_id",
    ];
}
