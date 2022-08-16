<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $table = "contact_us";
    protected $fillable = ['company_name', 'phone', 'email', 'add_line_2','add_line_1', 'map'];
}
