<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Contact extends Model
{
    use HasTranslations;

    protected $table = 'contacts';
    protected $fillable = [
        'name','email','message'
    ];
    

}
