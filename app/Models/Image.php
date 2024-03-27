<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $table = 'images';
    protected $fillable = [
        'image'
    ];
    public $timestamps = true;
    
    public function getImageAttribute(){
        return url('storage').'/'.$this->attributes['image'];
    }
   

}
