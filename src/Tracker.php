<?php

namespace Mewasim\Tracker;

use Mewasim\Tracker\Models\UserActivity;
use Illuminate\Support\Facades\Auth;

class Tracker
{
    public static function log($action, $url = null)
    {
        $url = $url ?? request()->url();

        UserActivity::create([
            'user_id' => Auth::id(),
            'username' => Auth::user()->name, // Added username field
            'action' => $action,
            'url' => $url,
            'ip_address' => request()->ip(),
        ]);
    }
}
