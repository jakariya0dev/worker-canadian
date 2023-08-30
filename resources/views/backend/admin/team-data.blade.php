@extends('backend.admin.admin-master')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <form action="{{ route('update.site.data') }}">

{{--        Team One --}}

        <div class="mb-3">
            <label for="site_name" class="form-label">Name</label>
            <input type="text" class="form-control" name="site_name" value="{{ $siteData->site_name }}">
        </div>

        <br><br>

        <div class="mb-3">
            <label for="site_title" class="form-label">Team One Position</label>
            <input id="site_title" type="text" class="form-control" name="site_title" value="{{ $siteData->site_title }}">
        </div>

        <br><br>

        <div class="mb-3">
            <label for="sub_title" class="form-label">Team Profile Picture</label>
            <input type="text" class="form-control" name="sub_title" value="{{ $siteData->sub_title }}">
        </div>


        <br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    <b><br>
@endsection
