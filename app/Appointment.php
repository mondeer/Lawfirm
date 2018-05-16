<?php

namespace kalya;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['name', 'email', 'contact', 'message'];
}
