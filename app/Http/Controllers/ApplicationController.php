<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ApplicationController extends Controller
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

            $request->file('pro_pic')->storeAs('public/images/application/pro_pic', $profileImage);
            $request->file('nid')->storeAs('public/images/application/nid', $nidImage);
            $request->file('passport')->storeAs('public/images/application/passport', $passportImage);
            $request->file('skills')->storeAs('public/images/application/skills', $skillsImage);


        DB::table('application')->insert([
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

        return redirect()->route('application.all');

    }

    function allApplicationData()
    {
        $data = DB::table('application')->paginate(15);
        return view('backend.admin.all-application', ['rows' => $data]);
    }

    function viewApplication($id)
    {
        $data = DB::table('application')->find($id);
        return view('backend.admin.view-application', ['application' => $data]);
    }

    function deleteApplication($id)
    {
        // deleting images

        $pro_pic = DB::table('application')->where('id', $id)->value('pro_pic');
        $nid = DB::table('application')->where('id', $id)->value('nid');
        $passport = DB::table('application')->where('id', $id)->value('passport');
        $skills = DB::table('application')->where('id', $id)->value('skills');

        $image_path_pro_pic = storage_path('app/public/images/application/pro_pic/'.$pro_pic);
        $image_path_nid = storage_path('app/public/images/application/nid/'.$nid);
        $image_path_passport = storage_path('app/public/images/application/passport/'.$passport);
        $image_path_skills = storage_path('app/public/images/application/skills/'.$skills);

        if ($pro_pic != null && File::exists($image_path_pro_pic)){
            unlink($image_path_pro_pic);
        }
        if ($nid != null && File::exists($image_path_nid)){
            unlink($image_path_nid);
        }
        if ($passport != null && File::exists($image_path_passport)){
            unlink($image_path_passport);
        }
        if ($skills != null && File::exists($image_path_skills)){
            unlink($image_path_skills);
        }

        $data = DB::table('application')->delete($id);
        return redirect()->route('application.all');
    }

    function viewApplicationImage(Request $request)
    {
        $file_path = storage_path('app/public/images/application/'.$request->dir.'/'.$request->name);
        return response()->file($file_path);
    }

    function downloadApplicationImage(Request $request)
    {
        $file_path = storage_path('app/public/images/application/'.$request->dir.'/'.$request->name);
        return response()->download($file_path);
    }

}
