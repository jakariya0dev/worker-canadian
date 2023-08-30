<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CertificateController extends Controller
{
    function allCertificate()
    {
        $data = DB::table('certificate')->paginate(15);
        return view('backend.admin.certificate', ['certificates' => $data]);
    }

    function saveCertificate(Request $request)
    {
        if($request->hasFile('certificate')){

            $image = $request->pass_no.'.'.$request->file('certificate')->getClientOriginalExtension();
            $request->file('certificate')->storeAs('public/images/certificate', $image);

            DB::table('certificate')->insert([
                'pass_no' => $request->pass_no,
                'certificate' => $image
            ]);
        }

        return redirect()->route('certificate.all');
    }

    function deleteCertificate($id)
    {

        // deleting pro pic
        $certificate = DB::table('certificate')->where('id', $id)->value('certificate');
        $imagePath = storage_path('app/public/images/certificate/'.$certificate);

        if ($certificate != null && File::exists($imagePath)){
            unlink($imagePath);
        }
        DB::table('certificate')->delete($id);

        return redirect()->route('certificate.all');
    }

    function downloadCertificate($pass_no)
    {
        $certificate  = DB::table('certificate')->where('pass_no', '=', $pass_no)->value('certificate');
        $image_path = storage_path('app/public/images/certificate/'.$certificate);
        return response()->download($image_path);
    }

    function searchCertificate(Request $request)
    {
        $data = DB::table('certificate')->where('pass_no', '=', $request->pass_no)->paginate(15);
        return view('backend.admin.certificate', ['certificates' => $data]);
    }
}
