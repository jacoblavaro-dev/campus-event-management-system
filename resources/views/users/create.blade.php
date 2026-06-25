@extends('layouts.app', ['page_title' => 'Create User Info'])

@section('content')

<div class="col-md-6">
    <div class="card card-primary card-outline mb-4">
        <div class="card-header">
            <div class="card-title">User Information</div>
        </div>

        <form action="{{ route('users.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="card-body">

                {{-- First Name --}}
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name</label>
                    <input
                        type="text"
                        name="fname"
                        id="fname"
                        value="{{ old('fname') }}"
                        class="form-control @error('fname') is-invalid @enderror"
                    >
                    @error('fname')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Last Name --}}
                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input
                        type="text"
                        name="lname"
                        id="lname"
                        value="{{ old('lname') }}"
                        class="form-control @error('lname') is-invalid @enderror"
                    >
                    @error('lname')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror"
                    >
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Contact Number --}}
                <div class="mb-3">
                    <label for="contact_number" class="form-label">Contact Number</label>
                    <input
                        type="text"
                        name="contact_number"
                        id="contact_number"
                        value="{{ old('contact_number') }}"
                        class="form-control @error('contact_number') is-invalid @enderror"
                    >
                    @error('contact_number')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Birthdate --}}
                <div class="mb-3">
                    <label for="birthdate" class="form-label">Birthdate</label>
                    <input
                        type="date"
                        name="birthdate"
                        id="birthdate"
                        value="{{ old('birthdate') }}"
                        class="form-control @error('birthdate') is-invalid @enderror"
                    >
                    @error('birthdate')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Address --}}
                <div class="mb-3">
                    <label for="address" class="form-label">Complete Address</label>
                    <input
                        type="text"
                        name="address"
                        id="address"
                        value="{{ old('address') }}"
                        class="form-control @error('address') is-invalid @enderror"
                    >
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control @error('password') is-invalid @enderror"
                    >
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Profile Photo --}}
                <div class="mb-3">
                    <label for="profile_photo" class="form-label">Profile Photo</label>
                    <input
                        type="file"
                        name="profile_photo"
                        id="profile_photo"
                        class="form-control @error('profile_photo') is-invalid @enderror"
                    >
                    @error('profile_photo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Role --}}
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>

                    <select
                        name="role"
                        id="role"
                        class="form-select @error('role') is-invalid @enderror"
                    >
                        <option value="">Select Role</option>
                        <option value="Admin" {{ old('role') == 'Admin' ? 'selected' : '' }}>
                            Admin
                        </option>
                        <option value="Faculty" {{ old('role') == 'Faculty' ? 'selected' : '' }}>
                            Faculty
                        </option>
                    </select>

                    @error('role')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    Create User
                </button>
            </div>

        </form>
    </div>
</div>

@endsection