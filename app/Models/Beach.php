<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beach extends Model
{
    use HasFactory;

    //price relation, country might become a related model even
    protected $fillable = ['name', 'country', 'price'];

    public function weathers() 
    {
        
        return $this->belongsToMany(WeatherContoller, 'beach_weather', 'beach_id', 'weather_id');
       
    }
}
