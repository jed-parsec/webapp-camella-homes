<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    //


    public function __construct()
    {
        $announcements = Announcement::all();
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    public function index () {

        $announcements = Announcement::all();
        return view ('camela.announcements', compact('announcements'));
    }

    public function show ($slug) {
        $announcement = Announcement::where('slug', $slug)->first();
        return view('camela.single-announcement', compact('announcement'));
    }

}
