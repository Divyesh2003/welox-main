<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'image',
        'icon',
        'description',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'total_view',
        'status',
    ];

    public function group()
    {
        return $this->belongsTo(AttributeGroup::class,'attribute_groups_id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }
    
    public function parents()
    {
        return $this->belongsTo(Category::class,'parent_id')->with('parents');
    }

    public function child()
    {
        return $this->hasMany(Category::class, 'id', 'parent_id');
    }

    public function childs()
    {
        return $this->hasMany(Category::class, 'id', 'parent_id')->with('childs');
    }

     // old
    public function children() {
        return $this->hasMany(Category::class,'parent_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_products', 'category_id', 'product_id');
    }

    public function block()  //jinal
    {
        return $this->hasOne(Block::class ,'id','cms_block');
    }

}
