<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
class UserController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('auth.user');
    }

    public function edit()
    {
        return view('auth.user');
    }
    // public function update(User $id)
    // {
    // $id->update([
    //   'images' => Request('images'),
    //             'name' => Request('name')
    //         ]);
    //
    //     Session::flash('message', 'Berhasil diubah!');
    //     Session::flash('message_type', 'success');
    //     return redirect()->route('auth');
    // }

    public function update(Request $request, $id)
        {
            $update = User::where('id', $id)->first();
            $update->name = $request['name'];


            if($request->file('images'))
            {
                $update->images = $request['images'];
                $file       = $request->file('images');
                $fileName   = $file->getClientOriginalName();
                $request->file('images')->move("images/user", $fileName);
                $update->images = $fileName;
            }

            $update->update();
            Session::flash('message', 'Berhasil diubah!');
            Session::flash('message_type', 'success');
            return redirect()->route('auth');
        }

    // public function update(Request $request, $id)
    // {
    //   $user_data = User::get($id);
    //
    //   if($request->file('images'))
    //     {
    //
    //
    //         $file = $request->file('images');
    //         $dt = Carbon::now();
    //         $acak  = $file->getClientOriginalExtension();
    //         $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
    //         $request->file('images')->move("images/user", $fileName);
    //         $user_data->images = $fileName;
    //     }
    //     $user_data->name = $request->input('name');
    //   $user_data->update();
    //
    //     Session::flash('message', 'Berhasil diubah!');
    //     Session::flash('message_type', 'success');
    //     return redirect()->route('auth');
    // }
}
