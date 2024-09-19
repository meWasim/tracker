<?php

namespace Mewasim\Tracker\Models;

use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    protected $fillable = [
        'user_id',
        'username', // Added username field
        'action',
        'url',
        'ip_address'
    ];
}
