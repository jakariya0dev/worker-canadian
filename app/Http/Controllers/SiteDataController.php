<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteDataController extends Controller
{

    function getAllSiteData(){
        $siteData = DB::table('site_data')->get()->first();
        return view('frontend.app', ['siteData' =>  $siteData]);
        // dd($siteData);
    }

    function updateSiteData(Request $request){

        $validate = $request->validate([
            'site_name' => 'required',
            'site_title' => 'required',
            'sub_title' => 'required',
            'cell_number' => 'required',
            'location' => 'required',
            'email' => 'required',
            'short_desc' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'linkedin' => 'required',
        ]);

        $arow = DB::table('site_data')->where('id', 1)->update([
            'site_name' => $request->site_name,
            'site_title' => $request->site_title,
            'sub_title' => $request->sub_title,
            'cell_number' => $request->cell_number,
            'location' => $request->location,
            'email' => $request->email,
            'short_desc' => $request->short_desc,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
        ]);

        return redirect()->route('site.data');
        // dd($siteData);
    }

    function editSiteData(){
        $siteData = DB::table('site_data')->get()->first();
        return view('backend.admin.site-data', ['siteData' =>  $siteData]);
        // dd($siteData);
    }

    function teamDataForm()
    {
        return view('backend.admin.team-data');
    }

    function updateTeamData()
    {

    }

    function privacyPolicy()
    {
        $siteData = DB::table('site_data')->get()->first();
        return view('frontend.layout.privacy-policy', ['siteData' =>  $siteData]);
    }
}
