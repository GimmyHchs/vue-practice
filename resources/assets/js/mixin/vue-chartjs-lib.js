export default{
    props:[
        'type',
        'labels',
        'data',
        'width',
        'height',
        'datasets',
    ],
    data () {
        return {
            canvas : null,
            context : null,
            chart: null,
            options :{
                responsive:false,
                maintainAspectRatio:false,
            },
            chart_data : {
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
        datasets(val){
            // console.log(val);
            this.renderChart();
        },
        labels(val){
            // console.log(val);
            this.renderChart();
        }
    },
    methods:{
        renderChart() {
            this.chart = new Chart(this.canvas, {
                type: this.type,
                data: this.chart_data,
            });
        },
    },
    mounted(){
        // this.canvas = document.querySelector('#canvas').getContext('2d');
        // this.renderChart(this.canvas);
    }
}
