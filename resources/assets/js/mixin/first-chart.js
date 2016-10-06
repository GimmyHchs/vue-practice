export default {
    data : {
        title:'hello',
        body:'nice to meet you!!!',
        chart: null,
    },
    methods:{
        renderChart:function(){
            this.chart = new Chart();
        },
    }
}
