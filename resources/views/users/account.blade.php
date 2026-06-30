@extends('layouts.app', ['page_title' => 'Edit Profile'])
@section('content')
<<<<<<< HEAD
<div class="col-md-6">
    @if(session('success'))
    <div class="alert alert-success" role="alert">
          {{ session('success') }}            
    </div>
    @endif

=======

<div class="col-md-6">
        @if(session('success'))
     <div class="alert alert-success" role="alert">
       {{ session('success') }}
    </div>
    @endif
>>>>>>> b80778736e79fc83cfd17e3582d4491083aa35b4
    <div class="card card-primary card-outline mb-4">
        <div class="card-header">
            <div class="card-title">Edit Information</div>
        </div>

<<<<<<< HEAD
        <form action="{{ url('users-account', auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
            @csrf   
            @method('PUT')
            <div class="card-body">
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" name="fname" class="form-control @error('fname') is-invalid @enderror" id="fname" value="{{ old('fname', $user->fname) }}" />
                    @error('fname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
=======
        <form action="{{ url('users-account' . auth()->user()->id) }}"
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
>>>>>>> b80778736e79fc83cfd17e3582d4491083aa35b4
                </div>

                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
<<<<<<< HEAD
                    <input type="text" name="lname" class="form-control @error('lname') is-invalid @enderror" id="lname" value="{{ old('lname', $user->lname) }}" />
                    @error('lname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror   
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email', $user->email) }}" />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select name="role" id="role" class="form-control @error('role') is-invalid @enderror">
                        <option value="Faculty" {{ old('role', $user->role) == 'Faculty' ? 'selected' : '' }}>Faculty</option>
                        <option value="Admin" {{ old('role', $user->role) == 'Admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                    @error('role')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
=======
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
>>>>>>> b80778736e79fc83cfd17e3582d4491083aa35b4
                </div>

                <div class="mb-3">
                    <label for="contact_number" class="form-label">Contact Number</label>
<<<<<<< HEAD
                    <input type="text" name="contact_number" class="form-control @error('contact_number') is-invalid @enderror" id="contact_number" value="{{ old('contact_number', $user->contact_number) }}" />
                    @error('contact_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="birthdate" class="form-label">BirthDate</label>
                    <input type="date" name="birthdate" class="form-control @error('birthdate') is-invalid @enderror" id="birthdate" value="{{ old('birthdate', $user->birthdate) }}" />
                    @error('birthdate')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
=======
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
>>>>>>> b80778736e79fc83cfd17e3582d4491083aa35b4
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Complete Address</label>
<<<<<<< HEAD
                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" value="{{ old('address', $user->address) }}" />
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
=======
                    <input
                        type="text"
                        name="address"
                        class="form-control @error ('address') is-invalid @enderror"
                        id="address"
                        value="{{ $user->address }}"
                    >
>>>>>>> b80778736e79fc83cfd17e3582d4491083aa35b4
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
<<<<<<< HEAD
                    <input type="password" name="password" class="form-control" id="password" placeholder="Leave blank to keep current password" />
                </div>

                <div class="input-group mb-3">
                    <input type="file" name="profile_photo" class="form-control" id="profile_photo" />
                    <label class="input-group-text" for="profile_photo">Upload</label>
                </div>
                
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
=======
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

>>>>>>> b80778736e79fc83cfd17e3582d4491083aa35b4
@endsection