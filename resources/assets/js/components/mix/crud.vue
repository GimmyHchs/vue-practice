<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">List By Resource</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <button @click="fetchModels" class="btn btn-primary forms">Fetch All Models</button>
                            <input class="form-control forms" type="text" v-model="model_id"></input>
                            <button @click="fetchModel" class="btn btn-primary forms">Fetch Model By ID</button>
                            <hr>
                        </div>
                        <div class="form-group">
                            <button @click="createModel" class="btn btn-warning">Create A  Model</button>
                            <input class="form-control forms" type="text" v-model="title">
                            <input class="form-control forms" type="text" v-model="content">
                            <hr>
                        </div>
                        <div v-if="isEmptyModels" class="well" style="padding:50px;">
                            <button v-on:click="shuffle">Shuffle</button>
                            <transition-group
                            enter-active-class="animated rollIn"
                            leave-active-class="animated zoomOutLeft absolute"
                            move-class="list-move"
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
.forms{
    margin-top: 5px;
}
.list-move {
  transition: transform 1s;
}
.absolute{
    position: absolute;
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
                title : 'mytitle',
                content : 'mycontent',
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
            createModel : function(){
                this.resource.save({title: this.title, content: this.content}).then((response) => {
                    // console.log(response.data);
                    this.models.push(response.data);
                }, (response) => {
                    console.log(response);
                });
            },
            deleteModel : function(model, index){

                this.resource.delete({id:model.id}).then((response) => {
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
