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
        <div class="mb-3">
            <label for="site_name" class="form-label">Site Name</label>
            <input type="text" class="form-control" name="site_name" value="{{ $siteData->site_name }}">
        </div>
        
        <br><br>

        <div class="mb-3">
            <label for="site_title" class="form-label">Site Title</label>
            <input type="text" class="form-control" name="site_title" value="{{ $siteData->site_title }}">
        </div>
    
        <br><br>
 
        <div class="mb-3">
             <label for="sub_title" class="form-label">Sub Title</label>
            <input type="text" class="form-control" name="sub_title" value="{{ $siteData->sub_title }}">
        </div>
    
        <br><br>
 
        <div class="mb-3">
            <label for="cell_no" class="form-label">Contact Number</label>
             <input type="text" class="form-control" name="cell_number" value="{{ $siteData->cell_number }}">
        </div>
    
        <br><br>
 
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" name="location" value="{{ $siteData->location }}">
        </div>
    
        <br><br>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ $siteData->email }}">
        </div>
    
        <br><br>
 
        <div class="mb-3">
            <label for="sd" class="form-label">Short Description for Bottom</label>
            <input type="text" class="form-control" name="short_desc" value="{{ $siteData->short_desc }}">
        </div>
    
        <br><br>

        <div class="mb-3">
             <label for="twitter" class="form-label">Twitter</label>
             <input type="text" class="form-control" name="twitter" value="{{ $siteData->twitter }}">
        </div>

        <br><br> 

        <div class="mb-3">
            <label for="instagram" class="form-label">Instagram</label>
             <input type="text" class="form-control" name="instagram" value="{{ $siteData->instagram }}">
        </div>

        <br><br>

        <div class="mb-3">
            <label for="facebook" class="form-label">Facebook</label>
             <input type="text" class="form-control" name="facebook" value="{{ $siteData->facebook }}">
        </div>

        <br><br>
 
        <div class="mb-3">
             <label for="linkedin" class="form-label">Linkedin</label>
             <input type="text" class="form-control" name="linkedin" value="{{ $siteData->linkedin }}">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
 
    <b><br>
@endsection