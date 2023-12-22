<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ImageCrud extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if($model->getKey() == null){
                $model->setAttribute($model->getKeyName(), (string) Str::uuid());
            }
                
        });
    }
}
