<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockContent extends Model
{
    use HasFactory;
    protected $table = 'cms_block_content';
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'image',
        'content_type'
    ];
}
