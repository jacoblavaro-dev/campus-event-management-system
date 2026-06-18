@extends('layout.app', ['page_title' => 'Edit Profile'])
@section('content')
            <div class="col-md-6">
                <div class="card card-primary card-outline mb-4">
                  <div class="card-header">
                    <div class="card-title">Edit Information</div>
                  </div>
                  <form action="{{ url('users-account', auth()->user()->id) }}" method="POST" encty="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input
                          type="text"
                          class="form-control"
                          id="fname"
                        />
                      </div>
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input
                          type="text"
                          name="lname"
                          class="form-control"
                          id="lname"
                        />
                      </div>
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input
                          type="email"
                          name="email"
                          class="form-control"
                          id="email"
                        />
                      </div>
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="contact_number" class="form-label">Contact Number</label>
                        <input
                          type="text"
                          name="contact_number"
                          class="form-control"
                          id="contact_number"
                        />
                      </div>
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="birthdate" class="form-label">Birthdate</label>
                        <input
                          type="date"
                          name="birthdate"
                          class="form-control"
                          id="birthdate"
                        />
                      </div>
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="address" class="form-label">Complete Address</label>
                        <input
                          type="text"
                          name="address"
                          class="form-control"
                          id="address"
                        />
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" />
                      </div>
                      <div class="input-group mb-3">
                        <input type="file" name="profile_photo" class="form-control" id="inputGroupFile02" />
                        <label class="input-group-text" for="profile_photo">Upload</label>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
@endsection
 