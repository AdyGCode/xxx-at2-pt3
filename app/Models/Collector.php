<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

//use Illuminate\Database\Eloquent\Model;

class Collector extends Model
{
    use HasFactory;

    # Name the collection 'table' for MongoDB
    protected $collection = 'collectors';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'given_name',
        'family_name',
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
//        return $this->hasMany(Car::class);
        return $this->belongsToMany(Car::class, null, 'car_ids', 'collector_ids');
    }

}
