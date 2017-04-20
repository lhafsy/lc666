<template>
	<div class="lgy_pagesOut" id="lgy_pagesOut">
		<div id="runTopa"></div>
		<div class="lgy_commonTop">
			<router-link to="/" class="lgy_logincss">主页</router-link>
			<!-- <router-link to="/register" class="lgy_logincss">注册</router-link>
			<router-link to="/login" class="lgy_logincss">登录</router-link> -->
		</div>
		<div class="lgy_pagesDiva">
			<img :src="'../../../img/'+datapage.img" ref="cartimg"/>
			<!-- <img src="../../img/goodspagea1.jpg" alt=""> -->
			<h2 class="lgy_goodsTitle" ref="cartmsg"></h2>
			<em>作者 ：时间飞逝</em>
		</div>
		<div class="lgy_pagesDiva">
			<img src="../../../img/goodspagea2.jpg" alt="">
			<strong>【 雪平锅 】</strong>
			<p></p><br>
			<strong>铝制锅身经工匠锻打</strong>
			<strong>有白雪般的图案</strong>
			<strong>有白雪般的图案</strong>
		</div>
		<div class="lgy_pagesDiva">
			<img src="../../../img/goodspagea3.jpg" alt="">
			<p>▲《小森林》里，女主用雪平锅做番茄罐头，炖汤，出镜率特别高。</p>
		</div>
		<div class="lgy_pagesDiva">
			<img src="../../../img/goodspagea4.jpg" alt="">
			<p>▲ 《深夜食堂》《海鸥食堂》等日剧的食物造型师，饭岛奈美曾公开她工作室的人气炊具，其中就有这只锅。</p>
			<p>如果厨房只能留一个锅，</p>
			<p>你会选什么？</p>
			<p>日本家庭主妇们的答案一定是雪平锅！</p>
			<p>雪平锅，</p>
			<p>传热速度很快，结实耐用，</p>
			<p>因此深受日本家庭欢迎。</p>
		</div>
		<div class="lgy_pagesDiva">
			<img src="../../../img/goodspagea5.jpg" alt="">
			<p>“ 从煮物到甜品，</p>
			<p>从一人晚餐到全家三餐，</p>
			<p>全部都可以一锅上菜 ”</p>
			<p>——</p>
			<p>日本大厨富田唯介如此评价雪平锅，</p>
			<p>并专为其写了一本书：</p>
			<p>《雪平锅无油料理》，</p>
			<p>详细介绍了可以用雪平锅做的各类美食。</p>
			<p>“ 好的器具有它好的理由。</p>
			<p>能让人长久使用，</p>
			<p>想传承给后代的‘良理’器具 ”</p>
			<p>——</p>
			<p>釜浅商店《料理道具案内》如此说，</p>
			<p>釜浅商店创办于1908年，</p>
			<p>挑选日本各地的厨房用品出售，</p>
			<p>雪平锅也是釜浅商店推荐的日常料理的良器之一。</p>
			<p>“味之素”雪平锅</p>
			<p>
				<img src="../../../img/goodspagea6.jpg" alt="">
			</p>
			<p>1930年北陆诞生于日本铸物之城高冈地区，</p>
			<p>90多年前，创始人荒井三郎，</p>
			<p>把高冈铸造技术运用到铝合金厨具制造上，</p>
			<p>时而今日，</p>
			<p>北陆仍然坚持用传统工艺制造优良的料理器具</p>
			<p>味之素雪平锅以铝合金材质制造，</p>
			<p>导热速度非常快，</p>
			<p>适合加热调理，</p>
			<p>不但可迅速汆烫蔬菜，煮面、熬奶，</p>
			<p>还能放在直火上慢慢炖煮。</p>
			<p>也非常适合捣碎和拌匀食材，</p>
			<p>同样适合凉拌料理。</p>
			<p>很适合女生使用。</p>
			<p>16cm的雪平锅容量为1.6L，</p>
			<p>剛好烹煮一餐食，</p>
			<p>不多不少刚刚好。</p>
			<!-- <div class="lgy_pgif"> -->
				<!-- <img src="../../../img/goodsbottom.gif" height="1160" width="540" alt=""> -->
			<!-- </div> -->
			<div class="lgy_pageShop clear">
				<strong>尺寸：16cm</strong>
				<strong>本体：铝合金</strong>
				<strong>内／外面表面：阳极氧化加工（形成氧化膜，使锅体耐腐蚀、耐磨损）</strong>
				<strong>把手：天然木</strong>
				<strong>产地：日本</strong>
				<strong>适用热源：直火专用</strong>
				<p style="text-align:left;padding-left:2rem;">
					价格：<em ref="cartprice">156</em>元
				</p>
				<div class="lgy_shopNum clear">
					数量：
					<input class="lgy_shopDown" type="button" value="-" @click="getAttribute" lgy_Nums="1">
					<span class="lgy_Num" ref="cartnum">{{lgy_Nums}}</span>
					<input class="lgy_shopUp" type="button" value="+" @click="lgy_Nums ++">
				</div>
				<span class="lgy_shopSong">
					<strong>&nbsp;&nbsp;&nbsp;&nbsp;前200名下单</strong>
					<strong>&nbsp;&nbsp;&nbsp;&nbsp;(赠送30ml洗涤果蔬洗涤液)</strong>
				</span>
				<div class="lgy_goodsBuy">
					<div class="lgy_addCart" @click="lgy_updatephp">加入购物车</div>
					<div class="lgy_addBuy" @click="lgy_buyphp">立即购买</div>
					<!-- <div class="lgy_addBuy" @click="lgy_deletephp">删除</div> -->
				</div>
			</div>
		</div>
		<!-- <a href="#runTopa" class="runtoTop" id="runTop"> -->
	      <!-- <img src="../../img/upTop.jpg" alt=""> -->
	    <!-- </a> -->
	</div>
