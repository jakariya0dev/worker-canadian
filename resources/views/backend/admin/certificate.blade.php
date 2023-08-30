@extends('backend.admin.admin-master')

@section('content')

    <form class="row g-3" action="{{ route('certificate.search') }}">
        @csrf
        <div class="col-md-6">
            <label for="inputPassword2" class="visually-hidden">Passport No.</label>
            <input name="pass_no" type="text" class="form-control" id="inputPassword2" placeholder="Passport No.">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Search</button>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Passport Number</th>
                <th scope="col">Actions</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($certificates as $certificate)
                <tr>
                    <th scope="row">{{ $certificate->id }}</th>
                    <td>{{ $certificate->pass_no }}</td>
                    <th scope="col">
                        <a href="{{ route('certificate.delete', $certificate->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </th>
                </tr>
            @endforeach

            </tbody>
        </table>
        {{ $certificates->links('pagination::bootstrap-5') }}
    </div>

    <hr>
    <h4 class="mt-5 mb-3">Add New Certificate</h4>
    <form class="row g-3" method="post" action="{{ route('certificate.save') }}" enctype="multipart/form-data">
        @csrf
        <div class="col-auto">
            <label for="staticEmail2" class="visually-hidden">Upload</label>
            <input name="certificate" type="file"  class="form-control-plaintext" id="staticEmail2" value="email@example.com">
        </div>
        <div class="col-auto">
            <label for="inputPassword2" class="visually-hidden">Passport No.</label>
            <input name="pass_no" type="text" class="form-control" id="inputPassword2" placeholder="Passport Number">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Upload Certificate</button>
        </div>
    </form>
@endsection
