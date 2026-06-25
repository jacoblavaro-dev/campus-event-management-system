@extends('layouts.app', ['page_title' => 'Organization Info'])

@section('content')

<div class="col-md-6">
    <div class="card card-primary card-outline mb-4">
        <div class="card-header">
            <div class="card-title">Create Organization</div>
        </div>

        <form action="{{ route('organizations.store') }}" method="POST">
            @csrf

            <div class="card-body">

                <div class="mb-3">
                    <label for="name" class="form-label">Organization Name</label>
                    <input type="text" name="name" id="name"
                        value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="adviser" class="form-label">Adviser</label>
                    <input type="text" name="adviser" id="adviser"
                        value="{{ old('adviser') }}"
                        class="form-control @error('adviser') is-invalid @enderror">
                    @error('adviser')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select name="category" id="category"
                        class="form-select @error('category') is-invalid @enderror">
                        <option value="">Select Category</option>
                        <option value="Academic" {{ old('category') == 'Academic' ? 'selected' : '' }}>Academic</option>
                        <option value="Religious" {{ old('category') == 'Religious' ? 'selected' : '' }}>Religious</option>
                        <option value="Sports" {{ old('category') == 'Sports' ? 'selected' : '' }}>Sports</option>
                        <option value="Cultural" {{ old('category') == 'Cultural' ? 'selected' : '' }}>Cultural</option>
                    </select>
                    @error('category')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status"
                        class="form-select @error('status') is-invalid @enderror">
                        <option value="">Select Status</option>
                        <option value="Active" {{ old('status') == 'Active' ? 'selected' : '' }}>Active</option>
                        <option value="Inactive" {{ old('status') == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    Create Organization
                </button>
            </div>

        </form>
    </div>
</div>

@endsection