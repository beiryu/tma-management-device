<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    const OPEN = 'open';
    const LENT = 'lent';
    const PENDING = 'pending';

    public function devices () {
        return $this->hasMany(Device::class);
    }
}
