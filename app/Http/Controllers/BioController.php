<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BioController extends Controller
{

    function addNewBio(Request $request){

        $image = time().'.'.$request->file('pro_pic')->getClientOriginalExtension();
        $request->file('pro_pic')->storeAs('public/images/pro_pic', $image);

        $arow = DB::table('user_profile')->insert([
            'sure_name' => $request['sure_name'],
            'name' => $request['name'],
            'o_name' => $request['o_name'],
            'gender' => $request['gender'],
            'm_status' => $request['m_status'],
            'religion' => $request['religion'],
            'dob' => $request['dob'],
            'pob' => $request['pob'],
            'cob' => $request['cob'],
            'nid' => $request['nid'],
            'education' => $request['education'],
            'visibility' => $request['visibility'],
            'c_nation' => $request['c_nation'],
            'n_type' => $request['n_type'],
            'o_nation' => $request['o_nation'],

            'pass_no' => $request['pass_no'],
            'pass_doi' => $request['pass_doi'],
            'pass_poi' => $request['pass_poi'],
            'pass_doe' => $request['pass_doe'],
            'op_no' => $request['op_no'],
            'op_doi' => $request['op_doi'],
            'op_poi' => $request['op_poi'],
            'op_doe' => $request['op_doe'],

            'phone' => $request['phone'],
            'mobile' => $request['mobile'],
            'email' => $request['email'],
            'pre_address' => $request['pre_address'],
            'per_address' => $request['per_address'],
            
            'f_name' => $request['f_name'],
            'f_nation' => $request['f_nation'],
            'f_cob' => $request['f_cob'],
            'm_name' => $request['m_name'],
            'm_nation' => $request['m_nation'],
            'm_cob' => $request['m_cob'],
            's_name' => $request['s_name'],
            's_nation' => $request['s_nation'],
            's_cob' => $request['s_cob'],

            'tov' => $request['tov'],
            'noe' => $request['noe'],
            'pov' => $request['pov'],
            'poa' => $request['poa'],
            'edoj' => $request['edoj'],
            'poe' => $request['poe'],
            'status' => $request['status'],
            'pro_pic' => $image,
            'password' => Str::random(10),
        ]);

       return redirect()->route('bio.all');

    }

    function getAllBio(){
        $users = DB::table('user_profile')->orderByDesc('id')->paginate(25);
        return view('backend.admin.all-bio', ['users' => $users]);

    }

    function getSingleBio($id){
        $user = DB::table('user_profile')->find($id);
        return view('backend.admin.view-bio', ['user' => $user]);
    
    }

    function deleteBio($id){
        $status = DB::table('user_profile')->where('id', $id)->delete();
        return redirect()->route('bio.all');
        
    }

    function editBio($id){
        $user = DB::table('user_profile')->find($id);
        return view('backend.admin.edit-bio', ['user' => $user]);
    }

    function searchBio(Request $request){
        $users = DB::table('user_profile')
                    ->where('mobile', $request['keyword'])
                    ->orWhere('email', $request['keyword'])
                    ->paginate(25);
        return view('backend.admin.all-bio', ['users' => $users]);
        // dd($users);
    }

    function updateBio(Request $request){

        $arow = DB::table('user_profile')->where('id', $request['id'])->update([
            'sure_name' => $request['sure_name'],
            'name' => $request['name'],
            'o_name' => $request['o_name'],
            'gender' => $request['gender'],
            'm_status' => $request['m_status'],
            'religion' => $request['religion'],
            'dob' => $request['dob'],
            'pob' => $request['pob'],
            'cob' => $request['cob'],
            'nid' => $request['nid'],
            'education' => $request['education'],
            'visibility' => $request['visibility'],
            'c_nation' => $request['c_nation'],
            'n_type' => $request['n_type'],
            'o_nation' => $request['o_nation'],

            'pass_no' => $request['pass_no'],
            'pass_doi' => $request['pass_doi'],
            'pass_poi' => $request['pass_poi'],
            'pass_doe' => $request['pass_doe'],
            'op_no' => $request['op_no'],
            'op_doi' => $request['op_doi'],
            'op_poi' => $request['op_poi'],
            'op_doe' => $request['op_doe'],

            'phone' => $request['phone'],
            'mobile' => $request['mobile'],
            'email' => $request['email'],
            'pre_address' => $request['pre_address'],
            'per_address' => $request['per_address'],
            
            'f_name' => $request['f_name'],
            'f_nation' => $request['f_nation'],
            'f_cob' => $request['f_cob'],
            'm_name' => $request['m_name'],
            'm_nation' => $request['m_nation'],
            'm_cob' => $request['m_cob'],
            's_name' => $request['s_name'],
            's_nation' => $request['s_nation'],
            's_cob' => $request['s_cob'],

            'tov' => $request['tov'],
            'noe' => $request['noe'],
            'pov' => $request['pov'],
            'poa' => $request['poa'],
            'poe' => $request['poe'],
            'status' => $request['status'],
            'password' => Str::random(10),
        ]);

        return redirect()->route('bio.all');

    }

    function findUserBio(Request $request){

        $user = DB::table('user_profile')
        ->where('email', $request['user-email'])
        ->Where('password', $request['user-password'])
        ->first();
        
        return view('backend.user.user-bio', ['user' => $user]);
    }
    
}
