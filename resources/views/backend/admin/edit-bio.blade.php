@extends('backend.admin.admin-master')

@section('content')
        <form class="g-3" method="POST" action="{{ route('bio.update') }}">
            @csrf
            @method('put')

            {{-- A. Personal Particulars (As in Passport --}}

            <h5 class="mt-5 mb-3">A. Personal Particulars (As in Passport)</h5>
            <hr>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="sure-name" class="form-label">Sure Name</label>
                    <input value="{{ $user->sure_name }}" name="sure_name" type="text" class="form-control" id="sure-name">
                  </div>
                  <div class="col-md-4">
                    <label for="name" class="form-label">Name</label>
                    <input value="{{ $user->name }}" name="name" type="text" class="form-control" id="name">
                  </div>
                  <div class="col-md-4">
                      <label for="other-name" class="form-label">Previous/other Name if any</label>
                      <input value="{{ $user->o_name }}" name="o_name" type="text" class="form-control" id="other-name">
                  </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="gender" class="form-label">Gender</label>
                    <select name="gender" id="gender" class="form-select">
                      <option selected>Choose...</option>
                      <option>Male</option>
                      <option>Female</option>
                      <option>Other</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <label for="married-status" class="form-label">Married Status</label>
                    <select name="m_status" id="gender" class="form-select">
                      <option selected>Choose...</option>
                      <option>Married</option>
                      <option>Unmarried</option>
                      <option>Divorce</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <label for="religion" class="form-label">Religion</label>
                    <input value="{{ $user->religion }}" name="religion" type="text" class="form-control" id="religion">
                  </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="date-of-birth" class="form-label">Date of Birth</label>
                    <input  value="{{ $user->dob }}"name="dob" type="date" class="form-control" id="date-of-birth">
                </div>  
                <div class="col-md-4">
                    <label for="place-of-birth" class="form-label">Place of Birth Town/City</label>
                    <input value="{{ $user->pob }}" name="pob" type="text" class="form-control" id="place-of-birth">
                </div> 
                <div class="col-md-4">
                    <label for="country-of-birth" class="form-label">Country of Birth</label>
                    <input value="{{ $user->cob }}" name="cob" type="text" class="form-control" id="country-of-birth">
                </div>  
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="nid-no" class="form-label">Citizenship /National ID No</label>
                    <input  value="{{ $user->nid }}" name="nid" type="text" class="form-control" id="nid-no">
                </div>  
                <div class="col-md-4">
                    <label for="education" class="form-label">Educational Qualification</label>
                    <input value="{{ $user->education }}" name="education" type="text" class="form-control" id="education">
                </div> 
                <div class="col-md-4">
                    <label for="visibility" class="form-label">Visible Identification marks</label>
                    <input  value="{{ $user->visibility }}" name="visibility" type="text" class="form-control" id="visibility">
                </div>  
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="cn" class="form-label">Current Nationality</label>
                    <input value="{{ $user->c_nation }}" name="c_nation" type="text" class="form-control" id="cn">
                </div>  
                <div class="col-md-4">
                    <label for="nationality-type" class="form-label">Nationality Type</label>
                    <input value="{{ $user->n_type }}" name="n_type" type="text" class="form-control" id="nationality-type">
                </div> 
                <div class="col-md-4">
                    <label for="other-nationality" class="form-label">Any Other Previous/ Past Nationality</label>
                    <input value="{{ $user->o_nation }}" name="o_nation" type="text" class="form-control" id="other-nationality">
                </div>  
            </div>

            {{-- B. Passport Details --}}

            <h5 class="mt-5 mb-3">B. Passport Details</h5>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="passport-no" class="form-label">Passport No.</label>
                    <input  value="{{ $user->pass_no }}" name="pass_no" type="text" class="form-control" id="passport-no">
                </div>  
                <div class="col-md-6">
                    <label for="date-of-issue" class="form-label">Date of issue</label>
                    <input  value="{{ $user->pass_doi }}" name="pass_doi"  type="date" class="form-control" id="date-of-issue">
                </div> 
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="place-of-issue" class="form-label">Place of Issue</label>
                    <input value="{{ $user->pass_poi }}" name="pass_poi" type="text" class="form-control" id="place-of-issue">
                </div>  
                <div class="col-md-6">
                    <label for="date-of-expiry" class="form-label">Date of Expiry</label>
                    <input value="{{ $user->pass_doe }}" name="pass_doe" type="date" class="form-control" id="date-of-expiry">
                </div> 
            </div>

            <p>Any other Passport/dentity Certificate held (if yes ,Please fill in the following)</p>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="passport-no" class="form-label">Passport No.</label>
                    <input value="{{ $user->op_no }}" name="op_no" type="text" class="form-control" id="passport-no">
                </div>  
                <div class="col-md-6">
                    <label for="date-of-issue" class="form-label">Date of issue</label>
                    <input  value="{{ $user->op_doi }}" name="op_doi" type="date" class="form-control" id="date-of-issue">
                </div> 
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="place-of-issue" class="form-label">Place of Issue</label>
                    <input value="{{ $user->op_poi }}" name="op_poi" type="text" class="form-control" id="place-of-issue">
                </div>  
                <div class="col-md-6">
                    <label for="date-of-expiry" class="form-label">Date of Expiry</label>
                    <input value="{{ $user->op_doe }}" name="op_doe" type="date" class="form-control" id="date-of-expiry">
                </div> 
            </div>

            {{-- C. Applicant’s Contact Details --}}
            <h5 class="mt-5 mb-3">C. Applicant’s Contact Details</h5>
            <hr>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="phone" class="form-label">Phone No.</label>
                    <input value="{{ $user->phone }}" name="phone" type="text" class="form-control" id="phone">
                  </div>
                  <div class="col-md-4">
                    <label for="mobile" class="form-label">Mobile No.</label>
                    <input value="{{ $user->mobile }}" name="mobile" type="text" class="form-control" id="mobile">
                  </div>
                  <div class="col-md-4">
                      <label for="email" class="form-label">Email Address</label>
                      <input value="{{ $user->email }}" name="email" type="text" class="form-control" id="email">
                  </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="present-address" class="form-label">Present Address</label>
                    <input value="{{ $user->pre_address }}" name="pre_address" class="form-control" id="present-address" style="height: 100px"></input>
                  </div>
                  <div class="col-md-6">
                    <label for="permanent-address" class="form-label">Permanent Address</label>
                    <input value="{{ $user->per_address }}" name="per_address" class="form-control" id="permanent-address" style="height: 100px"></input>
                  </div>
            </div>

            {{-- D. Family Details --}}
            
            <h5 class="mt-5 mb-3">D. Family Details</h5>
            <hr>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="fathers-name" class="form-label">Father's Name</label>
                    <input value="{{ $user->f_name }}" name="f_name" type="text" class="form-control" id="fathers-name">
                  </div>
                  <div class="col-md-4">
                    <label for="fnationality" class="form-label">Nationality</label>
                    <input value="{{ $user->f_nation }}" name="f_nation" type="text" class="form-control" id="fnationality">
                  </div>
                  <div class="col-md-4">
                      <label for="fcob" class="form-label">Country of Birth</label>
                      <input value="{{ $user->f_cob }}" name="f_cob" type="text" class="form-control" id="fcob">
                  </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="mothers-name" class="form-label">Mother's Name</label>
                    <input value="{{ $user->m_name }}" name="m_name" type="text" class="form-control" id="mothers-name">
                  </div>
                  <div class="col-md-4">
                    <label for="mnationality" class="form-label">Nationality</label>
                    <input value="{{ $user->m_nation }}" name="m_nation" type="text" class="form-control" id="mnationality">
                  </div>
                  <div class="col-md-4">
                      <label for="mcob" class="form-label">Country of Birth</label>
                      <input value="{{ $user->m_cob }}" name="m_cob" type="text" class="form-control" id="mcob">
                  </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="spouse-name" class="form-label">Spouse Name</label>
                    <input value="{{ $user->s_name }}" name="s_name" type="text" class="form-control" id="spouse-name">
                  </div>
                  <div class="col-md-4">
                    <label for="snationality" class="form-label">Nationality</label>
                    <input value="{{ $user->s_nation }}" name="s_nation" type="text" class="form-control" id="snationality">
                  </div>
                  <div class="col-md-4">
                      <label for="scob" class="form-label">Country of Birth</label>
                      <input  value="{{ $user->s_cob }}" name="s_cob" type="text" class="form-control" id="scob">
                  </div>
            </div>

            {{-- E. Details of Visa Sought --}}

            <h5 class="mt-5 mb-3">E. Details of Visa Sought</h5>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="tovr" class="form-label">Type Of Visa Required</label>
                    <input value="{{ $user->tov }}" name="tov" type="text" class="form-control" id="tovr">
                  </div>
                  <div class="col-md-6">
                    <label for="noe" class="form-label">No of Entries</label>
                    <input value="{{ $user->noe }}" name="noe" type="text" class="form-control" id="noe">
                  </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="pov" class="form-label">Period of Visa (Month)</label>
                    <input value="{{ $user->pov }}" name="pov" type="text" class="form-control" id="pov">
                  </div>
                  <div class="col-md-6">
                    <label for="edoj" class="form-label">Expected Date of Journey</label>
                    <input value="{{ $user->edoj }}" name="edoj" type="date" class="form-control" id="edoj">
                  </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="poa" class="form-label">Port Of Arrival</label>
                    <input value="{{ $user->poa }}" name="poa" type="text" class="form-control" id="poa">
                  </div>
                  <div class="col-md-6">
                    <label for="poe" class="form-label">Port Of Exit</label>
                    <input value="{{ $user->poe }}" name="poe" type="text" class="form-control" id="poe">
                  </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="status" class="form-label">Visa Status</label>
                    <input value="{{ $user->status }}" name="status" type="text" class="form-control" id="status">
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input value="{{ $user->password }}" name="status" type="text" class="form-control" id="password">
                </div>
            </div>

            <input value="{{ $user->id }}" type="hidden" name="id">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>

          </form>
@endsection