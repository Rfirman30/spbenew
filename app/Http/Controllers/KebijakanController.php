<?php

namespace App\Http\Controllers;

use App\Models\Kebijakan;
use App\Models\Manajemen;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Ramsey\Uuid\Uuid;

class KebijakanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ar_kebijakan = Manajemen::all();

        return view('admin.kebijakan_admin.index', compact('ar_kebijakan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kebijakan_admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'file' => 'required'
        ]);

        Kebijakan::create([
            'nama' => $request->nama,
            'file' => $request->file
        ]);

        return redirect()->route('kebijakans.index')
            ->with('success', 'Data Kebijakan Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ar_kebijakan = Kebijakan::find($id);
        $ar_kebijakan->delete();
        return redirect()->route('kebijakans.index');
    }
}
