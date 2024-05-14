<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'product_type_id',
        'product_model',
        'wattage',
        'initial_lumen',
        'color_rendering_index',
        'ra',
        'beam_angle',
        'life_hours',
        'guarantee',
        'lamp_size_h1',
        'lamp_size_h2',
        'lamp_size_d',
    ];
}
