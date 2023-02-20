<?php

namespace App\Http\Controllers;

use App\Models\Recepte;
use Illuminate\Http\Request;

/**
 * Class RecepteController
 * @package App\Http\Controllers
 */
class RecepteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receptes = Recepte::paginate();

        return view('recepte.index', compact('receptes'))
            ->with('i', (request()->input('page', 1) - 1) * $receptes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recepte = new Recepte();
        return view('recepte.create', compact('recepte'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Recepte::$rules);

        $recepte = Recepte::create($request->all());

        return redirect()->route('receptes.index')
            ->with('success', 'Recepte created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recepte = Recepte::find($id);

        return view('recepte.show', compact('recepte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recepte = Recepte::find($id);

        return view('recepte.edit', compact('recepte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Recepte $recepte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recepte $recepte)
    {
        request()->validate(Recepte::$rules);

        $recepte->update($request->all());

        return redirect()->route('receptes.index')
            ->with('success', 'Recepte updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $recepte = Recepte::find($id)->delete();

        return redirect()->route('receptes.index')
            ->with('success', 'Recepte deleted successfully');
    }
}
