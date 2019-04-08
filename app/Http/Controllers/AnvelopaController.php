<?php

namespace App\Http\Controllers;
use App\Anvelopa;
use Illuminate\Http\Request;
class AnvelopaController extends Controller
{
    public function index()
    {
        return Anvelopa::all();
    }

    public function store(Request $request)
    {
        return Anvelopa::create($request->all());
    }

    public function show(Anvelopa $anvelopa)
    {
        return $anvelopa;
    }

    public function update(Request $request, Anvelopa $anvelopa)
    {
        $anvelopa->update($request->all());
    }

    public function destroy(Anvelopa $anvelopa)
    {
        //
    }
}
