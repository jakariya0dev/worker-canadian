@extends('backend.admin.admin-master')

@section('content')

    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Actions</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->mobile }}</td>
                <th scope="col">
                  <a href="{{ route('bio.view', $user->id) }}" class="btn btn-sm btn-primary">View</a>
                  <a href="{{ route('bio.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                  <a href="{{ route('bio.delete', $user->id) }}" class="btn btn-sm btn-danger">Delete</a>
              </th>
              </tr>
            @endforeach
          
        </tbody>
      </table>
      {{ $users->links('pagination::bootstrap-5') }}
    </div>
@endsection    