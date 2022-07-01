<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Headquarter;
use  App\Models\Product;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $cars = DB::table('cars')->paginate(4);

        $cars = Car::paginate(2);

        return view('cars.index', [
            'cars' =>$cars
        ]);
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
        // $car = new Car;
        // $car->name = $request->input('name');
        // $car->founded = $request->input('founded');
        // $car->description = $request->input('description');
        // $car->save();

        //Only method
        //$test = $request->onyl('_token', 'name');

        //Has method
        // $test = $request->has('founded');
        
        // if ($request->has('founded')) {
        //     dd('Founded has been found!');
        // }

    //    //Current path
    //    if ($request->is('cars')) {
    //     dd('endpoint is cars!');
    //    }

        // if ($request->method('post')) {
        //     dd('Method is post!');
        // }

        // // Show the URL
        // dd($request->url());

        // // Show the IP
        // dd($request->ip());
        
        // dd($test);
        
        //If it's valid, it will proceed
        // If it's not valid, throw a ValidationException

        $request->validate([
            'name' => 'required|unique:cars',
            'founded' => 'required|integer|min:0|max:2021',
            'description' => 'required'
        ]);


        $car = Car::create([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description' => $request->input('description')
        ]);
    
        return redirect('/cars');
     }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);

        // $products = Product::find($id);

        // print_r($products);

        return view('cars.show')->with('car', $car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
        
        return view('cars.edit')->with('car', $car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car = Car::where('id', $id)
        ->update([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description' => $request->input('description')
        ]);

        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {

        $car->delete();

        return redirect('/cars');
    }
}

