<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MemberController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function indexCetak()
    {
        $member = Member::latest()->get();

        return view('member', compact('member'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_hp' => 'required',
            'nama' => 'required',
            'agama' => 'required',
            'tahun' => 'required',
            'alamat' => 'required',
            'hobby.*' => 'required', // Validate each item in the 'hobby' array
            'umur' => 'required',
        ]);

        // Mengambil nilai 'hobby' dari request dan mengonversinya ke JSON
        $hobbyArray = $request->input('hobby');
        $hobbyJson = json_encode($hobbyArray);

        // Membuat instance Member dengan nilai dari request
        $member = new Member([
            'no_hp' => $request->input('no_hp'),
            'nama' => $request->input('nama'),
            'agama' => $request->input('agama'),
            'tahun' => $request->input('tahun'),
            'alamat' => $request->input('alamat'),
            'hobby' => $hobbyJson, // Simpan nilai 'hobby' sebagai JSON
            'umur' => $request->input('umur'),
        ]);

        // Menyimpan data member ke dalam database
        $member->save();
        Alert::success('Success', 'Berhasil Menambah Data');
        return redirect()->route('member.index');
    }
}
