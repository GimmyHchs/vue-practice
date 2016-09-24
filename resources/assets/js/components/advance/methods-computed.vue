<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Methods Computed</div>
                    <div class="panel-body">
                        <h3>My list <span v-show="remaining">( {{remaining}} )</span></h3>
                        <ul>
                            <li @click="toggleRead(item)" :class="getClass(item)" v-for="item in list">
                                <button @click="removeItem(item)">X</button>
                                {{item.title}}
                            </li>

                        </ul>
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
    .cursor{
        cursor: pointer;
    }
</style>
<script>
    export default {
        props : [
            'list',
        ],
        computed : {
            remaining: function(){
                var vm = this;
                return this.list.filter(function(item){
                    return !vm.isRead(item);
                }).length;
            },
        },
        methods : {
            getClass : function(item){
                var str_class = 'cursor';
                if(this.isRead(item))
                    return str_class+=' read';
                return str_class;
            },
            isRead : function(item){
                return item.read;
            },
            toggleRead : function(item){
                item.read = !item.read;
            },
            removeItem : function(item){
                this.list.$remove(item);
            },
        },
        ready() {
            console.log('Methods Computed Component Ready')
        }
    }
</script>
