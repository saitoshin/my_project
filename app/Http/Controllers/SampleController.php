<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // DB 接続用　class

class SampleController extends Controller
 {
    public function index(Request $request) 
    {
        $sampleValue = "sample テキストです。";

        $records = DB::connection('mysql')->select("select * from users"); //query 実行処理　実行結果を$records に代入
        $name = $records[0]->name; 

        //$insertResult = DB::connection('mysql')->insert("insert into users (id,email,name,password) values (null,'a1@a','メロン','pass')");
        //dd($insertResult);
        $deleteResult = DB::connection('mysql')->delete("delete from users where name = 'メロン'");
        dd($deleteResult);
        //$deleteResult = DB::connection('mysql')->delete("delete from items where name = 'りんご'");
        //dd($deleteResult);

        return view("sample/index" , ["sampleValue" => $sampleValue]);
    }
}