</template>

<script type="text/javascript">
	import Vue from './../../../node_modules/vue/dist/vue.js'
	import Router from './../../../node_modules/vue-router/dist/vue-router.js'
	import resource from './../../../node_modules/vue-resource/dist/vue-resource.js'
	import $ from 'jquery'
	import http from '../../utils/HttpClient'
	// import '../common/common.css'
	export default {
		name: 'goodspagea',
		data: function(){
			return {datapage:[],datagoodid:[],updatephpid:[],lgy_Nums:"1",id:"2",back:"22iii",}
		},
		created: function(){
				$.get('http://localhost/LC/lc666/reg.php',function(response){
					var cartid = parseInt(this.$route.params.id) - 1;
					this.datapage = JSON.parse(response)[cartid];
					console.log(this.datapage)
					// var responeseObj = JSON.parse(response);
						// console.log(this.datapage[0].cartid)
			   //  	for(var i = 0; i < this.datapage[cartid].length; i++){
						// // // responeseObj
						// this.datagoodid.push(this.datapage[i].cartid)
			   //  	}
	     //    		console.log(this.datagoodid)

			    }.bind(this))
		},
		ready: function(){
	        // console.log(this.$route.params.id);
	    },
		methods:{
			getAttribute: function(event){
				var lgy_Nums = parseInt(event.target.getAttribute('lgy_Nums'));
				if(lgy_Nums == 1){

				}else{
					this.lgy_Nums = lgy_Nums - 1;
				}
				event.target.setAttribute('lgy_Nums', this.lgy_Nums);
			},
			created: function(){
				// console.log( this.$route.query.id)
				var self = this;
				$.get('http://localhost/LC/lc666/cart.php',function(response){
					this.datapage = JSON.parse(response)
			      // var dataObj = JSON.parse(response);
			      // console.log(this.datapage)
			      // this.datapage.push(data)
			    }.bind(this))
			},
			ready: function(){
		        console.log(this.$route.params.id);
		    },
		    goAnchor(selector) {
		        var anchor = this.$el.querySelector(selector)
		        document.body.scrollTop = anchor.offsetTop
		    },
		    lgy_deletephp: function(){
		    	var cartid = this.$route.params.id;
		    	console.log(cartid)
		    	$.post("http://localhost/LC/lc666/deletecart.php",{cartid:cartid},function(result){
			  				}.bind(this));
		    	// console.log(666)
		    },
		    lgy_buyphp: function(){
		    	var cartid = this.$route.params.id;
		    	var cartmsg = this.$refs.cartmsg.innerText;
		    	var cartnum = this.$refs.cartnum.innerText;
		    	var cartprice = this.$refs.cartimg.cartprice;
		    	var cartimg = this.$refs.cartimg.src;
		    	// console.log(cartid)
		    	$.post("http://localhost/LC/lc666/addcart.php",{cartid:cartid,cartmsg:cartmsg,cartnum:cartnum,cartprice:cartprice},function(result){
			  				}.bind(this));
		    },
		    lgy_updatephp: function(){
		    	var cartid = this.$route.params.id;
		    	var cartmsg = this.$refs.cartmsg.innerText;
		    	var cartnuminner = parseInt(this.$refs.cartnum.innerText);
		    	var cartprice = this.$refs.cartimg.cartprice;
		    	var cartimg = this.$refs.cartimg.src;
		    	// $.get('http://localhost/LC/lc666/cart.php',function(response){
					// this.datapage = JSON.parse(response)
			      // var cartnumget = parseInt(JSON.parse(response)[0].cartnum);
			      // var cartnum = cartnumget + cartnuminner;
			      // console.log(cartnum)
		    	// 	$.post("http://localhost/LC/lc666/updatecart.php",{cartid:cartid,cartmsg:cartmsg,cartnum:cartnuminner,cartprice:cartprice},function(result){
			    //   // this.datapage.push(data)
			    // }.bind(this))
		    	// console.log(cartid)
			  				// }.bind(this));
			  	var path = 	location.search.slice(1);
			
			    var arr = path.split("=");
			    var name= arr[1];	
			    var cartid = this.$route.params.id;
			    var obj = {};
			    obj.num = this.lgy_Nums;

			   $.ajax({
			   	url:"http://localhost/LC/lc666/src/php/addcart.php",
			   	type:'POST',
			   	data:{id:cartid,name:name,num:obj.num},
			   	success:function(response){
			   	
			   		console.log(response)
			   		// console.log(obj.num)
			   		// for()
			   	}

			   })
			   alert("加入购物车成功")				
		    },
		    getUid:function(_callback){
		    	var url1 = this.$route.params.id
		    	var url = url1.substring(0)
		    	// console.log(url)
		        var gid = url;
		        console.log(gid)
		        // debugger
		        return gid
		    }

		}
	}
