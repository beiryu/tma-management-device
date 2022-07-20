<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppConst extends Model
{
    use HasFactory;

    const USER_ID = 2;
    const RELATED_DEVICE = 3;
    const DEVICE_PER_PAGE = 4;
    const DEVICE_PER_ADMIN_PAGE = 10;
    
    const USER = 'user';
    const SUPPERVISOR = 'admin';
    const MY_MAIL = 'dinhnguyenkhanh210401@gmail.com';
}
