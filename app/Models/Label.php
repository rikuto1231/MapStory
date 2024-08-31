<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    use HasFactory;

    protected $table = 'labels';

    protected $primaryKey = 'label_id';

    protected $keyType = 'int';

    public $timestamps = true;

    protected $fillable = [
        'post_id',
        'tag_id',
    ];

    /**
     * リレーション: Post モデル
     */
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'post_id');
    }

    /**
     * リレーション: Tag モデル
     */
    public function tag()
    {
        return $this->belongsTo(Tag::class, 'tag_id', 'tag_id');
    }
}
