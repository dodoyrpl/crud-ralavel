<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index()
    {
        $data_employe = \App\Employe::all();
        return view('hr.index',['data_employe' => $data_employe]);
    }

    public function create(Request $request)
    {
        \App\Employe::create($request->all());
        return redirect('/employe')->with('sukses','Data berhasil disimpan');
    }

    public function edit($id)
    {
        $db = \App\Employe::find($id);
        return view('hr/edit');
    }

    public function delete($id)
    {
        $db = \App\Employe::find($id);
        return redirect('/employe')->with('delete','Data akan di hapus ?');
    }
}
