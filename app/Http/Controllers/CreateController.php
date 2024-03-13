<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return view('app.create');
        }

        return redirect()->route('login')->withErrors([
            'username' => 'Please login to access the dashboard.',
        ])->onlyInput('username');
    }

    public function store(Request $request)
    {
        $request->validate([
            'info' => 'required|string|max:250',
            'serial_no' => 'required|string|max:250',
            'part_no' => 'required|string',
            'entry_price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        ]);

        try {
            Item::create([
                'info' => $request->info,
                'serial_no' => $request->serial_no,
                'part_no' => $request->part_no,
                'entry_price' => $request->entry_price,
                'price' => $request->price,
                'user_id' => auth()->user()->id,
            ]);

            return redirect()->route('dashboard')->withSuccess('You have successfully created the item.');    
        } catch (\Throwable $th) {
            return redirect()->route('dashboard')->withErrors('There was an Error while creating the item.');
        }
        
    }
}
