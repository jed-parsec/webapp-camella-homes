<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class EmployeeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth', 'employee']);
    }


    public function EmployeeCreateAnnouncement () {
        return view ('employee/create-announcement');
    }
    

    public function EmployeeStoreAnnouncement(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:width=500,height=272',
            // 'image' => 'required | image',
            'body' => 'required'
            
        ]);

        $title = $request->input('title');
        $description = $request->input('description');
        if(Announcement::latest()->first() !== null){
            $announcementId = Announcement::latest()->first()->id + 1;
           } else{
               $announcementId = 1;
           }

        $slug = Str::slug($title, '-'). '-' . $announcementId;
        $user_id = Auth::user()-> id;
        $body = $request->input('body');

         //File upload
         $destinationPath = 'images';
         $myimage = $request->image->getClientOriginalName();
         $imagePath= $request->image->move(public_path($destinationPath), $myimage);
 
         $find = '/var/www/html/public';
         $replacement = '';
         $string = $imagePath;
 
         $result = str_replace($find, $replacement, $string);
 
 
 
         $announcement = new Announcement();
         $announcement->title = $title;
         $announcement->description = $description;
         $announcement->slug = $slug;
         $announcement->user_id = $user_id;
         $announcement->body = $body;
         $announcement->imagePath = $result;
 
         $announcement->save();
 
         
         return redirect()->back()->with('status', 'Announcement Posted Successfully');

    }






    public function EmployeeEditAnnouncement($slug) {
        $announcement = Announcement::where('slug', $slug)->firstOrFail();
        return view ('employee/edit-announcement', compact('announcement'));
    }









    public function EmployeeUpdateAnnouncement(Request $request, Announcement $announcement) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:width=500,height=272',
            // 'image' => 'required | image',
            'body' => 'required'
            
        ]);

        $title = $request->input('title');
        $description = $request->input('description');
        $announcementId  = $announcement->id;
        
        

        $slug = Str::slug($title, '-'). '-' . $announcementId;
        // $user_id = Auth::user()-> id;
        $body = $request->input('body');

        //file upload
        // $imagePath = 'storage/' . $request->file('image')->store('uploadedImage', 'public');

        $destinationPath = 'images';
        $myimage = $request->image->getClientOriginalName();
        $imagePath= $request->image->move(public_path($destinationPath), $myimage);

        $find = '/var/www/html/public';
        $replacement = '';
        $string = $imagePath;

        $result = str_replace($find, $replacement, $string);



        // $announcement = new Announcement();
        $announcement->title = $title;
        $announcement->description = $description;
        $announcement->slug = $slug;
        // $announcement->user_id = $user_id;
        $announcement->body = $body;
        $announcement->imagePath = $result;

        $announcement->save();

        
       return redirect()->route('dashboard')->with('status', 'Announcement Updated Successfully');
    }

    public function EmployeeDeleteAnnouncement ($id) {
        DB::table("announcements")->where("id", $id)->delete();

        return redirect('dashboard')->with('status', 'Announcement Deleted Successfully');

    }

}
