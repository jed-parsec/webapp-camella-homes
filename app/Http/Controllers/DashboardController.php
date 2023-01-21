<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }



   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function handleEmployeeDashboard()
    {
    //     $announcements = Announcement::all();
    //     return view('employee/employee-dashboard', compact('announcements'));
            return view ('employee/dashboard');
    }

    public function handleAdminDashboard () {
        // $announcements = Announcement::all();
        // return view ('admin/admin-dashboard', compact('announcements'));
        return view ('admin/admin_dashboard');
    }
}
