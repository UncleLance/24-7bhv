<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostContent extends Model
{
    use HasFactory;

    protected $table = 'post_content';
    protected $fillable = [
        'content',
        'post_id'
    ];

    public function post_content(){
        return $this->belongsTo('\App\Models\Post', 'post_id');
    }
}
