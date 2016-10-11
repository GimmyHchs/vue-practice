<template>
    <div>
        <button @click="renderChart" type="button" class="btn btn-default btn-block" style="margin-top:20px;">Re Render</button>
        <canvas id="canvas" :width="width" :height="height">
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
            radar_data : {
                labels: this.labels,
                datasets: [
                    {
                        label: "My Second dataset",
                        backgroundColor: "rgba(255,99,132,0.2)",
                        borderColor: "rgba(255,99,132,1)",
                        pointBackgroundColor: "rgba(255,99,132,1)",
                        pointBorderColor: "#fff",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(255,99,132,1)",
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
                type: 'radar',
                data: this.radar_data,
                options: {
                    responsive : this.options.responsive,
                    maintainAspectRatio : this.options.maintainAspectRatio,
                    scale: {
                        reverse: false,
                        ticks: {
                            beginAtZero: true
                        }
                    },
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
        this.canvas = document.querySelector('#canvas');
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
