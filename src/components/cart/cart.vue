<template>
	<div>
		<div class="lgy_commonTop" style="z-index:99"><a href="#/" class="lgy_logincss router-link-active">主页</a> <a href="#/register" class="lgy_logincss">注册</a> <a href="#/login" class="lgy_logincss">登录</a></div>
		<div class="lgy_cartOutshow" style="margin-top:3rem;margin-bottom:6.5rem">
			<div class="lgy_cartOut" v-for="(key, index) in cartData">
				<div class="lgy_cartOuta">
					<input type="checkbox" style="margin-left:1rem" @click="eleChecked" v-bind:elecheckid="key.cartid" v-bind:index="index">
					<span style="display:none">{{key.cartnum}}</span>
					<span style="display:none">{{key.cartprice}}</span>
				</div>
				<div class="lgy_cartOuta">
					<img :src="'../../../img/'+key.cartimg" alt="" style="width:100%;height:60%;">
				</div>
				<div class="lgy_cartOuta">
				<!-- <input type="text" ref="lgy_cartid" :value="key.cartid" style="display:none"/> -->


				<!-- <span ref="lgy_cartid" style="display:none" v-bind:cartid="key.cartid"></span> -->


					<p>雪平锅</p>
					<p>数量：<span>{{key.cartnum}}</span></p>
					<p>$ <em v-bind:eleprice="key.cartprice">{{key.cartprice}}</em>元</p>
					<div class="lgy_shopNum clear">
						数量：
						<input class="lgy_shopDown" type="button" value="-" @click="cartnumDown" v-bind:cartDownnum="key.cartnum" v-bind:cartDownid="key.cartid">
						<span class="lgy_Num" ref="cartnum">{{key.cartnum}}</span>
						<input class="lgy_shopUp" v-bind:cartUpnum="key.cartnum" type="button" value="+" v-bind:cartUpid="key.cartid" @click="cartnumUp">
					</div>
				</div>
				<div class="lgy_cartOuta" @click="lgy_deletephp">
					<img src="../../../img/delbtn.png" alt="" v-bind:cartid="key.cartid">
				</div>
			</div>
			<div class="allPricebox">
				<input type="checkbox" class="allPricecheck" @click="getChecked">
				<span>总价格：<em class="allPrice">{{allMoneynum}}</em></span>
				<input type="button" class="goBuy" value="结算">
			</div>
		</div>
		<div id="Tl_bottom">
			<router-link to="/">
				<img src="../../../img/fsy.png" alt="" style="width:20px;height:30px;margin-left:13.5%;">
			</router-link>
			<router-link to="/LhaGoodspagea">
				<img src="../../../img/ffl.png" alt="" style="width:22px;height:30px;margin-left:13.5%;">
			</router-link>
			<router-link to="/login">
				<img src="../../../img/fgwc.png" alt="" style="width:35px;height:30px;margin-left:13.5%;">
			</router-link>
			<router-link to="">
				<router-link to="/login"><img src="../../../img/fdd.png" alt="" style="width:40px;height:30px;margin-left:11.5%;"></router-link>
			</router-link>
		</div>
	</div>
