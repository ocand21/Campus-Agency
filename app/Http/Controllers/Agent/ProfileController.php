<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

use App\User;
use Auth;
use Image;
use Session;

class ProfileController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function myProfile(){
      return view('user.agents.myprofile');
    }

    public function showEditForm(){
      return view('user.agents.edit');
    }

    public function editProfile(Request $request){
      $id = Auth::user()->id;
      $user = User::find($id);

      if ($request->input('email') == $user->email) {
        $this->validate($request, [
          'name' => 'required|min:3|max:255',
          'address' => 'required|min:5',
          'phone' => 'required|unique:users',
        ]);
      } else if ($request->input('phone') == $user->phone) {
        $this->validate($request, [
          'name' => 'required|min:3|max:255',
          'address' => 'required|min:5',
        ]);
      } else {
        $this->validate($request, [
          'name' => 'required|min:3|max:255',
          'email' => 'required|min:10|email|unique:users',
          'address' => 'required|min:5',
          'phone' => 'required|unique:users',
        ]);
      }

      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->address = $request->input('address');
      $user->phone = $request->input('phone');

      $user->save();

      Session::flash('flash_message','Profil Berhasil Diperbaharui');

       return redirect()->route('myprofile');

    }

    public function showChangePasswordForm(){
      return view('user.agents.changepassword');
    }

    public function changePassword(Request $request){
      if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
        Session::flash('flash_error','Password lama tidak sesuai. Silakan coba lagi');
        return redirect()->back();
      }
      if (strcmp($request->get('current_password'), $request->get('new_password')) == 0) {
        Session::flash('flash_error','Password baru tidak boleh sama dengan password lama. Silakan coba lagi');
        return redirect()->back();
      }

      $validateData = $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|string|min:6|confirmed',
      ]);

      $user = Auth::user();
      $user->password = bcrypt($request->get('new_password'));
      $user->save();

      Session::flash('flash_message','Password berhasil diubah. Silakan login ulang');
      return redirect()->route('myprofile');
    }
}
