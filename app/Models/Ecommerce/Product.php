<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return \Database\Factories\ProductFactory::new();
    }

    protected $fillable = [
        'product_name',
        'sku_code',
        'url_slug',
        'main_image',
        'category_id',
        'brand_id',
        'description',
        'short_description',
        'manufacturer_name',
        'price',
        'discount',
        'tags',
        'publish_schedule',
        'visibility',
        'status',
        'meta_title',
        'meta_keywords',
        'meta_description',

        'sales_count',
        'view_count',
        'wishlist_count',
    ];
    


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Generate slug from product_name
            $model->url_slug = Str::slug($model->product_name);
            
            // Generate SKU code if not provided
            if (empty($model->sku_code)) {
                $model->sku_code = 'SKU-' . strtoupper(Str::random(8));
            }
        });

        static::updating(function ($model) {
            // Update slug if product_name is changed
            $model->url_slug = Str::slug($model->product_name);
        });
    }




    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function details()
    {
        return $this->hasMany(ProductDetail::class);
    }

    public function specifications()
    {
        return $this->hasMany(ProductSpecification::class);
    }

    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }
    public function cart()
    {
        return $this->hasOne(Cart::class);
    }
    public function wishlist()
    {
        return $this->hasOne(Wishlist::class);
    }
    public function compare()
    {
        return $this->hasOne(Compare::class);
    }

    public function inventory()
    {
        return $this->hasMany(InventoryManagement::class);
    }
}
