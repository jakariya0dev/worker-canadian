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
            <div class="row d-flex align-items-center">
                <div class="col-3">
                    <img src="{{ asset('frontend/assets/img/canada-gov-logo.svg') }}" alt="Canada Logo" style="height: 250px; width: 300px; margin-left: -60px">
                </div>
                <div class="col-9">
                    <h2 style="margin-left: -80px">High Commission of Canada</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 d-flex justify-content-center align-items-center">
                    <h5>Visa Application Form</h5>
                </div>
                <div class="col-md-2">
                    <img class="img-thumbnail" src="{{ asset('storage/images/pro_pic/'.$user->pro_pic) }}" alt="Pro Pic" style="height: 200px; width: 180px">
                </div>
            </div>
            <div class="row">
                <div class="table-responsive-md">
                    <table class="table table-striped">
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

    <div class="container border border-2">
        <div class="m-5">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-4">
                    <h1>Canada</h1>
                    <h5>
                        Consulate General of Canada <br>
                        Consulat général du Canada
                    </h5>
                </div>
                <div class="col-3 justify-content-center">
                    <img src="{{ asset('frontend/assets/img/logo-canada.jpeg') }}" alt="" style="height: 150px; width: 200px">
                    <h6>
                        Embassy of Canada <br>
                        Ambassade du Canada
                    </h6>
                </div>
            </div>
            <br>
            <div class="row">
                <p class="text-center text-decoration-underline font-weight-bold fs-4">VISA APPLICATION APPROVAL NOTIFICATION LETTER</p>
                <p> </p>
                <p>
                    Date. 08-08-2023 <br>
                    Time 10:38 AM <br><br>
                    Dear Arif
                </p>
                <p>
                    Greetings from the High Commission of Canada .I would like to inform you that you have been found elig
                    Entry Visa to Canada. type of Visa (W- under section 347 of Canadian Immigration and Nationality Act (CINAL and
                    Canadian Immigration and Nationality Act (CINAL and Canadian Immigration Law (CIL) As you and your employer
                    (BRONTE Wolder work CANADA) has satisfind the requirements of the Canadian Imigration law, have
                    on the section $12, you are found entitled to (W-1) Visa to live and engage your skill with your new Employer in Canada
                </p>
                <p>
                    I am pleased to apprise you that your application for entry Visa to Canada with passport number [BN0771259] has
                    being considered and approved berr an my office as Consulate of the High Commission of Canada, by the authority
                    given to me from above Your application has been considered with four years multiple entry Visa to work under
                    BRONTE Wolder work CANADA A pureel be hamlled over to you on your appointment date: the parcel
                    will remain scaled till you arrive in Canada, the part contas documents to further with your case file to enable you
                    applying permanent resident to further with your future career in Canada
                </p>
                <p>
                    Your visa charges are 246 CAD and CIS Charges: 270 CAD pectively. You are to make the payment immediately
                    for yanar (W-Viss with the total sum of Total 546 CAD (Five Hundred and Forty Sex Canadian Dollars only). Your visa
                    issuance and appointment date will be scheduled within 24 hours after the confirmation of your visa fee payment. <br>
                </p>
                <p>
                    Your appointed immigration Alorry in charge your file as be send an Authorize Cashier payment details for your visa
                    fer payment via Money Gram trader
                </p>
                <div class="row d-flex justify-content-between mt-5 mb-4">
                   <div class="col-md-3">
                        <img src="{{ asset('frontend/assets/img/sign.jpg') }}" style="height: 150px; width: 200px" alt="Signature">
                   </div>
                   <div class="col-md-3">
                        <img src="{{ asset('frontend/assets/img/visa-logo.png') }}" style="height: 100px; width: 150px" alt="Visa Logo">
                    </div>
                   <div class="col-md-3">
                        Sincerely <br>
                        Michael H Corbin <br>
                        Consular Officer <br>
                        Nonimmigrant Visa Section <br>
                    </div>
                </div>
                <div class="d-flex justify-content-center">{!! DNS1D::getBarcodeHTML('4445645656', 'C39') !!}</div>
                <p class="text-center text-uppercase font-bold fs-4 my-5">532 WALNUT STREET READING,PA 19601</p>
            </div>
        </div>
    </div>

@endsection
