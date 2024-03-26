<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class friendsModel extends Model
{
    use HasFactory;
    protected $table = 'friends';
    protected $primaryKey = 'f_id';
    public $incrementing = true ;
    public $timestamps = false ;
}
