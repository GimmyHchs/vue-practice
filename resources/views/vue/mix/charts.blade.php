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
                <button @click="changeComponent('radar-chart')" type="button" class="btn btn-default">Radar Chart</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h2>Data</h2>
                <input
                    type="number"
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
                <h2>Message</h2>
                <input type="checkbox" id="shutup" v-model="messageToggle">
                <label for="shutup">Shut Up</label>
                <button @click="cleanMessage()" type="button" class="btn btn-default">Clean Message</button>
                <ul>
                    <transition-group enter-active-class="animated fadeInDown">
                    <li :class="messageClass(value)" v-for="(value,index) in message" :key="index">@{{value}}</li>
                    </transition>
                </ul>
            </div>
        </div>
    {{-- <line-chart v-show="isNowComponent('line-chart')" :labels="labels" :data="data"></line-chart> --}}
    {{-- <bar-chart v-show="isNowComponent('bar-chart')" :labels="labels" :data="data"></bar-chart> --}}
    <component :is="now_component" :labels="labels" :data="data"></component>
    </div>
@endsection
@section('style')
    <style>
        .success{
            color:#00c853;
        }
        .warning{
            color:#8e24aa;
        }
        .error{
            color:#e64a19;
        }
    </style>
@endsection
@section('javascript')
    <script type="text/javascript">
        var mixin ={
            data:{
                now_component:'line-chart',
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                data:[65, 59, 80, 81, 56, 55, 40],
                messageToggle:false,
                message:[],
                newData:'',
                newLabel:'',
            },
            watch:{
                labels(val){
                    if(!this.isCombine)
                        this.addMessage('Warning! Different Count Between Data and Labels');
                    else
                        this.addMessage('Ok, Nice label, I will render well');
                },
                data(val){
                    if(!this.isCombine)
                        this.addMessage('Warning! Different Count Between Data and Labels');
                    else
                        this.addMessage('Ok, Nice data, I will render well');
                },
                message(val){
                    if(this.message.length>4)
                        this.message.splice(0, 1);
                }
            },
            computed:{
                isCombine(){
                    if(this.labels.length == this.data.length)
                        return true;
                    else
                    {
                        console.log('Data:'+this.data.length);
                        console.log('Labels:'+this.labels.length);
                        return false;
                    }
                },
                isNowComponent(component){
                    if(this.now_component == component){
                        return true;
                    }
                    else {
                        return false;
                    }
                },
            },
            methods:{
                changeComponent(component){
                    this.now_component = component;
                },
                addData(){
                    if(typeof(this.newData) === 'number'){
                        this.data.push(this.newData);
                    }
                    else {
                        this.addMessage('Error...Data must be numer');
                    }
                    this.newData='';
                },
                addLabel(){
                    this.labels.push(this.newLabel);
                    this.newLabel='';
                },
                addMessage(message){
                    if(!this.messageToggle)
                        this.message.push(message);
                },
                cleanMessage(){
                    this.message=[];
                },
                messageClass(val){
                    if(val.includes("Warning"))
                        return 'warning';
                    if(val.includes("Error"))
                        return 'error';
                    if(val.includes("Ok"))
                        return 'success';
                }
            },
        }
    </script>
@endsection
