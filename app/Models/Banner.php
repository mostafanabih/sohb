<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Banner extends Model
{
    protected $table = 'banners';

    use HasTranslations;
    protected $fillable = [
        'name',
        'description',
        'image',
    ];
    public array $translatable = [
        'name','description'
    ];


    public function getImageAttribute(){
        return url('storage').'/'.$this->attributes['image'];
    }
   




}
