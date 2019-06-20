<?php

use Illuminate\Database\Seeder;
use\Carbon\Carbon as Carbon;

class FinanceInstituteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('finance_institutes')->insert([
            'type' => "Bank",
            'institute_name' => "Hatton National Bank",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('finance_institutes')->insert([
                'type' => "Bank",
                'institute_name' => "Sri Lanka Savings Bank",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('finance_institutes')->insert([
                'type' => "Bank",
                'institute_name' => "DFCC Bank",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('finance_institutes')->insert([
                'type' => "Bank",
                'institute_name' => "Commercial Bank of Ceylon",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('finance_institutes')->insert([
                'type' => "Bank",
                'institute_name' => "Bank of Ceylon",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('finance_institutes')->insert([
                'type' => "Bank",
                'institute_name' => "Sampath Bank PLC",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('finance_institutes')->insert([
                'type' => "Bank",
                'institute_name' => "National Savings Bank",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('finance_institutes')->insert([
                'type' => "Bank",
                'institute_name' => "Housing Development Finance Coperation Bank",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('finance_institutes')->insert([
                'type' => "Bank",
                'institute_name' => "Peoples Bank",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('finance_institutes')->insert([
                'type' => "Bank",
                'institute_name' => "Nations Trust Bank PLC",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('finance_institutes')->insert([
                'type' => "Bank",
                'institute_name' => "State Mortgage & Investment Bank",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('finance_institutes')->insert([
                'type' => "Bank",
                'institute_name' => "National Development Bank",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('finance_institutes')->insert([
                'type' => "Bank",
                'institute_name' => "Regional Development Bank",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('finance_institutes')->insert([
                'type' => "Finance",
                'institute_name' => "Associated Motor Finance Company",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('finance_institutes')->insert([
                'type' => "Finance",
                'institute_name' => "Singer Finance",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('finance_institutes')->insert([
                'type' => "Finance",
                'institute_name' => "Peoples Leasing & Finance PLC",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('finance_institutes')->insert([
                'type' => "Finance",
                'institute_name' => "Asia Asset Finance PLC",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('finance_institutes')->insert([
                'type' => "Finance",
                'institute_name' => "UB Finance Co Ltd",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('finance_institutes')->insert([
                'type' => "Finance",
                'institute_name' => "Ideal Finance Ltd",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('finance_institutes')->insert([
                'type' => "Finance",
                'institute_name' => "Abans Finance PLC",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('finance_institutes')->insert([
                'type' => "Finance",
                'institute_name' => "Alliance Finance Co PLC",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('finance_institutes')->insert([
                'type' => "Finance",
                'institute_name' => "Commercial Leasing & Finance PLC",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        DB::table('finance_institutes')->insert([
                'type' => "Finance",
                'institute_name' => "People Merchant Finance PLC",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);
    }
}
