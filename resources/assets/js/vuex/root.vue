<template>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="well">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="center">Global Store</div>
                                <div class="left item small">Count : {{count}}</div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="center">Global Getters</div>
                                <div class="left item small">getCount : {{getCount}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-md-offset-1">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">Counter Component</div>
                        <div class="panel-body">
                            <button @click="increment">+</button>
                            <button @click="decrement">-</button>
                            <counter></counter>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
    .center{
        display: flex;
        justify-content: center;
    }
    .left{
        display: flex;
        justify-content: flex-start;
    }
    .item{
        margin-top: 10px;
    }
    .small{
        font-size: 80%;
    }
</style>
<script>
    import counter from './counter.vue';
    export default {
    data(){
        return {
            count : 0,
        };
    },
    computed: Vuex.mapState({
      // 在 mapState 里面我们既可以调用 store 的 state ，也可以调用 store 的 getters
      count: (state, getters) => {
          return state.count;
      },
      getCount: (state, getters) => {
          return getters.getCount;
      }
    }),
    components:{
        counter,
    },
    methods: {
        increment () {
            store.commit('increment')
        },
        decrement () {
            store.commit('decrement')
        }
    },
    mounted() {
            console.log('Root Component ready.')
        }
    }
</script>
