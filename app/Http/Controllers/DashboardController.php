<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            $data = Item::paginate(7);
            return view('app.dashboard', [
                'data' => $data
            ]);
        }

        return redirect()->route('login')->withErrors([
            'username' => 'Please login to access the dashboard.',
        ])->onlyInput('username');
    }

    public function search(Request $request)
    {
        $data = Item::where('info', 'LIKE', "%{$request->search}%")->paginate(5);
        return view('app.dashboard', [
            'data' => $data
        ]);
    }
}
