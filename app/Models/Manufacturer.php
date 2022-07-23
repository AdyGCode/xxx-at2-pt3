<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

//use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    # Name the collection 'table' for MongoDB
    protected $collection = 'manufacturers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'car_ids',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [];


    public function cars()
    {
        return $this->hasMany(Car::class);
//        return $this->hasMany(Car::class, 'id', 'car_ids');
    }

}
