<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        $data['users'] = User::latest()->get();
        return view('users.index', $data);
    }


    public function create()
    {
        return view('users')
    }

    public function store(Request $request)
    {
        $user = new User;
    }
    
    public function edit($id)
    {
        $data['user'] = User::find($id);
        return view('users.edit', $data);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if($user->profile_photo && Storage::disk('public')->exists($user->profile_photo)){
            Storage::disk('public')->delete($user->profile_photo);
        }
        $user->delete();

        return redirect()->back()->with('success', 'The user has been deleted.');
    }

    public function editAccount($id)
    {
        $data['user'] = User::find($id);
        return view ('users.account', $data);
    }

    public function updateAccount(Request $request, $id)
    {
        $request->validate(
            [
                'fname'             => 'required',
                'lname'             => 'required',
                'email'             => 'required|email|unique:users,id,' . $id,
                'password'          => 'nullable|min:8',
                'profile_photo'     => 'nullable|image',
            ],
            [
                'fname.required'    => 'The first name field is required',
                'lname.required'    => 'The first name field is required'
            ]
        );

        $photoPath =null;
        if($request->hasFile('profile_Photo')){
            $extension =$request->file('profile_photo')->getClientOriginalExtension();
            $filename= Str::slug(
                $request->fname . ' ' . time(). '.' . $extension
            );

            $photoPath =$request->file('profile_photo')->storeAs('users', $filename, 'public');
        }
        $user = User::find($id);
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->contact_number = $request->contact_number;
        $user->birthdate = $request->birthdate;
        if($request->password != '') {
            $user->password = bcrypt($request->password);
        }
        $user->profile_photo = $photoPath;
        $user->save();

        return redirect()->back()->with('success', 'Information has been saved.');

    }
}
