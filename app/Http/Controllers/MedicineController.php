<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicineRequest;
use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        if ($user->hasRole('admin')) {
            $medicine = Medicine::latest()->get();
            return $medicine;
        } else {
            abort(403);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MedicineRequest $request)
    {
        $user = auth()->user();
        if ($user->hasRole('admin')) {
            $medicine = Medicine::create([
                'name' => $request->name,
                'slug' => $request->slug,
                'sku' => $request->sku,
                'stock' => $request->stock,
                'descriptions' => $request->descriptions,
                'price' => $request->price,
                'company_name' => $request->company_name,
                'expiry_date' => $request->expiry_date,
            ]);

            return $medicine;
        }
        abort(403);


    }

    /**
     * Display the specified resource.
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicine $medicine)
    {
        //
    }
}
