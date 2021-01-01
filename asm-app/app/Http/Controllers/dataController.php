<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class dataController extends Controller
{
   function relation(){
       return Student::find(1227)->getLeaves;
   }
}
