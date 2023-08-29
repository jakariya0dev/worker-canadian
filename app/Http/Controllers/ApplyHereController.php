<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplyHereController extends Controller
{
    function returnPaymentForm()
    {
        $siteData = DB::table('site_data')->get()->first();
        return view('backend.user.apply-here', ['siteData' =>  $siteData]);
    }

    function savePaymentData(Request $request)
    {




            $profileImage = $request['contact_number'].'.'.$request->file('pro_pic')->getClientOriginalExtension();
            $nidImage = $request['contact_number'].'.'.$request->file('nid')->getClientOriginalExtension();
            $passportImage = $request['contact_number'].'.'.$request->file('passport')->getClientOriginalExtension();
            $skillsImage = $request['contact_number'].'.'.$request->file('skills')->getClientOriginalExtension();

            $request->file('pro_pic')->storeAs('images/apply_here/pro_pic', $profileImage);
            $request->file('nid')->storeAs('images/apply_here/nid', $nidImage);
            $request->file('passport')->storeAs('images/apply_here/passport', $passportImage);
            $request->file('skills')->storeAs('images/apply_here/skills', $skillsImage);


        DB::table('apply_here')->insert([
            'contact_number' => $request->contact_number,
            'email_address' => $request->email_address,
            'job_type' => $request->job_type,
            'pro_pic' => $profileImage,
            'nid' => $nidImage,
            'passport' => $passportImage,
            'skills' => $skillsImage,
            'number_to_payment' => $request->number_to_payment,
            'transaction_id' => $request->transaction_id,
            'number_from_payment' => $request->number_from_payment,
        ]);

    }
}
