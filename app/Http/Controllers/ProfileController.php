<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use Livewire\Component;

class ProfileController extends Controller
{
    use WithFileUploads;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // $nm = $request->image;
        // $namaFile = $nm->getClientOriginalExtension();


        // dd($request->all());

        $request->validate([
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'nomor_hp' => 'required',
            'email' => 'required'
        ]);
        User::where('id', $user->id)
            ->update([
                'full_name' => $request->nama_lengkap,
                'address' => $request->alamat,
                'born_date' => $request->tgl_lahir,
                'gender' => $request->jenis_kelamin,
                'email' => $request->email,
                'phone_number' => $request->nomor_hp,
                'image' => $request->image

            ]);
        // $nm->save(public_path() . '/img', $namaFile);

        return redirect('/profile')->with('status', 'Data berhasil diubah!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}

