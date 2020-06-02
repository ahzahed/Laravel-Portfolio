<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $table='reviews';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public  $timestamps=false;
}
