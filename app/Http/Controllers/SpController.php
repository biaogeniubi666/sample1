<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Serialmodel;  
use App\Models\TemAndHum;  
use App\Models\LightState;  
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
        return [$serialdatas->id];
    }

    public function shuaxin_tem()
    {   
        DB::connection()->disableQueryLog(); 
        $tems=DB::table('tem_and_hums')->get();   
            
            foreach ($tems as $tems) {
                $tems->tem;
            }
        return [$tems->tem];
    }

    public function shuaxin_hum()
    {
        DB::connection()->disableQueryLog(); 
        $hums=DB::table('tem_and_hums')->get();   
            
            foreach ($hums as $hums) {
                $hums->hum;
            }
        return [$hums->hum];
    }

    public function shuaxin_chart()
    {
        DB::connection()->disableQueryLog(); 

        $tem_forchart = DB::table('tem_and_hums')->pluck('tem');
        $hum_forchart = DB::table('tem_and_hums')->pluck('hum');
       
        $tem_arrlength = count($tem_forchart);
        $hum_arrlength = count($hum_forchart);
 
        return [
            [
                $tem_forchart[$tem_arrlength-15],
                $tem_forchart[$tem_arrlength-14],
                $tem_forchart[$tem_arrlength-13],
                $tem_forchart[$tem_arrlength-12],
                $tem_forchart[$tem_arrlength-11],    
                $tem_forchart[$tem_arrlength-10],   
                $tem_forchart[$tem_arrlength-9],
                $tem_forchart[$tem_arrlength-8],
                $tem_forchart[$tem_arrlength-7],
                $tem_forchart[$tem_arrlength-6],
                $tem_forchart[$tem_arrlength-5],
                $tem_forchart[$tem_arrlength-4],
                $tem_forchart[$tem_arrlength-3],
                $tem_forchart[$tem_arrlength-2],
                $tem_forchart[$tem_arrlength-1]
            ],
            [
                $hum_forchart[$hum_arrlength-15],
                $hum_forchart[$hum_arrlength-14],
                $hum_forchart[$hum_arrlength-13],
                $hum_forchart[$hum_arrlength-12],
                $hum_forchart[$hum_arrlength-11],    
                $hum_forchart[$hum_arrlength-10],   
                $hum_forchart[$hum_arrlength-9],
                $hum_forchart[$hum_arrlength-8],
                $hum_forchart[$hum_arrlength-7],
                $hum_forchart[$hum_arrlength-6],
                $hum_forchart[$hum_arrlength-5],
                $hum_forchart[$hum_arrlength-4],
                $hum_forchart[$hum_arrlength-3],
                $hum_forchart[$hum_arrlength-2],
                $hum_forchart[$hum_arrlength-1]
            ]
        ];
    }
        

        // return "$serials->id <br/> $serials->data <br/> $serials->time";
        // return response()->json(array('serials'=> $serials),200);
        // json(array('serials'=> $serials));
    public function lightup_control()
    {
        DB::connection()->disableQueryLog(); 
        DB::table('light_states')->where('state', '=', 0)->update(['state' => 1]);
        
    }

    public function lightdown_control()
    {
        DB::connection()->disableQueryLog(); 
        DB::table('light_states')->where('state', '=', 1)->update(['state' => 0]);
    }

} //这个是最后的括号


    
