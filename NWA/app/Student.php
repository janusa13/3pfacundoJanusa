<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table= 'student';
    use HasFactory;
    protected $fillable =['alumn_DNI','nombre','apellido','fecha_nac'];
}
