<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phonebook;

class PhonebookController extends Controller
{
    public function index()
    {
        $phonebook = Phonebook::all();
        return view('phonebook.index', compact('phonebook'));
    }

    public function create()
    {
        return view('phonebook.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_telepon' => 'required',
            'instansi' => 'required'
        ]);

        Phonebook::create($request->all());

        return redirect()->route('phonebook.index')
            ->with('success', 'Instansi created successfully.');
    }

    public function edit(Phonebook $phonebook)
    {
        return view('phonebook.edit', compact('phonebook'));
    }

    public function update(Request $request, Phonebook$phonebook)
    {
        $request->validate([
            'nama' => 'required',
            'no_telepon' => 'required',
            'instansi' => 'required'
        ]);

        $phonebook->update($request->all());

        return redirect()->route('phonebook.index')
            ->with('success', 'Phonebook updated successfully');
    }

    public function destroy(Phonebook $phonebook)
    {
        $phonebook->delete();

        return redirect()->route('phonebook.index')
            ->with('success', 'phonebook deleted successfully');
    }
}