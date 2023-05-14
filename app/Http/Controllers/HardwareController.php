<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Hardware;

class HardwareController extends Controller
{
    private $objUser;
    private $objHardware;

    public function __construct()
    {
        $this->objUser = new User();
        $this->objHardware = new Hardware();
    }

    // Display a listing of the resource.
    public function index()
    {
        $hardwares = $this->objHardware->paginate(30)->sortByDesc('id');
        return view('hardware/index', compact('hardwares'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        $users = $this->objUser->all();
        return view('hardware/create', compact('users'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $newHardware = $this->objHardware->create([
            'name' => $request->name,
            'seller_id' => $request->seller_id,
            'brand' => $request->brand,
            'type' => $request->type,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'used' => $request->used
        ]);

        if($newHardware != null)
        {
            return redirect('/');
        }
    }

    // Display the specified resource.
    public function show(string $id)
    {
        $hardware = $this->objHardware->findOrFail($id);
        return view('hardware/show', compact('hardware'));
    }

    // Show the form for editing the specified resource.
    public function edit(string $id)
    {
        $hardware = $this->objHardware->find($id);
        $users = $this->objUser->all();
        return view('hardware/create', compact('hardware', 'users'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, string $id)
    {
        $this->objHardware->where(['id' => $id])->update([
            'name' => $request->name,
            'seller_id' => $request->seller_id,
            'brand' => $request->brand,
            'type' => $request->type,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'used' => $request->used
        ]);

        return redirect("/hardware/$id");
    }

    // Remove the specified resource from storage.
    public function destroy(string $id)
    {
        $del = $this->objHardware->destroy($id);
        return (($del) ? "Sim" : "Não");
    }
}