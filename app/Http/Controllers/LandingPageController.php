<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //
    public function index () {
        $announcements = Announcement::all();

        return view ('camela.frontpage', compact('announcements'));
    }
}
