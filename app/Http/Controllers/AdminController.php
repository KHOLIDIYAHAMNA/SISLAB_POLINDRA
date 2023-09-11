<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\DataAdmin;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
      $admins = Admin::all();
      return view ('administrator.admin',[
        'admins' => $admins
      ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('administrator.cr_admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request,[
            'id_admin'  =>'required|unique:admins',
            'name'      =>'required',
            'email'     =>'required|unique:admins',
            'username'   =>'required',
            'password'   =>'required',
            'posisi'   =>'required',
            'level'   =>'required',
        ]);
     
        // $input = $request->all();
        // Admin::create($input);
        // return
        // Admin::create($request->all());
        Admin::create([
            'id_admin'      =>$request->id_admin,
            'name'      =>$request->name,
            'email'     =>$request->email,
            'username'      =>$request->username,
            'password'   =>bcrypt($request->password),
            'posisi'   =>$request->posisi,
            'level'   =>$request->level,
        ]);
        return redirect()->route('admin')
        ->with('success', 'Data Behasil Disimpan');
        // return redirect('/admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $admins = Admin::find($id);
        return view('administrator.sh_admin', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admins = Admin::find($id);

        return view('administrator.ed_admin', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $admins = Admin::find($id);
        $admins->update();

        return redirect()->route('administrator.admin')
        ->with('success', 'Data Berhasil Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $admins = Admin::find($id);
        if(!$admins){
            return"not found";
        }
        $admins->delete();

        return redirect()->route('admin')
        ->with('success', 'Data Berhasil Dihapus');
    }
}
