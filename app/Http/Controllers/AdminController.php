<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function AdminListUser() {
        return view ('admin.user-list');
    }
}
