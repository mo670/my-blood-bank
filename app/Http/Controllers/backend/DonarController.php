<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donar;

class DonarController extends Controller
{
    public function allDonars()
    {
        $allDonars = Donar::orderBy('id', 'desc')->with('blood_stock')->paginate('10');
        return view('backend.partials.donar.allDonars', compact('allDonars'));
    }

    // public function status($id, $status)
    // {
    //     $data = Donar::where('id', $id)->first();
    //     $data->update(['status' => $status]);
    //     return redirect()->back();
    // }

    public function donarForm()
    {
        return view('backend.partials.donar.createDonar');
    }

    public function createDonar(Request $request)
    {
        $request->validate([
            'd_name' => 'required|string',
            'd_age' => 'required|numeric',
            'd_mobile' => 'required|numeric',
            'd_address' => 'required|string',
            'd_disease' => 'required|string',
            'd_blood_group' => 'required',
            'd_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->file('d_image')) {
            $file = $request->file('d_image');
            $filename = date('Ymdhms') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('backend/images/donar/'), $filename);
        }

        // $userData = User::create([
        //     'position' => 'Donar',
        //     'email' => 'donar' . date('hs') . '@gmail.com',
        //     'password' => Hash::make('123456'),
        // ]);

        $data = Donar::create([
            // 'user_id' => $userData->id,
            'd_name' => $request->d_name,
            'd_age' => $request->d_age,
            'd_mobile' => $request->d_mobile,
            'd_address' => $request->d_address,
            'd_disease' => $request->d_disease,
            'd_blood_group' => $request->d_blood_group,
            'd_image' => $filename,
        ]);

        // dd($data->id);

        // $stockData = BloodStock::create([
        //     'donar_id' => $data->id,
        //     'blood_group' => $data->d_blood_group,
        //     'avalability' => $request->status,
        // ]);

        // DonatedUser::create([
        //     'blood_stock_id' => $stockData->id,
        //     'donar_id' => $stockData->donar_id,
        //     'last_donation_date' => $request->last_donation_date,
        // ]);

        return redirect()->back()->with('message', 'Donar created successfully');
    }

    public function home(){
        return view('master');
    }
}
