<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ChartController extends Controller
{
    public function index(){
        $chart_type="line";
        $chart_labels=json_encode(["happy","notHappy","Thrid"]);
        $chart_data=json_encode(["happy","notHappy","Thrid"]);
        return view('vue.mix.vue-chartjs-lib',compact('chart_type','chart_labels','chart_data'));
    }
}
