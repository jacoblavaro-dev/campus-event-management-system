<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;

class OrganizationController extends Controller
{
    public function index()
    {
        $organizations = Organization::latest()->get();

        return view('organizations.index', compact('organizations'));
    }

    public function create()
    {
        $data['users'] = User::where('role', 'Faculty')->orderBy('fname')->get();
        return view('organizations.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}