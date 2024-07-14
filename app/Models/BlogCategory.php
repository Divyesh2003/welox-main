<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Model\Blog;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends Model
{
    use softDeletes;
    use HasFactory;

    protected $fillable = [
        'id',
        'parent_id',
        'name',
        'slug',
        'description',
        'image',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'featured_show',
        'impression',
        'status',
    ];
    public function blog()
    {
        return $this->belongsTo(Blog::class,'category_id','id');
    }
}
