<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    // show all expenses
    public function index()
    {
        return view('expenses.index', ['expenses' => Expenses::all()]);
        // 'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(4)
    }
    // public function index()
    // {
    //     return view('index', ['expenses' => Expenses::latest()]);
    // }

    // show current expenses and create form
    public function create ()
    {
        return view('expenses.create',['expenses' => Expenses::all()]);

    }

    // store expense
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'date'=>'required',
            'item'=>'required',
            'quantity'=> 'required',
            'category'=>'required',
            'cost'=> 'required'
        ]);

        Expenses::create($formFields);
        return redirect('/')->with('message', 'Expense Created');
        
    }
}

