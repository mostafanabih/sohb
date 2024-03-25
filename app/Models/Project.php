<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasTranslations;

    protected $table = 'projects';
    protected $fillable = [
        'name','description','images'
    ];
    protected $casts = [
        'images' => 'json',
    ];
    public $timestamps = true;
    public array $translatable = [
        'name','description'
    ];

    public function getImageAttribute(){
        return url('storage').'/'.$this->attributes['images'];
    }
   
    

}
