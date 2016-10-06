@extends('vue.layout.vue-layout')
@section('title', 'Vue ChartJs Components')
@section('app')
    <div class="container" style="margin-top:20px;">
        <div class="btn-group btn-group-justified" role="group">
            <div class="btn-group" role="group">
                <button @click="changeComponent('line-chart')" type="button" class="btn btn-default">Line Chart</button>
            </div>
            <div class="btn-group" role="group">
                <button @click="changeComponent('bar-chart')" type="button" class="btn btn-default">Bar Chart</button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">Right</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h2>Data</h2>
                <input
                    v-model="newData"
                    v-on:keyup.enter="addData"
                    placeholder="Add a Data"
                >
                <ul>
                    <li v-for="(value, index) in data">
                        @{{value}}
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h2>Labels</h2>
                <input
                    v-model="newLabel"
                    v-on:keyup.enter="addLabel"
                    placeholder="Add a Label"
                >
                <ul>
                    <li v-for="value in labels">@{{value}}</li>
                </ul>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    {{-- <line-chart v-show="isNowComponent('line-chart')" :labels="labels" :data="data"></line-chart>
    <bar-chart v-show="isNowComponent('bar-chart')" :labels="labels" :data="data"></bar-chart> --}}
    <component :is="now_component" :labels="labels" :data="data"></component>
    </div>
@endsection
@section('javascript')
    <script type="text/javascript">
        var mixin ={
            data:{
                now_component:'line-chart',
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                data:[65, 59, 80, 81, 56, 55, 40],
                newData:'',
                newLabel:'',
            },
            methods:{
                changeComponent(component){
                    this.now_component = component;
                },
                isNowComponent(component){
                    if(this.now_component == component){
                        return true;
                    }
                    else {
                        return false;
                    }
                },
                addData(){
                    this.data.push(this.newData);
                    this.newData='';
                },
                addLabel(){
                    this.labels.push(this.newLabel);
                    this.newLabel='';
                },
            },
        }
    </script>
@endsection
