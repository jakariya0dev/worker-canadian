@extends('backend.user.user-master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="min-vh-100 d-flex justify-content-md-center align-items-center">
                <div class="card m-auto " style="width: 22rem;">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card-body">
                        <h5 class="my-3 text-center card-title">User Profile</h5>
                        <br>
                        <form action="{{ route('user.bio') }}">

                            <div class="mb-3">
                                <label for="email" class="form-label">Passport No.</label>
                                <input name="user-pass-no" class="form-control" id="email"  required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">User Password</label>
                                <input name="user-password" type="password" class="form-control" id="password" required>
                            </div>

                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
