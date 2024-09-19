<?php

namespace Mewasim\Tracker\Http\Controllers;

use Mewasim\Tracker\Models\UserActivity;
use Illuminate\Routing\Controller;

class TrackerController extends Controller
{
    public function index()
    {
        $activities = UserActivity::latest()->paginate(15);
        return view('tracker::index', compact('activities'));
    }
}
