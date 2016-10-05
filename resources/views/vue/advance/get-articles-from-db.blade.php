@extends('vue.layout.vue-layout')
@section('title', 'Vue Get Articles From DB')
@section('app')
    <h1>Get Articles From DB</h1>
    <articles-list :articles="{{$articles}}"></articles-list>
@endsection
