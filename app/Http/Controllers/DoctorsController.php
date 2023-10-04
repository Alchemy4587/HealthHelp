<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function showappointment()
    {
        $data=appointment::all();
        return view('admin.showappointment',compact('data'));
    }
    public function approved($id)
    {
        $data=appointment::find($id);

        $data->status='approved';

        $data->save();

        return redirect()->back();
    }
    public function cancelled($id)
    {
        $data=appointment::find($id);

        $data->status='cancelled';

        $data->save();

        return redirect()->back();
    }
    public function showdoctor()
    {
        $data=doctor::all();
        return view('admin.showdoctor',compact('data'));
    }
}
