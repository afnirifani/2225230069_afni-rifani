<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Afni;
use Illuminate\View\View;

class AfniController extends Controller
{

    public function index(): View
    {
        $afni = Afni::all();
        return view ('afni.index')->with('afni', $afni);
    }

 
    public function create(): View
    {
        return view('afni.create');
    }

  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Afni::create($input);
        return redirect('afni')->with('flash_message', 'Afni Addedd!');
    }

    public function show(string $id): View
    {
        $afni = Afni::find($id);
        return view('afni.show')->with('afni', $afni);
    }

    public function edit(string $id): View
    {
        $afni = Afni::find($id);
        return view('afni.edit')->with('afni', $afni);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $afni = Afni::find($id);
        $input = $request->all();
        $afni->update($input);
        return redirect('afni')->with('flash_message', 'afni Updated!');  
    }

    
    public function destroy(string $id): RedirectResponse
    {
        Afni::destroy($id);
        return redirect('afni')->with('flash_message', 'Afni deleted!'); 
    }
}