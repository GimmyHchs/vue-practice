@extends('vue.layout.vue-layout')
@section('title', 'Vue CRUD')
@section('app')
    <h1>Vue CRUD</h1>
    <crud resource_path="{{$resource}}"></crud>
@endsection
