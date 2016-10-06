<template>
    <div>
        <button @click="renderChart" type="button" class="btn btn-default btn-block" style="margin-top:20px;">Re Render</button>
        <canvas id="line-canvas" :width="width" :height="height">
    </div>
</template>

<script>
export default {
    props:[
        'labels',
        'data',
        'width',
        'height',
    ],
    data(){
        return {
            canvas : null,
            context : null,
            chart: null,
            isAutoRender: true,
            options :{
                responsive:false,
                maintainAspectRatio:false,
            },
            line_data : {
                labels: this.labels,
                datasets: [
                    {
                        label: "My First dataset",
                        fill: false,
                        lineTension: 0.1,
                        backgroundColor: "rgba(75,192,192,0.4)",
                        borderColor: "rgba(75,192,192,1)",
                        borderCapStyle: 'butt',
                        borderDash: [],
                        borderDashOffset: 0.0,
                        borderJoinStyle: 'miter',
                        pointBorderColor: "rgba(75,192,192,1)",
                        pointBackgroundColor: "#fff",
                        pointBorderWidth: 1,
                        pointHoverRadius: 5,
                        pointHoverBackgroundColor: "rgba(75,192,192,1)",
                        pointHoverBorderColor: "rgba(220,220,220,1)",
                        pointHoverBorderWidth: 2,
                        pointRadius: 1,
                        pointHitRadius: 10,
                        data: this.data,
                        spanGaps: false,
                    },
                ],
            },
        };
    },
    watch:{
        data(val){
            // console.log(val);
            this.renderChart();
        },
        labels(val){
            // console.log(val);
            this.renderChart();
        }
    },
    methods:{
        cleanChart(){
            if(this.chart!=null)
                this.chart.destroy();
        },
        renderChart() {
            this.cleanChart();
            this.chart = new Chart(this.context, {
                type: 'line',
                data: this.line_data,
                options: {
                    responsive : this.options.responsive,
                    maintainAspectRatio : this.options.maintainAspectRatio,
                }
            });
            // console.log(this.chart);
        },
        checkSize(){
            if(this.width==null||this.height==null)
            {
                this.options.responsive = true;
                this.options.maintainAspectRatio = true;
            }
        },
    },
    mounted() {
        this.canvas = document.querySelector('#line-canvas');
        this.context = this.canvas.getContext('2d');
        this.checkSize();
        this.renderChart();
        // console.log('Line Chart Component ready.');
    },
    beforeDestroy(){
        this.cleanChart();
        // console.log('Line Chart Before Destroy');
    }
}
</script>
