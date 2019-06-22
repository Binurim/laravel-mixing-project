<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Investment extends Model
{
    protected $table = 'investment';
     protected $fillable = ['user_id','institute_id','tenor','amount','rate','invest_at'];
     public static function getAllFixedDeposites()
    {
        $fixed_deposits = DB::table('investment as fd')
            ->select('fd.id as id','institute_id', 'tenor', 'amount', 'rate', 'invest_at', 'institute_name')
            ->join('finance_institutes as fi', 'fd.institute_id', '=', 'fi.id')
            ->orderBy('fd.id')
            ->get();
            
         return $fixed_deposits;
    }
}
