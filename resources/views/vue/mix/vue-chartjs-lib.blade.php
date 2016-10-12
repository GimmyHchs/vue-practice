@extends('vue.layout.vue-layout')
@section('title', 'Vue Using ChartJs Libs')
@section('app')
    <h1>Vue Using ChartJs Libs</h1>
    <chartjs-line width="300" height="300"></chartjs-line>
    <chartjs-line type="line" :labels="['happy','myhappy','hello']" :data="[100,40,60]"></chartjs-line>
@endsection
