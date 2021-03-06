<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use Sluggable, SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'image', 'image_path', 'category_id', 'price', 'in_discount', 'discount', 'description', 'status' ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
                'unique' => true,
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo( Category::class );
    } # End method category

    public function productGalleries()
    {
        return $this->hasMany( ProductGallery::class );
    } # End method productGalleries

} # End clas Product
