<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Tables\Divisis;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeForm;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\FormBuilder\Input;
use ProtoneMedia\Splade\FormBuilder\Select;
use ProtoneMedia\Splade\FormBuilder\Submit;
use ProtoneMedia\Splade\FormBuilder\Textarea;

class DivisiController extends Controller
{
    public function index()
    {

        return view('super-admin.divisi.index', [
            'divisis' => Divisis::class,
        ]);
    }

    public function create()
    {
        return view('super-admin.divisi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $divisi = Divisi::create([
            'name' => $name = $request->name,
            'slug' => Str::slug($name . Str::random(6)),
            'description' => $request->description,
        ]);
        Toast::title('Divisi Berhasil Ditambah');
        return redirect()->route('divisi.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
