<template>


	<div>
		<div class="lhatop" style="position:fixed">
	      <div id="topImg"><router-link to="/" ><img src="../../../img/top.png" ></router-link></div>
	      <div id="topLeft"><a><router-link to="/" >主页</router-link></a></div>
	      <div id="topRight"><a><router-link to="/login" >登录</router-link></a></div>
	    </div>
		<!-- 轮播图架构 -->
		<div class="imgbox" style="padding-top:3.2rem">
			<ul>
				<li><a href="#"><img :src="'../../../img/'+data[0].img"></img></a></li>
			</ul>
		</div>


		<p id="detailsp1">{{data[0].contents}}</p>
		<p  id="detailsp2">￥1245.00</p>
		<p  id="detailsp3"><span  id="detailsp3L">免运费</span><span  id="detailsp3R">正品授权</span></p>



<!-- 		<div id="detailscolor" class="box">
			<h3>颜色</h3>
			<ul id="detailsUl">
				<li  style="background-color: yellow">黄色</li>
				<li  style="background-color:green">绿色</li>
				<li  style="background-color: #f5f5f5">灰色</li>
				<li  style="background-color: #fff">白色</li>
				<li  style="background-color: pink">粉色</li>
				<li  style="background-color: red">红色</li>
			</ul>
		</div> -->

		<div id="Number">
			数量：
			<input type="button" value="-" @click="getAttribute" lha_Nums="1">
			<span  ref="cartnum">{{lha_Nums}}</span>
			<input  type="button" value="+" @click="lha_Nums ++">
		</div>

		<div v-for="(item, index) in dataa" class="dataaimg">
			<img :src="'../../../img/'+item" >
		</div>


		<div class="detailsIntroduce">
			<p>
				— 所售商品均获品牌授权，正品保证。<br>
				— 中国大陆地区免运费，默认发顺丰或圆通快递。<br>
				— 蜡烛、液态品、手表等含电池产品无法空运，运输时间相较普通空运件会更久。<br>
				— 如出现产品质量问题请在签收后72小时内联系客服。
			</p>
			<h2>↓猜你喜欢↓</h2>
		</div>






		<div id="Fixed" style="background:#4fada7">
			<div id="FixedL" @click="add"><p>加入购物车</p></div>
			<div id="FixedR" @click="add"><p>立即购买</p></div>
		</div>
<br/>
<br/>
<br/>
<br/>
<br/>


	</div>

</template>

<script type="text/javascript">
	import 'bootstrap/dist/css/bootstrap.min.css'
	import './details.css'
	import $ from 'jquery'

	export default {
		name: 'home',
		data: function(){
			return {name: 'Tom',lha_Nums:"1",data:[],dataa:[]}
		},created: function(){
			console.log(this.$route.params.id)
			var self =this
			$.ajax({
				type:"POST",
				url:"http://localhost/LC/lc666/details.php",
				data:{"sql":this.$route.params.id},
				success:function(res){
					self.data = JSON.parse(res)
					// self.dataa = JSON.parse(JSON.parse(res)[0].goodspage)
					console.log(res)

				},
				complete:function(){
					console.log("请求完成");
					self.dataa = self.data[0].goodspage.split(",")
					console.log(	self.dataa[1])
						// console.log(	self.data[0].goodspage.split(","))
					}
				})
		},
		methods:{
			getAttribute: function(event){
				var lha_Nums = parseInt(event.target.getAttribute('lha_Nums'));
				if(lha_Nums == 1){

				}else{

					this.lha_Nums = lha_Nums - 1;
				}
				event.target.setAttribute('lha_Nums', this.lha_Nums);
			},
			add: function(){
				alert("加入购物车成功")
			}
		}
	}
</script>

