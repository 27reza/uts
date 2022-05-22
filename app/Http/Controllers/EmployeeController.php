<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $data = Employee::all();
        return view ('datapegawai', compact('data'));
    }

    public function tambahpegawai (){
        return view ('tambahdata');
    }

    public function insertdata (Request $request){
        // dd($request->all());
        $this->validate($request,[
            'nama' => 'required|max:30',
            'alamat' => 'required|min:4',
            'notelepon' => 'required|min:11|max:12',
            'umur' => 'required|max:2',
        ]);
        Employee::create($request->all());
        return redirect()->route('pegawai')->with('success', 'Data telah berhasil ditambahkan'); 
    }

    public function tampilkandata($id){
        $data = Employee::find($id);
        // dd($data);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $this->validate($request,[
            'nama' => 'required|max:30',
            'alamat' => 'required|min:4',
            'notelepon' => 'required|min:11|max:12',
            'umur' => 'required|max:2',
        ]);
        $data = Employee::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai')->with('success', 'Data telah berhasil diubah'); 
    }

    public function delete($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('success', 'Data telah berhasil dihapus'); 
    }
}
