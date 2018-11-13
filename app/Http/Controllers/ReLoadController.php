<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Serialdata;  
use App\Models\TemAndHum;  
// 加上用户模型文件路径，才能找到MODELS

class ReLoadController extends Controller
{
    public function shuaxin_serialdata()
    {
        // unset($serialdatas);
        $serialdatas=DB::select('select * from serialdatas');

        foreach ($serialdatas as $serialdatas) {
            $serialdatas->id;
            $serialdatas->data;
            $serialdatas->time;
        }
        return "$serialdatas->id";
        
    }
    public function shuaxin_tem()
    {   
        // unset($tem_and_hums);
        $tem_and_hums=DB::select('select * from tem_and_hums');
    
            foreach ($tem_and_hums as $tem_and_hums) {
                $tem_and_hums->id;
                $tem_and_hums->tem;
            }
        return "$tem_and_hums->tem";
        
    }

    public function shuaxin_hum()
    {
        // unset($tem_and_hums);
        $tem_and_hums=DB::select('select * from tem_and_hums');
    
            foreach ($tem_and_hums as $tem_and_hums) {
                $tem_and_hums->id;
                $tem_and_hums->hum;
            }
        return "$tem_and_hums->hum";
    }
}
