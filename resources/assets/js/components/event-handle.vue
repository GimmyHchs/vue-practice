<template>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Event Handle Component</div>
                <div class="panel-body">
                    <div id="first-form">
                        <form action="#" v-on:submit="handleIt">
                            <h2>Handle to alert when form submit</h2>
                            <button type="submit">submit first-form</button>
                        </form>
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
    // data: function() {
    //     return {
    //         count: 0
    //     };
    // },
    methods:{
        handleIt: function(){

            alert('You Really Handle Me!!!');
        }
    },
    ready() {
        console.log('Event Handle Vue Component ready.')
    }
}
</script>
