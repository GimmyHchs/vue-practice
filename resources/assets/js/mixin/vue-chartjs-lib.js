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
                datasets: this.datasets,
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
    }
    methods:{
        renderChart() {
            this.chart = new Chart(this.canvas, {
                type: 'line',
                data: this.chart_data,
            });
        },
    },
    mounted(){
        this.canvas = document.querySelector('#canvas').getContext('2d');
        // this.renderChart(this.canvas);
    }
}
