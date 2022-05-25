<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $guarded = [] ;

    public function profileImage() {
        return ($this->image) ? '/storage/' .$this -> image: 'http://127.0.0.1:8000/storage/profile/mH25fZeBKYzDL7KqulUpWz6sgV2vur7qjvY9iHvH.jpg';
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
