<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warranty extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['start_date', 'end_date', 'warranty_name', 'image_url', 'product_type_id'];
    public function productType()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id');
    }
}
