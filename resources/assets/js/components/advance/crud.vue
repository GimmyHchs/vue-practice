<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">List By Resource</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <button @click="fetchModels" class="btn btn-primary">Fetch All Models</button>
                            <hr>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" v-model="model_id"></input>
                            <button @click="fetchModel" class="btn btn-primary" style="margin-top:5px;">Fetch Model By ID</button>
                            <hr>
                        </div>
                        <div v-if="isEmptyModels" class="well" style="padding:50px;">
                            <button v-on:click="shuffle">Shuffle</button>
                            <transition-group
                            enter-active-class="animated rollIn"
                            leave-active-class="animated zoomOut"
                            tag="p"
                            >
                            <ul v-for="(model, index) in models" :key="model.id">
                                <div class="panel panel-default panel-fix">
                                    <div class="panel-body panel-body-fix">
                                        <div class="row">
                                            <div class="col-md-6 col-md-offset-3 btn-group">
                                              <button type="button" class="btn btn-primary">Show</button>
                                              <button type="button" class="btn btn-primary">Edit</button>
                                              <button @click="deleteModel(model, index)" type="button" class="btn btn-primary">Delete</button>
                                            </div>
                                        </div>
                                        <li v-for="(attribute, key) in model">
                                            {{key}} : {{attribute}}
                                        </li>
                                    </div>
                                </div>
                            </ul>
                        </transition-group>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
ul > .panel-fix{
    margin-right: 40px;
}
.panel-fix > .panel-body-fix{
    padding: 50px;
}
.flip-list-move {
  transition: transform 1s;
}
.list-item {
  display: inline-block;
  margin-right: 10px;
}
.list-enter-active, .list-leave-active {
  transition: all 1s;
}
.list-enter, .list-leave-active {
  opacity: 0;
  transform: translateY(30px);
}
</style>
<script>
    export default {
        props:[
            'resource_path',
        ],
        data() {
            return {
                models: [],
                resource: this.$resource(this.resource_path+'{/id}'),
                model_id: 1,
            };
        },
        computed:{
            isEmptyModels : function(){
                if(this.models.length==0){
                    return false;
                }
                else {
                    return true;
                }
            },
        },
        methods: {
            shuffle: function () {
              this.models = _.shuffle(this.models)
            },
            fetchModels : function(){
                this.resource.get().then((response) => {
                    this.models = response.data;
                    // console.log(response);
                }, (response) => {
                    this.models = [];
                    // console.log(response);
                });
            },
            fetchModel : function(){
                this.resource.get({id:this.model_id}).then((response) => {
                    this.models = response.data;
                    // console.log(response.data);
                }, (response) => {
                    this.models = [];
                    console.log(response);
                });
            },
            deleteModel : function(model, index){
                this.resource.delete({id:model.id}).then((response, index) => {
                    console.log(index);
                    this.models.splice(index, 1);
                    console.log(response.data);
                    // console.log(index);
                }, (response) => {
                    console.log(response);
                });
            },
        },
        mounted() {
            console.log('CRUD Component Ready')
        }
    }
</script>
