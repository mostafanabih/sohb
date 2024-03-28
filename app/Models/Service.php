<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
    use HasTranslations;

    protected $table = 'services';
    protected $fillable = [
        'name','description','icone','image'
    ];
    public $timestamps = true;
    public array $translatable = [
        'name','description'
    ];

    public function getIconeAttribute(){
        return url('storage').'/'.$this->attributes['icone'];
    }
    public function getImageAttribute(){
        return url('storage').'/'.$this->attributes['image'];
    }
   
    

}
