<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">For-list Component</div>
                    <div class="panel-body">
                        <div>
                            <h3>data object</h3>
                            {{$data | json}}
                            <hr>
                        </div>
                        <div>
                            <h2>v-for with array data</h2>
                                <ul>
                                    <li v-for="task in tasks">{{task}}</li>
                                </ul>
                            <hr>
                        </div>
                        <div>
                            <h2>v-for with object data</h2>
                                <ul>
                                    <li v-for="task in object_task">
                                        {{task.title}},
                                        {{task.body}},
                                    </li>
                                </ul>
                            <hr>
                        </div>
                        <div>
                            <h2>v-for with object data and change style</h2>
                                <ul>
                                    <li :class="li_class" v-for="task in object_task">
                                        {{task.title}},
                                        {{task.body}},
                                    </li>
                                </ul>
                            <hr>
                        </div>
                        <div>
                            <h2>(no function)v-for with object data and define style with true or false</h2>
                                <ul>
                                    <li :class="task.read ? 'read':''" v-for="task in object_task">
                                        {{task.title}},
                                        {{task.body}},
                                    </li>
                                </ul>
                            <hr>
                        </div>
                        <div>
                            <h2>(function)v-for with object data and define style with true or false</h2>
                                <ul>
                                    <li :class="isRead(task)" v-for="task in object_task">
                                        {{task.title}},
                                        {{task.body}},
                                    </li>
                                </ul>
                            <hr>
                        </div>
                        <div>
                            <h2>v-for with object data and click event</h2>
                                <ul>
                                    <li @click="toggleRead(task)" :class="isRead(task)" v-for="task in object_task">
                                        {{task.title}},
                                        {{task.body}},
                                    </li>
                                </ul>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
    .read{
        text-decoration: line-through;
    }
</style>
<script>
    export default{
        data : function(){
            return {
                tasks : [
                    'first',
                    'second',
                    'third',
                ],
                object_task :[
                    {title : 'hello', body : 'nice to meet you!', read : true},
                    {title : 'good bye', body : 'see you next time!', read : false},
                ],
                li_class : 'read',
            };
        },
        methods :{
            isRead : function(task){
                if(task.read)
                    return this.li_class;
            },
            toggleRead : function(task){
                task.read = !task.read;
            },
        } ,
        ready(){
            console.log('For-list Component Ready');
        }
    }
</script>
