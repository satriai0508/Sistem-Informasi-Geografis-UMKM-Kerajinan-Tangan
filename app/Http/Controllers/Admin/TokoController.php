<?php

namespace App\Http\Controllers\Admin;

use App\Models\Toko;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTokoRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateTokoRequest;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->is_admin)
        {
            return view('admin.toko.index',[
                'usahas' => Toko::latest()->get()
            ]);
        }

        if(auth()->user()->name)
        {
            return view('admin.toko.index',[
                'usahas' => Toko::latest()->get()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.toko.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTokoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTokoRequest $request)
    {
        $validate = $request->validate();

        if($request->file('image')){
            $validate['image'] = $request->file('image')->store('images');
        }

        Toko::create($validate);

        return redirect('/admin/toko')->with('success','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function show(Toko $toko)
    {
        return view('admin.toko.show',[
            'tokos' => Toko::find($toko)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function edit(Toko $toko)
    {
        return view('admin.toko.edit',[
            'tokos' => $toko
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTokoRequest  $request
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTokoRequest $request, Toko $toko)
    {
        $validate = $request->validate();

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete([$request->oldImage]);
            }
            $validate['image'] = $request->file('image')->store('images');
        }

        Toko::where('id', $toko->id)->update($validate);

        return redirect('/admin/toko')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function destroy(Toko $toko)
    {
        Toko::destroy($toko->id);

        if($toko->image){
            Storage::delete([$toko->image]);
        }

        return redirect('/dashboard/toko')->with('success','Deleted Successfully!');
    }
}
