<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

# remember to change to use Jens Segger's MongoDB package


class Car extends Model
{
    use HasFactory;

    # Name the collection 'table' for MongoDB
    protected $collection = "cars";

    public function collectors()
    {
        $this->belongsToMany(Collector::class);
    }

}
