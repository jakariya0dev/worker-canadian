@extends('backend.user.user-master')

@section('content')

    <div class="container">
        <br><br><br><br>
        <form action="{{ route('apply.here') }}" method="post" enctype="multipart/form-data">

                @csrf

                <h4 class="mb-3">1. Contact Information</h4>

                <div class="row g-5">
                    <div class="col-md-6">
                        <label for="firstName" class="form-label">Contact Number</label>
                        <input name="contact_number" type="text" class="form-control" id="firstName" required>
                        <div class="invalid-feedback">Valid contact number is required.</div>
                    </div>

                    <div class="col-md-6">
                        <label for="lastName" class="form-label">Email Address</label>
                        <input name="email_address" type="email" class="form-control" id="lastName" required>
                        <div class="invalid-feedback">Valid email address is required.</div>
                    </div>

                    <div class="col-md-6">
                        <label for="state" class="form-label">Select Job Type</label>
                        <select name="job_type" class="form-select" id="state" required>
                            <option value="">Choose...</option>
                            <option>California</option>
                            <option>California</option>
                            <option>California</option>
                            <option>California</option>
                        </select>
                        <div class="invalid-feedback">Please provide a valid state.</div>
                    </div>
                </div>

                <h4 class="mb-3 mt-5">2. Important Documents</h4>

                <div class="row g-5 mb-5">

                    <div class="col-md-6">
                        <label for="email" class="form-label">Upload Your Photo *</label>
                        <input name="pro_pic" type="file" class="form-control" id="email" required>
                        <div class="invalid-feedback">
                            Please upload Your Photo.
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="address" class="form-label">Upload Your NID *</label>
                        <input name="nid" type="file" class="form-control" id="address" required>
                        <div class="invalid-feedback">
                            Please Upload Your NID.
                        </div>
                    </div>

                </div>

                <div class="row g-5">
                    <div class="col-6">
                        <label for="address2" class="form-label">Upload Your Passport *</label>
                        <input name="passport" type="file" class="form-control" id="address2" required>
                        <div class="invalid-feedback">
                            Please Upload Your Passport.
                        </div>
                    </div>

                    <div class="col-6">
                        <label for="address" class="form-label">Upload Skill Certificate *</label>
                        <input name="skills" type="file" class="form-control" id="address" required>
                        <div class="invalid-feedback">
                            Please Upload Skill Certificate.
                        </div>
                    </div>
                </div>

                <h4 class="mb-4 mt-5" >3. Payment Instruction</h4>

                <h5 class="mb-3">Select Number to Payment</h5>

                <div class="my-3">
                    <div class="form-check">
                        <input id="credit" name="number_to_payment" type="radio" class="form-check-input" checked required value="01762940480">
                        <label class="form-check-label" for="credit">01762940480</label>
                    </div>
                    <div class="form-check">
                        <input id="debit" name="number_to_payment" type="radio" class="form-check-input" required value="01521466603">
                        <label class="form-check-label" for="debit">01521466603</label>
                    </div>
                </div>

                <div class="row g-5">
                    <div class="col-md-6">
                        <label for="cc-name" class="form-label">Transaction Number</label>
                        <input name="transaction_id" type="text" class="form-control" id="cc-name" placeholder="" required>
                    </div>

                    <div class="col-md-6">
                        <label for="cc-number" class="form-label">Your Payment Number</label>
                        <input name="number_from_payment" type="text" class="form-control" id="cc-number" placeholder="" required>
                    </div>
                </div>

                <button class="w-25 btn btn-primary btn-lg mt-3" type="submit">Submit</button>

            </form>
    </div>

@endsection
