<template>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">First Chart Component</div>
                <div class="panel-body">
                    I'm an First Chart Component
                    <div>{{chart_data.datasets[0].data}}</div>
                    <button type="button" @click="renderChart()">Rendor Line Chart</button>
                </div>
                <canvas id="canvas" width="300" height="300">
                </canvas>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mixins:[
            first_chart.default,
        ],
        mounted() {
            console.log('First Chart Component ready.')
        }
    }
</script>
