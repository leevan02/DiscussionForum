<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Discussion_type;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function dashboard()
    {
        $users = User::count();
        $discussion_type= Discussion_type::count();
        return view('admin.index',compact('users','discussion_type'));
    }

    public function users()
    {
        $users=User::all();

        return view('admin.users',compact('users'));
    }

    public function userprofile($id)
    {
        $user=User::find($id);

        return view('admin.userprofile',compact('user'));
    }


    public function edituser($id)
    {
        $user=User::find($id);

        return view('admin.edituser',compact('user'));
    }

    public function editeduser($id,Request $request)
    {
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        
        $user->save();




        return redirect()->back();
    }

    public function deleteuser($id)
    {
        $user=User::find($id);
        $user->delete();

        return view('admin.userprofile',compact('user'));
    }


    public function adddiscussion(Request $request)
    {
        $discussion = new Discussion_type;
        $discussion->discussion_type = $request->discussion_type;
        $discussion->status = $request->status;
        $discussion->save();


        return redirect(url('discussion_type'));
    }


    public function discussion_type()
    {
        

        $discussion_type = Discussion_type::all();

        return view('admin.discussion_type',compact('discussion_type'));
    }


    public function deletediscussion($id)
    {
        $user=Discussion_type::find($id);
        $user->delete();

        return redirect(url('discussion_type'));
    }
}