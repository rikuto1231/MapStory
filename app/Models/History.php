<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $table = 'histories';
    protected $primaryKey = 'history_id';
    protected $keyType = 'int';
    
    public $timestamps = true;

    protected $fillable = [
        'action',
    ];

    /**
     * Postテーブルとの多対多の関係を定義する
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'records', 'history_id', 'post_id');
    }
}
