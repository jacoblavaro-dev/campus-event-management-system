@extends('layouts.app', ['page_title' => 'Organization Info'])

@section('content')

<div class="col-md-6">
    <div class="card card-primary card-outline mb-4">
        <div class="card-header">
            <div class="card-title">Create Organization</div>
        </div>

        <form action="{{ route('organizations.store') }}" method="POST">
            @csrf
            @include('organizations.form')

            

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    Create Organization
                </button>
            </div>

        </form>
    </div>
</div>

@endsection