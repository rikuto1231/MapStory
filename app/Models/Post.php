<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $primaryKey = 'post_id';
    protected $KeyType = 'int';
    public $timestamp = true;

    protected $fillable = [
        'user_id', 'title', 'description', 'latitude', 'longitude','is_deleted'
    ];

    public function user(){
        // 子モデル側での１対多の書き方
        return $this->belongsTo(User::class,'user_id', 'user_id');
    }

    public function like(){
        return $this->hasMany(Like::class,'post_id','post_id');
    }

    public function bookmark(){
        return $this->hasMany(Bookmark::class,'post_id','post_id');
    }

    public function tag(){
        
    }

}
