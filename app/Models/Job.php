<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_listings'; //Привязка к таблице по названию,т.к у модели и таблицы разные имена.

    protected $fillable = ['title', 'salary']; //Поля которые можно заполнять.

}
