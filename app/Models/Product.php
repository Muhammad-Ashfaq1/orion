<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'product_type_id',
        'product_model',
        'shape',
        'wattage',
        'initial_lumen',
        'stable_lumen',
        'ra',
        'beam_angle',
        'life_hours',
        'guarantee',
        'lamp_size_h1',
        'lamp_size_h2',
        'lamp_size_d',
        'inches',
        'd_round',
        'd_square',
        'cut_square',
        'cut_round',
        'h',
        'image_url',
        'lamp_size_w',
        'lamp_size_i',
        'lamp_size_l',
        'lamp_size_t',
        'ip_class',
        ];
    public function productType()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id');
    }

    public function getImageUrlAttribute($value)
    {
        if ($value) {
            return url(Storage::url('images/products/' . $value));
        }
        return null;
    }
}
