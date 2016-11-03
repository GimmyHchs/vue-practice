<template>
    <div>
        {{ count }}
    </div>
</template>

<script>
    export default {
    computed: Vuex.mapState({
        // 在 mapState 里面我们既可以调用 store 的 state ，也可以调用 store 的 getters
        count: (state, getters) => {
            return state.count;
        },
        getCount: (state, getters) => {
            return getters.getCount;
        }
    }),
    mounted() {
            console.log('Counter Component ready.')
        }
    }
</script>
