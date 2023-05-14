<?php

namespace App\Http\Controllers;
use App\Models\clothes;

use Illuminate\Http\Request;

class ClotheController extends Controller
{
    public function index()
    {
        $clothe = clothes::paginate(5);
        return view('clothes.index', [
            'data' => $clothe
        ]);
        // C -> c.index
    }

    public function show($id)
    {
        $clothes = clothes::find($id);
        return $clothes;
    }

    public function create()
    {
        return view('clothes.create');
        // C -> c
    }

    public function store(Request $request)
    {
        $request->validate([
            'brands' => 'required',
            'nama' => 'required',
            'jenis_pakaian' => 'required'
        ]);

        clothes::create([
            'brands' => $request->brands,
            'nama' => $request->nama,
            'jenis_pakaian' => $request->jenis_pakaian
        ]);

       return redirect('/clothe');
    }
    public function edit(Request $request, $id)
    {
        $clothe= clothes::find($id);
        return view('clothes.edit', compact('clothe'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'brands' => 'required',
        ]);

        $clothes = $request->all();
        $clothes = clothes::find($id);
        $clothes->update([
            'brands' => $request->brands,
            'nama' => $request->nama,
            'jenis_pakaian' => $request->jenis_pakaian,
        ]);
        //C -> c::find
        return redirect('/clothe');

    }

    public function destroy($id)
    {
        $clothes = Clothes::find($id);
        $clothes->delete();
        return redirect('/clothe');
    }
}
