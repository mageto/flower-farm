<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flower extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['flower_type_id', 'name', 'description', 'image_name'];

    public function getImagePath()
    {
        return 'images/' . $this->image_name;
    }

    public function flowerType()
    {
        return $this->belongsTo(FlowerType::class);
    }
}
