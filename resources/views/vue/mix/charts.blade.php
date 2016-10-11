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
                <h2>Message</h2>
                <input type="checkbox" id="shutup" v-model="messageToggle">
                <label for="shutup">Shut Up</label>
                <button @click="cleanMessage()" type="button" class="btn btn-default">Clean Message</button>
                <ul>
                    <li v-for="value in message">@{{value}}</li>
                </ul>
            </div>
        </div>
    {{-- <line-chart v-show="isNowComponent('line-chart')" :labels="labels" :data="data"></line-chart> --}}
    {{-- <bar-chart v-show="isNowComponent('bar-chart')" :labels="labels" :data="data"></bar-chart> --}}
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
                addMessage(message){
                    if(!this.messageToggle)
                        this.message.push(message);
                },
                cleanMessage(){
                    this.message=[];
                }
            },
        }
    </script>
@endsection
