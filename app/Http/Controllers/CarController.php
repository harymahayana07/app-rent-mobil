<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $cars = Car::
        where('merek', 'like', '%' . $search .'%')
        ->orWhere('model', 'like', '%' . $search .'%')
        ->orWhere('no_plat', 'like', '%' . $search . '%')
        ->orWhere('price', 'like', '%' . $search .'%')
        ->orWhere('status', 'like', '%' . $search . '%')
        ->latest()
        ->paginate(10);
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'merek'  =>  'required',
            'model'  =>  'required',
            'no_plat'  =>  'required',
            'price'  =>  'required|integer',
            // 'image'  =>  'required',
            'status'  =>  'required',
        ]);

        if($request->file('image')){
            $data['image'] = $request->file('image')->store('cars');
        }

        Car::create($data);

        return redirect()->route('car.index')->with('success', 'Data mobil berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('cars.edit', ['car'=> $car]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        // dd($car);
        $data = $request->validate([
            'merek'  =>  'required',
            'model'  =>  'required',
            'no_plat'  =>  'required',
            'price'  =>  'required|integer',
            // 'image'  =>  'required',
            'status'  =>  'required',
        ]);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $data['image'] = $request->file('image')->store('cars');
        }

        $car->update($data);

        return redirect()->route('car.index')->with('success', 'Data mobil berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        if($car->image){
            Storage::delete($car->image);
        }
        Car::destroy($car->id);
        return redirect()->route('car.index')->with('success', 'Data mobil berhasil dihapus');
    }
}
