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

    
}
