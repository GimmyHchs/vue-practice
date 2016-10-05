<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Data-Binding Component</div>
                    <div class="panel-body">
                        <div>
                            <h2>Data-Binding</h2>
                            <p>{{message}}</p>
                            <input type="text" v-model="message">
                        </div>
                        <hr>
                        <div>
                            <h2>Data-Binding With $data object</h2>
                            <p>{{$data | json}}</p>
                            <input type="text" v-model="message2">
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        data: function () {
            return {
                message : 'hello message',
                message2 : 'hello message2'
            };
        },
        mounted(){
            console.log('Data-Binding Component Ready'+this.message);
        }
    }
</script>
