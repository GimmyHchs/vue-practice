<template>
<div class="container">
    <!--  Submit Handle Panel  -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Submit Handle Panel</div>
                <div class="panel-body">
                    <div>
                        <form action="#" v-on:submit="handleIt">
                            <h2>Handle to alert when form submit</h2>
                            <button type="submit">submit first-form</button>
                        </form>
                        <hr>
                    </div>
                    <div>
                        <form action="#" @submit="handleIt">
                            <h2>Handle to alert by using @submit</h2>
                            <button type="submit">submit second-form</button>
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Submit Handle Panel  -->
    <!--  Increment Counter Panel  -->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Increment Counter Panel</div>
                <div class="panel-body">
                    <div>
                        <h2>Click to Incrementt by using @click</h2>
                        <button type="submit" @click="updateCount">Increment Counter: {{count}}</button>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Increment Counter Panel  -->
</div>
</template>


<script>
export default {
    data() {
        return {
            count: 0
        };
    },
    methods:{
        // Submit Handle Panel 的allert訊息
        handleIt: function(){
            alert('You Really Handle Me!!!');
        },
        // Increment Counter Panel 的計數程式
        updateCount: function(){
            this.count+=1;
        }
    },
    mounted() {
        console.log('Event Handle Vue Component ready.')
    }
}
</script>
