@extends('vue.layout.vue-layout')
@section('title', 'Pass Variable')
@section('app')
    <h1>Pass Variable</h1>
    <div class="panel panel-default">
    <div class="panel-heading">Parent's data</div>
        <div class="panel-body">
            <div><input v-model="title">title : @{{title}}</div>
            <div><input v-model="body">body : @{{body}}</div>
        </div>
    </div>
    <pass-variable :title="title" :body="body"></pass-variable>
@endsection

@section('javascript')
    <!--  此處定義 Vue根節點的data -->
    <script type="text/javascript">
        var mixin = {
            data : {
                title:'hello',
                body:'nice to meet you!!!'
            },
        }
    </script>
@endsection
