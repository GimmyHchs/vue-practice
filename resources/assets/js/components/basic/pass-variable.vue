<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Parent's data</div>
                    <div class="panel-body">
                        <div>
                            <h3>Parent's data</h3>
                            title : {{title}}
                            body : {{body}}
                        </div>
                    </div>
                    <div class="panel-heading">Pass Variable To Child Component</div>
                    <div class="panel-body">
                        <div>
                            <h3>Props to data</h3>
                            <input v-model="mytitle">
                            title : {{mytitle}}
                            <hr>
                        </div>
                        <div>
                            <h3>Props to data</h3>
                            <input v-model="mybody">
                            body : {{mybody}}
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'title',
            'body',
        ],
        data(){
            return {
                mytitle:this.title,
                mybody:this.body
            };
        },
        mounted() {
            console.log('Pass Variable Vue Component ready.')
        }
    }
</script>
