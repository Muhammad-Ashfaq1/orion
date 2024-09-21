<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{

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
        'fixture',
        'type'
        ];

    use HasFactory;

    public function productType()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id');
    }

    public function product()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id');
    }
}
