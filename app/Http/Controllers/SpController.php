<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Serialmodel;  
use App\Models\TemAndHum;  
// 加上用户模型文件路径，才能找到MODELS
use Illuminate\Support\Facades\DB;

class SpController extends Controller
{

    public function index()
    {
        $serials=DB::select('select * from serials');
        foreach ($serials as $serials) 
        return view('sp.index',['serials'=> $serials]);
        $msg = "这是一条简单的消息.";
        return response()->json(array('msg'=> $msg), 200);
                                // 这2个要一样
    }
    public function shuaxin_ser()
    {
        DB::connection()->disableQueryLog(); 
        $serialdatas=DB::table('serialdatas')->get();   
            
            foreach ($serialdatas as $serialdatas) {
            $serialdatas->id;
            }
        return "$serialdatas->id";
    }
    public function shuaxin_tem()
    {   
        DB::connection()->disableQueryLog(); 
        $tems=DB::table('tem_and_hums')->get();   
            
            foreach ($tems as $tems) {
                echo $tems->tem;
            }
        
    }

    public function shuaxin_hum()
    {
        DB::connection()->disableQueryLog(); 
        $hums=DB::table('tem_and_hums')->get();   
            
            foreach ($hums as $hums) {
                echo $hums->hum;
            }
    }
        
}
        // return "$serials->id <br/> $serials->data <br/> $serials->time";
        // return response()->json(array('serials'=> $serials),200);
        // json(array('serials'=> $serials));
        
    
