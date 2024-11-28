<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // DB 接続用　class

class TopController extends Controller
 {
    public function index(Request $request) 
    {
        $sampleValue = "sample テキストです。"; // 追加

        $records = DB::connection('mysql')->select("select * from items"); //query 実行処理　実行結果を$records に代入
        $name = $records[0]->name; // 処理をここで停止して引数に指定した値を確認する。

        //$insertResult = DB::connection('mysql')->insert("insert into items (id,name,price) values (null,'メロン',2000)");
        //$updateResult = DB::connection('mysql')->update("update items set price = 600 where name = 'りんご'");
        $deleteResult = DB::connection('mysql')->delete("delete from items where name = 'りんご'");
        dd($deleteResult);

        return view("top/index" , [ "sampleValue" => $sampleValue ]); // 変更
    }
}