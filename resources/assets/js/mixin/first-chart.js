export default{
    data () {
        return {
            title:'hello',
            body:'nice to meet you!!!',
            chart: null,
            canvas:null,
            chart_data : {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "My First dataset",
                        borderColor: "rgba(75,192,192,1)",
                        fill: true,
                        data: [65, 59, 80, 81, 56, 55, 40],
                    },
                    {
                        label: "My Second dataset",
                        fill: false,
                        data: [90, 90, 89, 88, 89, 90, 100],
                    }
                ]
            },
        };
    },
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
