<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class dogs extends Model
{
    //
    protected $table="dogs";
    public $timestamps=false;
}
