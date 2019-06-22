<?php

namespace App\Http\Controllers;


use App\FinanceInstitute;
use App\FixedDeposit;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;


class FixedDepositController extends Controller
{
    public function index()
    {
        $fixedDeposits = FixedDeposit::getAllFixedDeposites();
         return view('fixed_deposit/index', compact('fixedDeposits'));
    }
     public function create()
    {
        $institutes =FinanceInstitute::select('id','institute_name')->get();
         $institutesArray = [];
         foreach($institutes as $institute){
            $institutesArray[$institute->id] = $institute->institute_name;
        }
         return view('fixed_deposit/create', compact('institutesArray'));
    }
     public function store(Request $request)
    {
        $this->validate($request, [
            'institute_id' => 'required',
            'tenor' => 'required|numeric',
            'amount' => 'required',
            'rate' => 'required',
            'date' => 'required',
        ]);
         $user = Auth::user();
         $fixed_deposit = new FixedDeposit();
        $fixed_deposit->user_id = $user->id;
        $fixed_deposit->institute_id = $request->input('institute_id');
        $fixed_deposit->tenor = $request->input('tenor');
        $fixed_deposit->amount = $request->input('amount');
        $fixed_deposit->rate = $request->input('rate');
        $fixed_deposit->invest_at = $request->input('date');
        $fixed_deposit->save();
         return redirect('fixed-deposit')->with('success','Deposit added successfully');
     }
     public function show($id)
    {
        $fixed_deposit = FixedDeposit::getFixedDeposit($id);
        return view('fixed_deposit/show', compact('fixed_deposit'));
    }
     public function edit($id)
    {
        $fixed_deposit = FixedDeposit::find($id);
        $institutes = FinanceInstitute::select('id','institute_name')->get();
         $institutesArray = [];
         foreach($institutes as $institute){
            $institutesArray[$institute->id] = $institute->institute_name;
        }
         return view('fixed_deposit/edit', compact(['fixed_deposit', 'institutesArray']));
    }
     public function update(Request $request)
    {
        $this->validate($request, [
            'institute_id' => 'required',
            'tenor' => 'required|numeric',
            'amount' => 'required',
            'rate' => 'required',
            'date' => 'required',
        ]);
         $fixed_deposit = FixedDeposit::find($request->id);
         $fixed_deposit->institute_id = $request->input('institute_id');
        $fixed_deposit->tenor = $request->input('tenor');
        $fixed_deposit->amount = $request->input('amount');
        $fixed_deposit->rate = $request->input('rate');
        $fixed_deposit->invest_at = $request->input('date');
        $fixed_deposit->save();
         return redirect('fixed-deposit')->with('success','Deposit updated successfully');
     }
     public function delete(Request $request)
    {
        $fixed_deposit = FixedDeposit::find($request->id);
        $fixed_deposit->delete();
         return redirect('fixed-deposit')->with('success','Deposit Deleted successfully');
    }

}
