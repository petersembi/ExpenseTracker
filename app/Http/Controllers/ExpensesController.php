<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class ExpensesController extends Controller
{
    // show all expenses
    public function index()
    {
        
        // dd(Expenses::all()->groupBy('date_of_creation')->all());
        return view('expenses.index', [
            // 'expenses' => Expenses::all()->filter(request(['search']))
        'expenses' => Expenses::latest()->filter(request([ 'search']))->paginate(4)

        ]);
        // 'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(4)
    }
    

    // show current expenses and create form
    public function create ()
    {
        return view('expenses.create',['expenses' => Expenses::all()]);

    }

    // store expense
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'date_of_creation'=>'required',
            'item'=>'required',
            'quantity'=> 'required',
            'category'=>'required',
            'cost'=> 'required',
            'author'=> 'required'
        ]);
        // dd($formFields);

        Expenses::create($formFields);
        // Listing::create($formFields);
        return redirect('/')->with('message', 'Expense Created');
        
    }

    
    public function showForDate (Request $request)
    {
        $currentDate = $_GET['date'];
        // if($filters['date'] ?? false) {
            $expenses = Expenses::select('id', 'item', 'date_of_creation','author', 'category', 'quantity', 'cost')->whereDate('date_of_creation', $currentDate)->get()->toArray();
        // }
        // dd($expenses);
        $totalCostforParticularDate = 0;
        foreach ($expenses as $expense ) {
            $totalCostforParticularDate += $expense['cost'];
            
        }

        $totalCost = $totalCostforParticularDate;
        $data = array ('currentDate' => $currentDate, 'totalCost'=> $totalCost);

        return view('expenses.show', ['expensesForParticularDate'=>$expenses], ['data'=>$data]);
    }

    // edit Expense
    public function edit(Expenses $expense)
    {
        return view('expenses.edit', ['expense'=> $expense]);

    }

    //update expense
    public function update(Request $request, Expenses $expense)
    {
        try {
        $formFields = $request->validate([
            'date_of_creation'=>'required',
            'item'=>'required',
            'quantity'=> 'required',
            'category'=>'required',
            'cost'=> 'required'
        ]);
        // Expenses::update($formFields);
        $expense->update($formFields);
        // dd($formFields);
    } catch(QueryException $ex){
        // return view('expenses.create');
        return dd($ex->getMessage());
    }
        return redirect('/')->with('message', 'Listing Updated Successfully!');
    }

    // Delete expense
    public function destroy (Expenses $expense)
    {
        $expense->delete();
        return redirect('/')->with('message', 'Expense Deleted Successfuly');
    }



}

