<?php

namespace Keshab\SendEmail\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = ['email','subject','message'];
}
