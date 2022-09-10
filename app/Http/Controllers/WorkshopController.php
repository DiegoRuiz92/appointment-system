<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use App\Models\Workstation;
use Illuminate\Http\Request;

/**
 * Class WorkshopController
 * @package App\Http\Controllers
 */
class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workshops = Workshop::paginate();

        return view('workshop.index', compact('workshops'))
            ->with('i', (request()->input('page', 1) - 1) * $workshops->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $workshop = new Workshop();
        $workstations = workstation::pluck('name','id','technician');
        return view('workshop.create', compact('workshop','workstations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Workshop::$rules);

        $workshop = Workshop::create($request->all());

        return redirect()->route('workshops.index')
            ->with('success', 'Workshop created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $workshop = Workshop::find($id);

        return view('workshop.show', compact('workshop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workshop = Workshop::find($id);
        $workstations = workstation::pluck('name','id','technician');
        return view('workshop.edit', compact('workshop','workstations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Workshop $workshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workshop $workshop)
    {
        request()->validate(Workshop::$rules);

        $workshop->update($request->all());

        return redirect()->route('workshops.index')
            ->with('success', 'Workshop updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $workshop = Workshop::find($id)->delete();

        return redirect()->route('workshops.index')
            ->with('success', 'Workshop deleted successfully');
    }
}
