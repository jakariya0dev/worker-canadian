@extends('backend.admin.admin-master')

@section('content')
    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th colspan="6"><h5 class="text-secondary">A. Personal Details</h5></th>
            </tr>
            <tr>
                <th>Mobile No:</th>
                <td colspan="2">{{ $application->contact_number }}</td>
                <th>Email Address:</th>
                <td colspan="2">{{ $application->email_address }}</td>
            </tr>
            <tr>
                <th colspan="6"><h5 class="text-secondary">B. Payment Details</h5> </th>
            </tr>
            <tr>
                <th>Payment Number:</th>
                <td colspan="2">{{ $application->number_to_payment }}</td>
                <th>Number from Payment:</th>
                <td colspan="2">{{ $application->number_from_payment }}</td>
            </tr>
            <tr>
                <th> Transaction ID:</th>
                <td colspan="2">{{ $application->transaction_id }}</td>
                <th>Job Type:</th>
                <td colspan="2">{{ $application->job_type }}</td>
            </tr>
            <tr>
                <th colspan="6"><h5 class="text-secondary">C. Important Documents</h5></th>
            </tr>
            <tr>
                <th>Profile Picture:</th>
                <td colspan="2">
                    <a href="{{ route('application.image.view', [ 'dir' => 'pro_pic', 'name' => $application->pro_pic]) }}" class="btn btn-sm btn-warning" target="_blank">View</a>
                    <a href="{{ route('application.image.download', [ 'dir' => 'pro_pic', 'name' => $application->pro_pic]) }}" class="btn btn-sm btn-primary">Download</a>
                </td>
            </tr>
            <tr>
                <th>Nid:</th>
                <td colspan="2">
                    <a href="{{ route('application.image.view', [ 'dir' => 'nid', 'name' => $application->nid]) }}" class="btn btn-sm btn-warning" target="_blank">View</a>
                    <a href="{{ route('application.image.download', [ 'dir' => 'nid', 'name' => $application->nid]) }}" class="btn btn-sm btn-primary">Download</a>
                </td>
            </tr>
            <tr>
                <th> Passport:</th>
                <td colspan="2">
                    <a href="{{ route('application.image.view', [ 'dir' => 'passport', 'name' => $application->passport]) }}" class="btn btn-sm btn-warning" target="_blank">View</a>
                    <a href="{{ route('application.image.download', [ 'dir' => 'passport', 'name' => $application->passport]) }}" class="btn btn-sm btn-primary">Download</a>
                </td>
            </tr>
            <tr>
                <th>Skill Certificate:</th>
                <td colspan="2">
                    <a href="{{ route('application.image.view', [ 'dir' => 'skills', 'name' => $application->skills]) }}" class="btn btn-sm btn-warning" target="_blank">View</a>
                    <a href="{{ route('application.image.download', [ 'dir' => 'skills', 'name' => $application->skills]) }}" class="btn btn-sm btn-primary">Download</a>
                </td>
            </tr>

        </table>
    </div>

    <a href="{{ route('application.all') }}" class="btn btn-sm btn-primary">Back</a>
    <a href="{{ route('application.delete', $application->id) }}" class="btn btn-sm btn-danger">Delete</a>

@endsection
