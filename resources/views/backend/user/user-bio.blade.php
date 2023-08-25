@extends('backend.user.user-master')

@section('content')
    <br><br>

    @if ( $user == null)
        <div class="container">
            <div class="row">
                <div class="vh-100 d-flex justify-content-md-center align-items-center">
                    <div class="col-md-4 text-center">
                        <h4>No profile Found</h4>
                        <br>
                        <a class="btn btn-primary" href="{{ route('user.bio.form') }}">Search Again</a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container mt-5">
            <div class="row">
                <div class="table-responsive-md">
                    <table class="table table-striped">
                        <tr>
                            <td colspan="5"></td>
                            <td><img class="img-thumbnail" src="{{ asset('storage/images/pro_pic/'.$user->pro_pic) }}" alt=""></td>
                        </tr>
                        <tr>
                            <th colspan="6"><h5 class="text-secondary">A. Personal Particulars (As in Passport)</h5></th>
                        </tr>
                        <tr>
                            <th>Name:</th>
                            <td colspan="2">{{ $user->name }}</td>
                            <th>Sure Name:</th>
                            <td colspan="2">{{ $user->sure_name }}</td>
                        </tr>
                        <tr>
                            <th>Previous/other Name if any:</th>
                            <td colspan="5">{{ $user->o_name }}</td>
                        </tr>
                        <tr>
                            <th>Sex:</th>
                            <td colspan="2">{{ $user->gender }}</td>
                            <th>Married Status:</th>
                            <td colspan="2">{{ $user->m_status }}</td>
                        </tr>
                        <tr>
                            <th>Date of birth:</th>
                            <td colspan="2">{{ $user->dob }}</td>
                            <th>Religion:</th>
                            <td colspan="2">{{ $user->religion }}</td>
                        </tr>
                        <tr>
                            <th>City/Place of birth:</th>
                            <td colspan="2">{{ $user->pob }}</td>
                            <th>Country of Birth:</th>
                            <td colspan="2">{{ $user->cob }}</td>
                        </tr>
                        <tr>
                            <th>Citizenship /National ID No:</th>
                            <td colspan="2">{{ $user->nid }}</td>
                            <th>Educational Qualification:</th>
                            <td colspan="2">{{ $user->education }}</td>
                        </tr>
                        <tr>
                            <th>Visible Identification marks:</th>
                            <td colspan="2">{{ $user->visibility }}</td>
                            <th>Current Nationality:</th>
                            <td colspan="2">{{ $user->c_nation }} ({{  $user->n_type }})</td>
                        </tr>
                        <tr>
                            <th>Any Other Previous/ Past Nationality:</th>
                            <td colspan="5">{{ $user->o_nation }}</td>
                        </tr>
                        <tr>
                            <th colspan="6"><h5 class="text-secondary">B. Passport Details</h5> </th>
                        </tr>
                        <tr>
                            <th>Passport No.:</th>
                            <td colspan="2">{{ $user->pass_no }}</td>
                            <th>Date of issue ( dd/mm/yyyy ):</th>
                            <td colspan="2">{{ $user->pass_doi }}</td>
                        </tr>
                        <tr>
                            <th> Place of issue:</th>
                            <td colspan="2">{{ $user->pass_poi }}</td>
                            <th>Date of expiry ( dd/mm/yyyy ):</th>
                            <td colspan="2">{{ $user->pass_doe }}</td>
                        </tr>
                        <tr>
                            <th colspan="6">Any other Passport/dentity Certificate held (if yes ,Please fill in the following</th>
                        </tr>
                        <tr>
                            <th>Passport No.:</th>
                            <td colspan="2">{{ $user->op_no }}</td>
                            <th>Date of issue ( dd/mm/yyyy ):</th>
                            <td colspan="2">{{ $user->op_doi }}</td>
                        </tr>
                        <tr>
                            <th> Place of issue:</th>
                            <td colspan="2">{{ $user->op_poi }}</td>
                            <th>Date of expiry ( dd/mm/yyyy ):</th>
                            <td colspan="2">{{ $user->op_doe }}</td>
                        </tr>
                        <tr>
                            <th colspan="6"><h5 class="text-secondary">C. Applicant’s Contact Details</h5></th>
                        </tr>
                        <tr>
                            <th>Phone No:</th>
                            <td>{{ $user->phone }}</td>
                            <th>Mobile No:</th>
                            <td>{{ $user->mobile }}</td>
                            <th>Email:</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Present Address:</th>
                            <td colspan="2">{{ $user->pre_address }}</td>
                            <th>Permanent Address:</th>
                            <td colspan="2">{{ $user->per_address }}</td>
                        </tr>
                        <tr>
                            <th colspan="6"><h5 class="text-secondary">D. Family Details</h5></th>
                        </tr>
                        <tr>
                            <th colspan="2">Relation</th>
                            <th>Name</th>
                            <th>Nationality</th>
                            <th>Prev. Nationality</th>
                            <th>Place/Country of Birth</th>
                        </tr>
                        <tr>
                            <th colspan="2">Father</th>
                            <td>{{ $user->f_name }}</td>
                            <td>{{ $user->f_nation }}</td>
                            <td>{{ $user->f_cob }}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th colspan="2">Mother</th>
                            <td>{{ $user->m_name }}</td>
                            <td>{{ $user->m_nation }}</td>
                            <td>{{ $user->m_cob }}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th colspan="2">Spouse</th>
                            <td>{{ $user->s_name }}</td>
                            <td>{{ $user->s_nation }}</td>
                            <td>{{ $user->s_cob }}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th colspan="6"><h5 class="text-secondary">E. Details of Visa Sought</h5></th>
                        </tr>
                        <tr>
                            <th>Type Of Visa Required:</th>
                            <td colspan="2">{{ $user->tov }}</td>
                            <th>No of Entries:</th>
                            <td colspan="2">{{ $user->noe }}</td>
                        </tr>
                        <tr>
                            <th>Period of Visa (Month):</th>
                            <td colspan="2">{{ $user->pov }}</td>
                            <th>Expected Date of Journey:</th>
                            <td colspan="2">{{ $user->edoj }}</td>
                        </tr>
                        <tr>
                            <th>Port Of Arrival:</th>
                            <td colspan="2">{{ $user->poa }}</td>
                            <th>Port Of Exit:</th>
                            <td colspan="2">{{ $user->poe }}</td>
                        </tr>
            
                        <tr>
                            <th>Status:</th>
                            <td colspan="2">{{ $user->status }}</td>
                            <th>Password:</th>
                            <td colspan="2">{{ $user->password }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    @endif

@endsection