<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasTranslations;

    protected $table = 'settings';
    protected $fillable = [
        'title','phone','email','snapchat','insta','twitter','facebook','logo'
    ];
    public $timestamps = true;
    public array $translatable = [
        'title'
    ];

    public function getLogoAttribute(){
        return url('storage').'/'.$this->attributes['logo'];
    }

}
