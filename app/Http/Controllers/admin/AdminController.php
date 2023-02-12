<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    	$data = Admin::all();
    	return view('admin.index',compact(['data']));
    }
    public function logout(Request $request){
	    Auth::logout();
	    $request->session()->invalidate();
	    $request->session()->regenerateToken();
	    return redirect('/');
	}
}
