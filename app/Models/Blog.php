<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use softDeletes;
    use HasFactory;
    protected $fillable = [
        'id',
        'category_id',
        'name',
        'slug',
        'description',
        'image',
        'meta_title',
        'meta_description',
        'status',
        'meta_keywords'
    ];
    
    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class,'category_id','id');
    }

}
