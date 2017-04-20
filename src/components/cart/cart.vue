<template>
	<div>
		<div class="lgy_commonTop" style="z-index:99"><a href="#/" class="lgy_logincss router-link-active">主页</a> <!-- <a href="#/register" class="lgy_logincss">注册</a> <a href="#/login" class="lgy_logincss">登录</a> --></div>
		<div class="lgy_cartOutshow" style="margin-top:3rem;margin-bottom:6.5rem">
			<div class="lgy_cartOut" v-for="(key, index) in cartData">
				<div class="lgy_cartOuta">
					<input type="checkbox" style="margin-left:1rem" @click="eleChecked" v-bind:elecheckid="key.cartid" v-bind:index="index">
					<!-- <span style="display:none">{{key.num}}</span>
					<span style="display:none">{{key.cartprice}}</span> -->
				</div>
				<div class="lgy_cartOuta">
					<img :src="'../../../img/'+key.goodsImg" alt="" style="width:100%;height:60%;">
				</div>
				<div class="lgy_cartOuta">
					<!-- <input type="text" ref="lgy_cartid" :value="key.cartid" style="display:none"/> -->


					<!-- <span ref="lgy_cartid" style="display:none" v-bind:cartid="key.cartid"></span> -->


					<p>{{key.goodsName}}</p>
					<!-- <p>数量：<span>{{key.num}}</span></p> -->
					<p>$ <em v-bind:eleprice="key.cartprice">{{key.goodsPrice}}</em>元</p>
					<div class="lgy_shopNum clear">
						数量：
						<input class="lgy_shopDown" type="button" value="-" @click="cartnumDown" v-bind:cartDownnum="key.cartnum" v-bind:gid="key.goodsId">
						<span class="lgy_Num" :id=index ref="cartnum"></span>
						<input class="lgy_shopUp" v-bind:cartUpnum="key.num" type="button" value="+" v-bind:gid="key.goodsId" @click="cartnumUp">
					</div>
				</div>
				<div class="lgy_cartOuta" @click="lgy_deletephp">
					<img src="../../../img/delbtn.png" alt="" v-bind:cartid="key.cartid" v-bind:kid="key.goodsId">
				</div>
			</div>
			<div class="allPricebox">
				<input type="checkbox" class="allPricecheck" @click="getChecked">
				<span>总价格：<em class="allPrice" v-model.number="allPrice">{{allPrice}}</em></span>
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
			return {cartData:[],allMoney:[],allMoneynum:"0",elecartnum:"1",arr:[],allPrice:0}
		},
		created: function(){
				var self=this
			    $.get("http://localhost/LC/lc666/src/php/cart.php",function(response){
			    	self.cartData = JSON.parse(response);
			    	// console.log(response )
			    	// console.log(self.cartData )
			   		$.get("http://localhost/LC/lc666/src/php/cartsnum.php",function(response){
				    	this.arr = JSON.parse(response);
				    	// console.log(thi/\s.arr )
				    	for(var i = 0; i < this.arr.length;i++){
							var str = parseInt(this.arr[i].num);
							// console.log( this.arr[i].num)
							// $('.lgy_Num').append('<span>'+str+'</span>')
							$('#'+i).append(str);
							// console.log($('#'+i))

				    	}
				    }.bind(this))

			    })
				// $.get('http://localhost/LC/lc666/cart.php',function(response){
				// 	if(response.length > 12){
				// 		this.cartData = JSON.parse(response);
				// 	}
			 //    }.bind(this))
		},
		methods:{
			eleChecked: function(e) {
				// console.log(e.path[2].children[2].children[2].children[2])
				var num = parseInt(e.path[2].children[2].children[2].children[1].innerText);
				var price = parseInt(e.path[2].children[2].children[1].children[0].innerText);
				// console.log(typeof num)
				if(e.currentTarget.checked){
					console.log(e.currentTarget.checked)
					this.allPrice +=  num * price;
					console.log(typeof this.allPrice)
				}else{
					this.allPrice -=  num * price;
				}
				// console.log(price)
				var cartid = event.target.getAttribute('checkid');
				var $checkbox = $('.lgy_cartOuta :checkbox');
				// console.log($checkbox)

				// console.log($checkbox.eq(1).prop('checked'))
				var cleng = $checkbox.length;
				var lenged = $('.lgy_cartOut :checked').length;
			},
			getChecked: function(e) {
				var $checkbox = $('.lgy_cartOut :checkbox');
				console.log($checkbox)
				console.log($checkbox[0].parentElement.nextElementSibling.nextElementSibling.children[2].children[1].innerText)
				// for(var i = 0;i<$checkbox.length;i++){

				// }
				var cleng = $checkbox.length;
				var lenged = $('.lgy_cartOut :checked').length;
				if(lenged == cleng){
					$checkbox.prop('checked',false);
				}else{
					$checkbox.prop('checked',true);
				}
				if($checkbox.prop('checked')==true){
					for(var i = 0;i< $checkbox.length;i++){
						var price = parseInt($checkbox[i].parentElement.nextElementSibling.nextElementSibling.children[1].children[0].innerText);
						var num = parseInt($checkbox[i].parentElement.nextElementSibling.nextElementSibling.children[2].children[1].innerText);
						this.allPrice +=  num * price;

					}
					
				}else{
					this.allMoneynum = 0;
				}
			},
			lgy_deletephp: function(event){
		    	var cartid = event.target.getAttribute('kid');
				console.log(cartid)
				      var self =this
				$.ajax({
					url:"http://localhost/LC/lc666/src/php/delcart.php",
                    type:'post',
                    data:{id:cartid},
                     async:false, 
                    success:function(response){
	                    $.get("http://localhost/LC/lc666/src/php/cart.php",function(response){
					    	self.cartData = JSON.parse(response);

					    	$.get("http://localhost/LC/lc666/src/php/cartsnum.php",function(response){
						    	this.arr = JSON.parse(response);
						    	console.log(this.arr )
						    	for(var i = 0; i < this.arr.length;i++){
									var str = parseInt(this.arr[i].num);
									console.log( this.arr[i].num)
									// $('.lgy_Num').append('<span>'+str+'</span>')
									$('#'+i).html(str);
									// console.log($('#'+i))

						    	}
						    }.bind(this))
					    
					    
			   
			           })

                    }

				})
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
		    cartnumDown: function(e){
		    	var nums = parseInt(event.target.nextElementSibling.innerHTML);
		    	var cartid = event.target.getAttribute('gid');
		    	  nums -= 1;
		    	// console.log(nums)
		    	  // console.log(cartid)
		    	 $.ajax({
				   	url:"http://localhost/LC/lc666/src/php/downcart.php",
				   	type:'POST',
				   	data:{id:cartid,numMin:nums},
				   	success:function(response){
				   		$.get("http://localhost/LC/lc666/src/php/cartsnum.php",function(response){
						    	this.arr = JSON.parse(response);
						    	// console.log(this.arr )
						    	for(var i = 0; i < this.arr.length;i++){
									var str = parseInt(this.arr[i].num);
									// console.log( this.arr[i].num)
									// $('.lgy_Num').append('<span>'+str+'</span>')
									$('#'+i).html(str);
									// console.log($('#'+i))

						    	}
						    }.bind(this))
				   	
				   		// console.log(response)
				   		// console.log(cartid)
				   		// for()
				   	}

			   })
		    },
		    cartnumUp: function(e){
		    	var nums = parseInt(event.target.previousElementSibling.innerHTML);
		    	var cartid = event.target.getAttribute('gid');
		    	  nums += 1;
		    	  // console.log(cartid)
		    	 $.ajax({
				   	url:"http://localhost/LC/lc666/src/php/addcart.php",
				   	type:'POST',
				   	data:{id:cartid,num:nums},
				   	success:function(response){
				   		$.get("http://localhost/LC/lc666/src/php/cartsnum.php",function(response){
						    	this.arr = JSON.parse(response);
						    	// console.log(this.arr )
						    	for(var i = 0; i < this.arr.length;i++){
									var str = parseInt(this.arr[i].num);
									// console.log( this.arr[i].num)
									// $('.lgy_Num').append('<span>'+str+'</span>')
									$('#'+i).html(str);
									// console.log($('#'+i))

						    	}
						    }.bind(this))
				   	
				   		// console.log(response)
				   		// console.log(cartid)
				   		// for()
				   	}

			   })
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