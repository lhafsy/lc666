<template>
  <div>
   <div class="lhatop">
    <div id="topImg"><img src="../../../img/top.png" ></div>
    <div id="topLeft"><router-link to="/">主页</router-link></div>
    <div id="topCenter"><a>商品列表</a></div>
    <div id="topRight"><a>登录</a></div>
  </div>

  <div v-for="(item, index) in data" key={{index}} class="lhalist">
  <!-- <p>{{item.index_id}}</p> -->
 <router-link :to="'/page/'+item.index_id">
      <div  class="lhalistimg">
        <img v-bind:src="'img/'+item.img">
      </div>
      <p class="lhalistp1">{{item.contents}}</p>
      <p class="lhalistp2">{{item.name}}</p>
      <div class="lhafsy">
        <span class="lhalistspan1">{{item.price}}</span>
        <div  class="lhaimg">
          <img src="../../../img/heart.png" alt="">
        </div>
        <span class="lhalistspan2">{{item.num}}</span>
      </div>
  {{item.index_id}}</router-link>
      </div>
  </div>


</div>

</template>

<script type="text/javascript">
  import './LhaGoodspageaa.css'
  import $ from 'jquery'



  export default {
    name: 'LhaGoodspageaa',
    data: function(){
      return {
        data:[]
      }
    },
    created: function(){
      console.log(this.$route.params.id)
      var self =this
      $.ajax({
            type:"POST",
            url:"http://localhost/LC/lc666/regg.php",
            success:function(res){
              // console.log(res)
               self.data = JSON.parse(res)
            },
            data:{"sql":this.$route.params.id},
            complete:function(){
                console.log("请求完成");
            }
        })


    //  $.post('http://localhost/LC/lc666/reg.php',function(response){
    //   this.data = JSON.parse(response)
    // }.bind(this))
   }
 }
</script>
<style>

</style>

