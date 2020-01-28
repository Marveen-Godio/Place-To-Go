<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['adress','postal_number','city','price','type_of_parking_space','publicatio_date','type_of_vehicle','description','pictures','availability'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
