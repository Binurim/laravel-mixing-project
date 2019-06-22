<?php

namespace App;

namespace App\Http\Controllers;

use App\FinanceInstitute;
use App\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class InvestmentController extends Controller
{
    public function index()
    {
    
        $investments = Investment::getAllFixedDeposites();
        // dd($investments);
        return view('investment/index', compact(''));
    }
    public function create(){
        $institutes = FinanceInstitute::select('id','institute_name')->get();
//        dd($institutes);
        $institutesArray = [];
        foreach($institutes as $institute){
            $institutesArray[$institute->id] = $institute->institute_name;
        }
        return view('investment/create', compact('institutesArray'));
    }
    public function store(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            'institute_id' => 'required',
            'tenor' => 'required|numeric',
            'amount' => 'required',
            'rate' => 'required',
            'date' => 'required',
        ]);
        $investment = new Investment();
        $investment->user_id = $user->id;
        $investment->institute_id = $request->input('institute_id');
        //$investment->institute_id = $user->institute_id;
        $investment->tenor = $request->input('tenor');
        $investment->amount = $request->input('amount');
        $investment->rate = $request->input('rate');
        $investment->invest_at = $request->input('date');
        $investment->save();
        return redirect('investment')->with('success','Deposit added successfully');
    }
}