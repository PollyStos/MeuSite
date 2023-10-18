<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminPage extends Model
{
    protected $fillable = [
        'Page',
        'Flg',
        'URL'
    ];
    use HasFactory;
}