</script>
<style lang="scss">
	$colorbg : #4fada7;
	$coloreee : #eee;
	$colorccc : #ccc;
	$colorfff : #fff;
	$color000 : #000;
	$color333 : #333;
	$color666 : #666;
	$color999 : #999;
	$fontSize12 : 12px;
	$fontSize13 : 13px;
	$fontSize14 : 14px;
	$fontSize15 : 15px;
	$fontSize16 : 16px;
	$Acolor : black;
	$Spancolor : black;
	*{
		margin: 0;
		padding: 0;
	}
	em{
		font-style: normal;
	}
	input{
		outline:none;
	}
	a{
		text-decoration: none;
	}
	.ulpagediv{
		width: 30rem;
		height: 3rem;
		display: none;
	}
	.ulpage{
		width: 30rem;
		height: 3rem;
	}
	.ulpage li{
		float: left;
		margin: 3rem;
	}
	.clear:after {
	    display: block;
	    height: 0;
	    clear: both;
	}
	.clear {
	    zoom: 1;
	}
	.lgy_commonTop{
		width: 100%;
		height: 3rem;
		position: fixed;
		top: 0;
		left: 0;
		background:#4fada7;
	}
	.lgy_logincss{
		width: 3rem;
		height: 3rem;
		line-height: 3rem;
		float: left;
		color:#fff;
	}
	.lgy_logincss:nth-child(1){
		margin-left: 0.8rem;
	}
	.lgy_logincss:nth-child(2){
		float: right;
	}
	.lgy_logincss:nth-child(3){
		float: right;
	}
	.runtoTop{
	    width: 4rem;
	    height: 5.3rem;
	    position: fixed;
	    bottom: 4rem; 
	    right: -2rem;
	    z-index: 99;
	    margin-right: 3rem;
	    background-image: url('../../../img/runTop.png');
	    background-position: 0rem 0rem;
	    background-repeat: no-repeat;
	}
	.lgy_pagesOut{
		width: 100%;
		padding: 1rem;
		margin-top: 2rem;
		background-color: $coloreee;
		.lgy_pagesDiva{
			width: 100%;
			height: 42rem;
			border-bottom: 2px solid $colorccc;
			img{
				width: 100%;
				padding: 1rem 0;
			}
			.lgy_goodsTitle{
				margin: 1.3rem 0;
				font-size: 2.8rem;
			}
			p{
				width: 100%;
				color: $color333;
				text-align: center;
			}
			strong{
				width: 100%;
				display: inline-block;
				text-align: center;
			}
		}
		.lgy_pagesDiva:nth-child(3){
			height: 38rem;
		}
		.lgy_pagesDiva:nth-child(4){
			height: 40rem;
		}
		.lgy_pagesDiva:nth-child(5){
			height: 22rem;
		}
		.lgy_pagesDiva:nth-child(6){
			height: 46rem;
		}
		.lgy_pagesDiva:nth-child(7){
			height: 100%;
			.lgy_pgif{
				width: 100%;
				height: 25.5rem;
				overflow:hidden;
				width: 100%;
				background-image: url('../../../img/goodsbottom.gif');
				background-size: 99%;
				background-position: 0rem -10rem;
			}
			.lgy_pageShop{
				width: 100%;
				padding: 1rem;
				background: $colorfff;
				margin-top: 1rem;
				strong{
					text-align: left;
					padding-left: 3rem;
					font-size: 1.5rem;
				}
				.lgy_shopNum{
					width: 100%;
					height: 3.5rem;
					margin-top: 1rem;
					padding-left: 2.5rem;
					font-size: 2rem;
					float: left;
					input{
						width: 2.5rem;
					}
				}
				.lgy_shopSong{
					font-size: 16px;
					color: $coloreee;
					strong{
						font-size: 16px;
						color: $color666;
					}
				}
				.lgy_goodsBuy{
					width: 100%;
					margin-top: 1rem;
					.lgy_addCart{
						width:38%;
						height: 3.5rem;
						margin-left: 2rem;
						line-height: 3.5rem;
						text-align: center;
						font-size: 1.5rem;
						float: left;
						color: #fff;
						background: $colorbg;
					}
					.lgy_addBuy{
						width:38%;
						height: 3.5rem;
						line-height: 3.5rem;
						margin-right: 2rem;
						text-align: center;
						font-size: 1.5rem;
						float: right;
						color: #fff;
						background: $colorbg;
					}
				}
			}
		}
	}
</style>

