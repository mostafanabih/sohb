<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class About extends Model
{
    protected $table = 'abouts';

    use HasTranslations;
    protected $fillable = [
        'name',
        'description',
        'message',
        'message_description',
        'aim',
        'aim_description',
        'view',
        'view_description',
        'image',
        'cover',
    ];
    public array $translatable = [
        'name','description','message','message_description','aim','aim_description','view','view_description'
    ];




}
