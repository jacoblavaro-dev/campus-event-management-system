@extends('layouts.app', ['page_title' => 'Edit User Info'])
@section('content')

<div class="col-md-6">
    @if(session('success'))
     <div class="alert alert-success" role="alert">
       {{ session('success') }}
    </div>
    @endif
    <div class="card card-primary card-outline mb-4">
        <div class="card-header">
            <div class="card-title">Edit Information</div>
        </div>

        <form action="{{ url('users', $user->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="card-body">

                <div class="mb-3">
                    <label for="fname" class="form-label">First Name</label>
                    <input
                        type="text"
                        name="fname"
                        class="form-control @error ('fname') is-invalid @enderror"
                        id="fname"
                        value="{{ $user->fname }}"
                    >
                </div>

                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input
                        type="text"
                        name="lname"
                        class="form-control @error ('lname') is-invalid @enderror"
                        id="lname"
                        value="{{ $user->lname }}"
                    >
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control @error ('email') is-invalid @enderror"
                        id="email"
                        value="{{ $user->email }}"
                    >
                </div>

                <div class="mb-3">
                    <label for="contact_number" class="form-label">Contact Number</label>
                    <input
                        type="text"
                        name="contact_number"
                        class="form-control @error ('contact_number') is-invalid @enderror"
                        id="contact_number"
                        value="{{ $user->contact_number }}"
                    >
                </div>

                <div class="mb-3">
                    <label for="birthdate" class="form-label">Birthdate</label>
                    <input
                        type="date"
                        name="birthdate"
                        class="form-control @error ('birthdate') is-invalid @enderror"
                        id="birthdate"
                        value="{{ $user->birthdate }}"
                    >
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Complete Address</label>
                    <input
                        type="text"
                        name="address"
                        class="form-control @error ('address') is-invalid @enderror"
                        id="address"
                        value="{{ $user->address }}"
                    >
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input
                        type="password"
                        name="password"
                        class="form-control @error ('password') is-invalid @enderror"
                        id="password"
                    >
                </div>

                <div class="mb-3">
                    <label for="profile_photo" class="form-label">Profile Photo</label>
                    <input
                        type="file"
                        name="profile_photo"
                        class="form-control @error ('profile_photo') is-invalid @enderror"
                        id="profile_photo"
                    >
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    Update Profile
                </button>
            </div>

        </form>
    </div>
</div>

@endsection 