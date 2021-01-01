<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Leave extends Model
{
    use HasFactory;
    public $table = 'leaves';
    public $primaryKey = 'id';
    protected $fillable = ['reason','from','to','stu_id'];
}
