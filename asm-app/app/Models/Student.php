<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Leave;

class Student extends Model
{
    use HasFactory;
    public $table = 'students';
    public $primaryKey = 'stu_id';
    public $timestaps = true;

    protected $fillable = ['stu_id','name','department'];

    public function getLeaves(){
        return $this->hasMany('App\Models\Leave','stu_id');
    }


}
