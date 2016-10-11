@extends('vue.layout.vue-layout')
@section('title', 'Vue Using ChartJs Libs')
@section('app')
    <h1>Vue Using ChartJs Libs</h1>
    <chartjs-line type="{{$chart_type}}" labels="{{$chart_labels}}"></chartjs-line>
@endsection
