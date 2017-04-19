<template>
	<div>
		<div class="lgy_commonTop"><a href="#/" class="lgy_logincss router-link-active">主页</a> <a href="#/register" class="lgy_logincss">注册</a> <a href="#/login" class="lgy_logincss">登录</a></div>
		<div class="lgy_cartOutshow" style="margin-top:3rem;margin-bottom:3.2rem">
			<div class="lgy_cartOut" v-for="(key, index) in cartData">
				<div class="lgy_cartOuta">
					<input type="checkbox" style="margin-left:1rem">
				</div>
				<div class="lgy_cartOuta">
					<img :src="'../../../img/'+key.cartimg" alt="" style="width:100%;height:60%;">
				</div>
				<div class="lgy_cartOuta">
				<!-- <input type="text" ref="lgy_cartid" :value="key.cartid" style="display:none"/> -->


				<span ref="lgy_cartid" style="display:none" v-bind:kid="key.cartid"></span>


					<p>雪平锅</p>
					<p>数量：<span>{{key.cartnum}}</span></p>
					<p>$ <em v-bind:eleprice="key.cartprice">{{key.cartprice}}</em>元</p>
					<div class="lgy_shopNum clear">
						数量：
						<input class="lgy_shopDown" type="button" value="-" @click="getAttribute" lgy_Nums="1">
						<span class="lgy_Num" ref="cartnum" v-bind:cartnum="key.cartnum">{{key.cartnum}}</span>
						<input class="lgy_shopUp" type="button" value="+" @click="key.cartnum ++">
					</div>
				</div>
				<div class="lgy_cartOuta" @click="lgy_deletephp">
					<img src="../../../img/delbtn.png" alt="" v-bind:kid="key.cartid">
				</div>
			</div>
			<div class="allPricebox">
				<input type="checkbox" class="allPricecheck">
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
			return {cartData:[],allMoney:[],allMoneynum:""}
		},
		created: function(){
				$.get('http://localhost/LC/lc666/cart.php',function(response){
					// debugger
						console.log(response.length)
						// console.log(666)
						console.log(typeof response)
						// if(response == null){
						// 	console.log(111)
						// }
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
						// console.log(this.allMoney)
					}
			    }.bind(this))
			    // console.log(event.target.getAttribute('eleprice'))
		},
		methods:{
			getAttribute: function(event){
				console.log(event.target)
				var lgy_Nums = parseInt(event.target.getAttribute('key.cartnum'));
				if(lgy_Nums == 1){

				}else{
					this.lgy_Nums = lgy_Nums - 1;
				}
				event.target.setAttribute('lgy_Nums', this.lgy_Nums);
			},
			lgy_deletephp: function(event){
				var cartid = event.target.getAttribute('kid');
				console.log(cartid)
		    	// var cartid = this.$route.params.id;
		    	// console.log(cartid)
		    	$.post("http://localhost/LC/lc666/deletecart.php",{cartid:cartid},function(result){
		    		console.log(cartid)
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
		    		$.post("http://localhost/LC/lc666/updatecart.php",{cartid:cartid,cartmsg:cartmsg,cartnum:cartnuminner,cartprice:cartprice},function(result){
			      // this.datapage.push(data)
			    }.bind(this))
		    	// console.log(cartid)
			  				// }.bind(this));
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
	bottom:4.3rem;
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