<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

//use Illuminate\Database\Eloquent\Model;

# remember to change to use Jens Segger's MongoDB package


class Car extends Model
{
    use HasFactory;

    # Name the collection 'table' for MongoDB
    protected $collection = "cars";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'model',
        'manufacturer',
        'price',
        'collector_ids'
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


    public function collectors()
    {
        return $this->belongsToMany(Collector::class, null, 'collector_ids', 'car_ids');
    }

}
