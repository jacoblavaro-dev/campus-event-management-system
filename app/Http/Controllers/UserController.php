<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        return view('users.create');
    }

    /**
     * Store a newly created user
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'fname'         => 'required',
                'lname'         => 'required',
                'email'         => 'required|email|unique:users,email',
                'password'      => 'required|min:8',
                'profile_photo' => 'nullable|image',
                'role'          => 'required',
            ],
            [
                'fname.required' => 'The first name field is required.',
                'lname.required' => 'The last name field is required.',
            ]
        );

        $photoPath = null;

        if ($request->hasFile('profile_photo')) {
            $extension = $request->file('profile_photo')
                ->getClientOriginalExtension();

            $filename = Str::slug(
                $request->fname . '-' . time()
            ) . '.' . $extension;

            $photoPath = $request->file('profile_photo')
                ->storeAs('users', $filename, 'public');
        }

        $user = new User();

        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->contact_number = $request->contact_number;
        $user->birthdate = $request->birthdate;
        $user->password = bcrypt($request->password);
        $user->profile_photo = $photoPath;
        $user->role = $request->role;

        $user->save();

        return redirect()
            ->route('users.index')
            ->with('success', 'User created successfully.');
    }

    public function edit($id)
    {
        $data['user'] = User::findOrFail($id);

        return view('users.edit', $data);
    }

    /**
     * Update an existing user
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'fname'         => 'required',
                'lname'         => 'required',
                'email'         => 'required|email|unique:users,email,' . $id,
                'password'      => 'nullable|min:8',
                'profile_photo' => 'nullable|image',
                'role'          => 'required',
            ],
            [
                'fname.required' => 'The first name field is required.',
                'lname.required' => 'The last name field is required.',
            ]
        );

        $user = User::findOrFail($id);

        $photoPath = $user->profile_photo;

        if ($request->hasFile('profile_photo')) {

            if (
                $user->profile_photo &&
                Storage::disk('public')->exists($user->profile_photo)
            ) {
                Storage::disk('public')->delete($user->profile_photo);
            }

            $extension = $request->file('profile_photo')
                ->getClientOriginalExtension();

            $filename = Str::slug(
                $request->fname . '-' . time()
            ) . '.' . $extension;

            $photoPath = $request->file('profile_photo')
                ->storeAs('users', $filename, 'public');
        }

        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->contact_number = $request->contact_number;
        $user->birthdate = $request->birthdate;

        if (!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }

        $user->profile_photo = $photoPath;
        $user->role = $request->role;

        $user->save();

        return redirect()
            ->back()
            ->with('success', 'Information has been updated.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if (
            $user->profile_photo &&
            Storage::disk('public')->exists($user->profile_photo)
        ) {
            Storage::disk('public')->delete($user->profile_photo);
        }

        $user->delete();

        return redirect()
            ->back()
            ->with('success', 'The user has been deleted.');
    }

    public function editAccount($id)
    {
        $data['user'] = User::findOrFail($id);

        return view('users.account', $data);
    }

    public function updateAccount(Request $request, $id)
    {
        return $this->update($request, $id);
    }
}