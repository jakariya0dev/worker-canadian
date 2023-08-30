@extends('backend.admin.admin-master')

@section('content')

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rows as $row)
                    <tr>
                        <th scope="row">{{ $row->id }}</th>
                        <td>{{ $row->contact_number }}</td>
                        <td>{{ $row->email_address }}</td>
                        <th scope="col">
                            <a href="{{ route('application.view', $row->id) }}" class="btn btn-sm btn-primary">View</a>
                            <a href="{{ route('application.delete', $row->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $rows->links('pagination::bootstrap-5') }}
    </div>
@endsection
