<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class FixedDeposit extends Model
{
    public static function getAllFixedDeposites()
    {
        $fixed_deposits = DB::table('fixed_deposits as fd')
            ->select('fd.id as id','institute_id', 'tenor', 'amount', 'rate', 'invest_at', 'institute_name')
            ->join('finance_institutes as fi', 'fd.institute_id', '=', 'fi.id')
            ->orderBy('fd.id')
            ->get();
         return $fixed_deposits;
    }
     public static function getFixedDeposit($id)
        {
            $fixed_deposit = DB::table('fixed_deposits as fd')
                ->select('fd.id as id','institute_id', 'tenor', 'amount', 'rate', 'invest_at', 'institute_name')
                ->join('finance_institutes as fi', 'fd.institute_id', '=', 'fi.id')
                ->orderBy('fd.id')
                ->where('fd.id',$id)
                ->get()
                ->first();
             return $fixed_deposit;
        }
}
