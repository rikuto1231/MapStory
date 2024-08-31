<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $primaryKey = 'tag_id';
    protected $KeyType = 'int';
    public $timestamps = true;

    protected $fillable = [
        'tag_name',
    ];

    public function post()
    {
        return $this->belongsToMany(Post::class, 'labels', 'tag_id', 'post_id');
    }
}
