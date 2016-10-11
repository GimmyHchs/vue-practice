<template>
    <div>
        <button @click="renderChart" type="button" class="btn btn-default btn-block" style="margin-top:20px;">Re Render</button>
        <canvas ref="canvas" :width="width" :height="height">
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
            options :{
                responsive:false,
                maintainAspectRatio:false,
            },
            bar_data : {
                labels: this.labels,
                datasets: [
                    {
                        label: "My First dataset",
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(210, 89, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(210, 89, 64, 0.2)'
                        ],
                        borderWidth: 1,
                        data: this.data,
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
                type: 'bar',
                data: this.bar_data,
                options: {
                    responsive : this.options.responsive,
                    maintainAspectRatio : this.options.maintainAspectRatio,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
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
        this.canvas = this.$refs.canvas;
        this.context = this.$refs.canvas.getContext('2d');
        this.checkSize();
        this.renderChart();
        // console.log('Bar Chart Component ready.');
    },
    beforeDestroy(){
        this.cleanChart();
        // console.log('Line Chart Before Destroy');
    }
}
</script>
