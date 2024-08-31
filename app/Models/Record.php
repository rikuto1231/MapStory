<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $table = 'records';

    protected $primaryKey = 'record_id';

    protected $keyType = 'int';

    public $timestamps = true;

    protected $fillable = [
        'post_id',
        'history_id',
    ];

    /**
     * リレーション: Post モデル
     */
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'post_id');
    }

    /**
     * リレーション: History モデル
     */
    public function history()
    {
        return $this->belongsTo(History::class, 'history_id', 'history_id');
    }
}
