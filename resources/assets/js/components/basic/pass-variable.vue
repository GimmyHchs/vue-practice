<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Pass Variable To Child Component</div>
                    <div class="panel-body">
                        <div>
                            <h3>Props (modified the props will get warning)</h3>
                            <div>
                                <input v-model="title">
                                title : {{title}}
                            </div>
                            <div>
                                <input v-model="body">
                                body : {{body}}
                            </div>
                            <hr>
                        </div>
                        <div>
                            <h3>Child Data From Parent</h3>
                            <div>
                                <input v-model="mybody">
                                mybody : {{mybody}}
                            </div>
                            <div>
                                <input v-model="mytitle">
                                mytitle : {{mytitle}}
                            </div>
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
            return{
                mytitle : this.title,
                mybody : this.body
            };
        },
        mounted() {
            console.log('Pass Variable Vue Component ready.')
        }
    }
</script>
