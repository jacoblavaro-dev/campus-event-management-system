@extends('layouts.app', ['page_title' => 'Organizations'])

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Organization List</h4>
        <a href="{{ route('organizations.create') }}" class="btn btn-primary btn-sm float-end">
            Add Organization
        </a>
    </div>

    <div class="card-body">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Organization Name</th>
                    <th>Adviser</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($organizations as $key => $organization)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $organization->name }}</td>
                        <td>{{ $organization->adviser }}</td>
                        <td>{{ $organization->category }}</td>
                        <td>
                            <span class="badge bg-{{ $organization->status == 'Active' ? 'success' : 'danger' }}">
                                {{ $organization->status }}
                            </span>
                        </td>

                        <td>
                            <a href="{{ route('organizations.edit', $organization->id) }}"
                               class="btn btn-success btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('organizations.destroy', $organization->id) }}"
                                  method="POST"
                                  style="display:inline-block">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Delete this organization?')">
                                    Delete
                                </button>

                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No organizations found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
</div>

@endsection