@extends('vue.layout.vue-layout')
@section('title', 'Vue For List')
@section('app')
    <h1>Methods Computed</h1>
    <methods-computed
        :list.once="list">
    </methods-computed>
@endsection
@section('javascript')
    <script type="text/javascript">
        var mixin ={
            data:{
                list:[
                    {title:'first item', read:true},
                    {title:'second item', read:false},
                    {title:'third', read:true}
                ],
            },
        }
    </script>
@endsection
