<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div style="margin-bottom:15px;">
                    <button class="btn btn-info" @click="toggleShow">
                        Toggle render
                    </button>
                </div>
                <transition name="fade">
                <div v-if="show" class="panel panel-default">
                    <div class="panel-heading" >Transition</div>
                    <div class="panel-body">
                        123456
                    </div>
                </div>
                </transition>
                <transition
                enter-active-class="animated tada"
                leave-active-class="animated bounceOutRight">
                <div v-if="show" class="panel panel-default">
                    <div class="panel-heading" >Transition</div>
                    <div class="panel-body">
                        <p>enter-active-class="animated tada"</p>
                        <p>leave-active-class="animated bounceOutRight"</p>
                    </div>
                </div>
                </transition>
                <transition
                enter-active-class="animated rollIn"
                leave-active-class="animated zoomOut">
                <div v-if="show" class="panel panel-default">
                    <div class="panel-heading" >Transition</div>
                    <div class="panel-body">
                        <p>enter-active-class="animated rollIn"</p>
                        <p>leave-active-class="animated zoomOut"</p>
                    </div>
                </div>
                </transition>
                <transition
                enter-active-class="animated wobble"
                leave-active-class="animated rollOut">
                <div v-if="show" class="panel panel-default">
                    <div class="panel-heading" >Transition</div>
                    <div class="panel-body">
                        <p>enter-active-class="animated wobble"</p>
                        <p>leave-active-class="animated rollOut"</p>
                    </div>
                </div>
                </transition>

                <div id="flip-list-demo" class="panel panel-default">
                    <div class="panel-body">
                      <button v-on:click="shuffle">Shuffle</button>
                      <transition-group name="flip-list"
                        enter-active-class="animated rollIn"
                        leave-active-class="flip-list-leave-active">
                        <li v-if="show" v-for="(item,index) in items" v-bind:key="item">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    {{item}}
                                </div>
                            </div>
                        </li>
                      </transition-group>
                  <div class="panel-body">
                </div>

                <div id="list-complete-demo" class="demo">
                  <button v-on:click="shuffle">Shuffle</button>
                  <button v-on:click="add">Add</button>
                  <button v-on:click="remove">Remove</button>
                  <transition-group name="list-complete" tag="p">
                    <span
                      v-for="item in items"
                      v-bind:key="item"
                      class="list-complete-item"
                    >
                      {{ item }}
                    </span>
                  </transition-group>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s
}
.fade-enter, .fade-leave-active {
  opacity: 0
}
.flip-list-move {
  transition: transform 1s;
}
.flip-list-leave-active {
  position: absolute;
}
.list-complete-item {
  transition: all 1s;
  display: inline-block;
  margin-right: 10px;
}
.list-complete-enter, .list-complete-leave-active {
  opacity: 0;
  transform: translateY(30px);
}
.list-complete-leave-active {
  position: absolute;
}
</style>
<script>
    export default {
        data(){
            return {
                show: true,
                items: [1,2,3,4,5,6,7,8,9],
                nextNum: 10
            };
        },
        methods:{
            randomIndex: function () {
              return Math.floor(Math.random() * this.items.length)
            },
            add: function () {
              this.items.splice(this.randomIndex(), 0, this.nextNum++)
            },
            remove: function () {
              this.items.splice(this.randomIndex(), 1)
            },
            toggleShow: function(){
                this.show = !this.show;
            },
            shuffle: function () {
              this.items = _.shuffle(this.items)
          },
        },
        mounted() {
            console.log('Transition Component Ready')
        }
    }
</script>