</template>
<script>
	import './../index/index.css'
	export default {
		name: 'cart',
		data: function(){
			return {cartData:[],allMoney:[],allMoneynum:"0",elecartnum:"1"}
		},
		created: function(){
				$.get('http://localhost/LC/lc666/cart.php',function(response){
					if(response.length > 12){
						this.cartData = JSON.parse(response);
					}
			    }.bind(this))
		},
		methods:{
			cartnumUp: function(){

			},
			eleChecked: function(e) {
				var num = e.path[2].children[2].children[2].children[0].innerText
				var price = e.path[2].children[2].children[1].children[0].innerText
				if(e.currentTarget.checked){
					var numa =  num;
				}
				console.log(e.path[2].children[2].children[2].children[0].innerText)
				console.log(e.path[2].children[2].children[1].children[0].innerText)
				console.log(e.currentTarget.checked)

				// var num = $(':checked').parent().children('span').eq(0).html();
				// var price = $(':checked').parent().children('span').eq(1).html();
				// var box = num * price;
				// console.log(typeof box)
				// this.allMoneynum = parseInt(this.allMoneynum) + box;
				// num = null;
				// price = null;
				// box = null;
				// console.log($(':checked').parent().children('span').eq(0).html())
				// console.log($(':checked').parent().children('span').eq(1).html())
				// if()
				// for(var i=0;i<$(':checked').length;i++){
				// 	$(':checked')[i].
				// }
				var cartid = event.target.getAttribute('checkid');
				var $checkbox = $('.lgy_cartOuta :checkbox');
				// console.log($checkbox)

				// console.log($checkbox.eq(1).prop('checked'))
				var cleng = $checkbox.length;
				var lenged = $('.lgy_cartOut :checked').length;

				// if($checkbox.prop('checked')==true){
				// 	$.get('http://localhost/LC/lc666/cart.php',function(response){
				// 		if(response.length > 12){
				// 			this.cartData = JSON.parse(response);
				// 			var sum = 0;
				// 			for(var i = 0;i < this.cartData.length; i++){
				// 				// this.allMoney.push(this.cartData[i].cartprice)
				// 				var cartprice = parseInt(this.cartData[i].cartprice)
				// 				var cartnum = parseInt(this.cartData[i].cartnum)
				// 				sum += (cartnum * cartprice);
				// 			}
				// 			this.allMoneynum = sum;
				// 		}
				//     }.bind(this))
				// }else{
				// 	this.allMoneynum = 0;
				// }
			},
			getChecked: function() {
				var $checkbox = $('.lgy_cartOut :checkbox');
				var cleng = $checkbox.length;
				var lenged = $('.lgy_cartOut :checked').length;
				if(lenged == cleng){
					$checkbox.prop('checked',false);
				}else{
					$checkbox.prop('checked',true);
				}
				if($checkbox.prop('checked')==true){
					$.get('http://localhost/LC/lc666/cart.php',function(response){
						if(response.length > 12){
							this.cartData = JSON.parse(response);
							var sum = 0;
							for(var i = 0;i < this.cartData.length; i++){
								// this.allMoney.push(this.cartData[i].cartprice)
								var cartprice = parseInt(this.cartData[i].cartprice)
								var cartnum = parseInt(this.cartData[i].cartnum)
								sum += (cartnum * cartprice);
							}
							this.allMoneynum = sum;
						}
				    }.bind(this))
				}else{
					this.allMoneynum = 0;
				}
			},
			lgy_deletephp: function(event){
				var cartid = event.target.getAttribute('cartid');
		    	$.post("http://localhost/LC/lc666/deletecart.php",{cartid:cartid},function(result){
		    		$.get('http://localhost/LC/lc666/cart.php',function(response){
						if(response){
							this.cartData = JSON.parse(response);
							var sum = 0;
						for(var i = 0;i < this.cartData.length; i++){
							// this.allMoney.push(this.cartData[i].cartprice)
							var cartpricenum = parseInt(this.cartData[i].cartprice)
							sum += cartpricenum;
						}
						this.allMoneynum = sum;
						}
			    }.bind(this))
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
		    cartnumDown: function(){
		    	// var cartid = this.$route.params.id;
		    	// var cartmsg = this.$refs.cartmsg.innerText;
		    	var cartid = parseInt(event.target.getAttribute('cartDownid'));
		    	var cartnumbefore = parseInt(event.target.getAttribute('cartDownnum'));
		    	if(cartnumbefore != "1"){
		    		var cartnum = cartnumbefore - 1;
		    		$.post("http://localhost/LC/lc666/updatecartbuy.php",{cartid:cartid,cartnum:cartnum},function(result){
		    			$.get('http://localhost/LC/lc666/cart.php',function(response){
		    				if(response){
									this.cartData = JSON.parse(response);
								// 	var sum = 0;
								// for(var i = 0;i < this.cartData.length; i++){
								// // this.allMoney.push(this.cartData[i].cartprice)
								// 	var cartprice = parseInt(this.cartData[i].cartprice)
								// 	var cartnum = parseInt(this.cartData[i].cartnum)
								// 	sum += (cartnum * cartprice);
								// }
								// this.allMoneynum = sum;
							}
						}.bind(this));

		    		}.bind(this));
		    	}
		    },
		    cartnumUp: function(){
		    	// var cartid = this.$route.params.id;
		    	// var cartmsg = this.$refs.cartmsg.innerText;
		    	var cartid = parseInt(event.target.getAttribute('cartUpid'));
		    	var cartnumbefore = parseInt(event.target.getAttribute('cartUpnum'));
	    		var cartnum = cartnumbefore + 1;
	    		$.post("http://localhost/LC/lc666/updatecartbuy.php",{cartid:cartid,cartnum:cartnum},function(result){
	    			$.get('http://localhost/LC/lc666/cart.php',function(response){
	    				if(response){
								this.cartData = JSON.parse(response);
							// 	var sum = 0;
							// for(var i = 0;i < this.cartData.length; i++){
							// // this.allMoney.push(this.cartData[i].cartprice)
							// 	var cartprice = parseInt(this.cartData[i].cartprice)
							// 	var cartnum = parseInt(this.cartData[i].cartnum)
							// 	sum += (cartnum * cartprice);
							// }
							// this.allMoneynum = sum;
						}
					}.bind(this));

	    		}.bind(this));
		    }
		}
	}
</script>
<style lang="scss">
.lgy_cartOutshow{
	width: 100%;
	height: 40.2rem;
	overflow: auto;
	border: 1px solid #ccc;
	position:relative;
}
.lgy_cartOut{
	width: 100%;
	height: 10rem;
	border: 1px solid #ccc;
	.lgy_cartOuta{
		float: left;
		height: 10rem;
	}
	.lgy_cartOuta:nth-child(1){
		width: 10%;
		line-height: 10rem;
		input{

		}
	}
	.lgy_cartOuta:nth-child(2){
		width: 30%;
		line-height: 10rem;
	}
	.lgy_cartOuta:nth-child(3){
		width: 50%;
		padding: 1.8rem 1rem 1rem 1.5rem;
	}
	.lgy_cartOuta:nth-child(4){
		width: 10%;
		line-height: 10rem;
	}
}
.lgy_shopNum{
	width: 100%;
	height: 3.5rem;
	font-size: 1rem;
	input{
		width: 1.5rem;
	}
}
.allPricebox{
	width: 100%;
	height: 3rem;
	line-height: 3rem;
	background:#fff;
	position: fixed;
	bottom:4.25rem;
	left: 0;
	border-top:1px solid #ccc;
	.allPricecheck{
		margin-left: 1rem;
		margin-right: 5rem;
	}
	.goBuy{
		float: right;
		width: 25%;
		height: 3rem;
		background: #ccc;
		outline:none;
		border:0;
	}
	.allPrice{
		font-size: 2.8rem;
		font-weight: bold;
		color:red;
	}
}
</style>