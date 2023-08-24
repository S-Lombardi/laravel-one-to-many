<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Portfolio;
use App\Http\Requests\StorePortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Portfolio::all();
        return view('admin.works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.works.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePortfolioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePortfolioRequest $request)
    {
        $form_data=$request-> all();

        $project= new Portfolio();
        $project->fill($form_data);
        
        //Controllo per le immagini
        if($request->hasFile('image')){
            $path = Storage::put('image', $request->image);

            $form_data['image']=$path;
        }

        $project->save();
        return redirect()->route('admin.works.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $project = Portfolio::findOrFail($id);
        return view('admin.works.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Portfolio::findOrFail($id);
        return view('admin.works.edit', compact ('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePortfolioRequest  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePortfolioRequest $request, $id)
    {
        $form_data = $request->all();
        $project = Portfolio::findOrFail($id);

        //Controllo per le immagini
        if($request->hasFile('image')){
            $path = Storage::put('image', $request->image);

            $form_data['image']=$path;
        }

        $project->update($form_data);
        return redirect()->route('admin.works.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Portfolio::findOrFail($id);

        $project->delete();
        return redirect()->route('admin.works.index');
    }
}
