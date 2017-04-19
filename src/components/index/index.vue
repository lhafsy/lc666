<template>
	<div>
		<div id="Tl_search">
			<input type="text" id="Tl_search_key" placeholder="搜索">
			<button id="Tl_btn_search" style="font-size:12px;width:14%;height:1.8rem;">搜索</button>
		</div>
		<div id="Tl_main_content">
			<router-link :to="'/page/' + data[0].index_id" class="Tl_nav">
				<div></div>
			</router-link>
			<router-link :to="'/page/' + data[1].index_id" class="Tl_nav2">
				<div></div>
			</router-link>
			<router-link :to="'/page/' + data[2].index_id" class="Tl_nav3">
				<div></div>
			</router-link>
			<div style="width:100%;height:20rem;">
				<router-link :to="'/page/' + data[3].index_id">
					<div id="Tl_Combination_top"></div>
				</router-link>
				<router-link :to="'/page/' + data[4].index_id">
					<div id="Tl_Combination_Top"></div>
				</router-link>
			</div>
			<div class="clear">
				<router-link :to="'/page/' + data[5].index_id">
					<div id="Tl_Combination_bottom"></div>
				</router-link>
				<router-link :to="'/page/' + data[6].index_id">
					<div id="Tl_Combination_Bottom"></div>
				</router-link>
			</div>
			<router-link :to="'/page/' + data[7].index_id" class="Tl_nav4">
				<div></div>
			</router-link>
			<div style="width:100%;height:15rem;" class="clear">
				<router-link :to="'/page/' + data[8].index_id">
					<router-link :to="'/page/' + data[9].index_id">
						<div id="Tl_Combination_left"></div>
					</router-link>
				</router-link>
				<router-link :to="'/page/' + data[10].index_id">
					<div id="Tl_Combination_right"></div>
				</router-link>
			</div>
			<router-link :to="'/page/' + data[11].index_id" class="Tl_nav5">
				<div></div>
			</router-link>
			<div style="margin:2% 0;text-align:center;">
				<p style="font-weight:600;font-family:'微软雅黑';">- 热卖周报 -</p>
			</div>
			<div class="clear">
				<div v-for="(key, index) in data" v-if="index < 6" style="background-color:rgb(241,241,241);float:left;margin-left:2.2%;margin-bottom:2%;width:30%;height:15rem;overflow:hidden;text-align:center;">
					<router-link :to="'/page/' + key.index_id">
						<img :src="'../../../img/'+key.img" alt="" style="width:100%;height:60%;">
						<div style="height:3rem;margin-left: 5%;font-size: 12px;width:90%;line-height:1.5;word-break:break-all;overflow : hidden;text-overflow: ellipsis;font-family:'微软雅黑';">{{key.contents}}</div>
						<div style="text-align: center;font-size: 12px;line-height: 20px;margin-bottom: 18px;margin-top: 10px;">{{key.price}}</div>
					</router-link>
				</div>
				<!-- <div style="background-color:rgb(241,241,241);float:left;margin-left:2%;margin-bottom:2%;width:30%;height:15rem;overflow:hidden;text-align:center;">
					<a href="#"router-link
						<img src="../../img/256837.jpg" alt="" style="width:100%;height:60%;">
						<div style="height:3rem;margin-left: 5%;font-size: 12px;width:90%;line-height:1.5;word-break:break-all;overflow : hidden;text-overflow: ellipsis;font-family:'微软雅黑';">细白焕采光面膜美容仪 | 30天再现瓷光肌【限时赠送护颜乳】</div>
						<div style="text-align: center;font-size: 12px;line-height: 20px;margin-bottom: 18px;margin-top: 10px;">￥590.00</div>
					</a>
				</div>
				<div style="background-color:rgb(241,241,241);float:left;margin-left:2%;margin-bottom:2%;width:30%;height:15rem;overflow:hidden;text-align:center;">
					<a href="#">
						<img src="../../img/256837.jpg" alt="" style="width:100%;height:60%;">
						<div style="height:3rem;margin-left: 5%;font-size: 12px;width:90%;line-height:1.5;word-break:break-all;overflow : hidden;text-overflow: ellipsis;font-family:'微软雅黑';">细白焕采光面膜美容仪 | 30天再现瓷光肌【限时赠送护颜乳】</div>
						<div style="text-align: center;font-size: 12px;line-height: 20px;margin-bottom: 18px;margin-top: 10px;">￥590.00</div>
					</a>
				</div>
				<div style="background-color:rgb(241,241,241);float:left;margin-left:1%;margin-bottom:2%;width:30%;height:15rem;overflow:hidden;text-align:center;">
					<a href="#">
						<img src="../../img/256837.jpg" alt="" style="width:100%;height:60%;">
						<div style="height:3rem;margin-left: 5%;font-size: 12px;width:90%;line-height:1.5;word-break:break-all;overflow : hidden;text-overflow: ellipsis;font-family:'微软雅黑';">细白焕采光面膜美容仪 | 30天再现瓷光肌【限时赠送护颜乳】</div>
						<div style="text-align: center;font-size: 12px;line-height: 20px;margin-bottom: 18px;margin-top: 10px;">￥590.00</div>
					</a>
				</div>
				<div style="background-color:rgb(241,241,241);float:left;margin-left:2%;margin-bottom:2%;width:30%;height:15rem;overflow:hidden;text-align:center;">
					<a href="#">
						<img src="../../img/256837.jpg" alt="" style="width:100%;height:60%;">
						<div style="height:3rem;margin-left: 5%;font-size: 12px;width:90%;line-height:1.5;word-break:break-all;overflow : hidden;text-overflow: ellipsis;font-family:'微软雅黑';">细白焕采光面膜美容仪 | 30天再现瓷光肌【限时赠送护颜乳】</div>
						<div style="text-align: center;font-size: 12px;line-height: 20px;margin-bottom: 18px;margin-top: 10px;">￥590.00</div>
					</a>
				</div>
				<div style="background-color:rgb(241,241,241);float:left;margin-left:2%;margin-bottom:2%;width:30%;height:15rem;overflow:hidden;text-align:center;">
					<a href="#">
						<img src="../../img/256837.jpg" alt="" style="width:100%;height:60%;">
						<div style="height:3rem;margin-left: 5%;font-size: 12px;width:90%;line-height:1.5;word-break:break-all;overflow : hidden;text-overflow: ellipsis;font-family:'微软雅黑';">细白焕采光面膜美容仪 | 30天再现瓷光肌【限时赠送护颜乳】</div>
						<div style="text-align: center;font-size: 12px;line-height: 20px;margin-bottom: 18px;margin-top: 10px;">￥590.00</div>
					</a>
				</div> -->
			</div>
			<div style="width:100%;height:15rem;margin-top:2rem;">
				<router-link to="/LhaGoodspageaa/Stationery">
					<img src="../../../img/bxp.png" alt="" style="width:30%;height:6rem;margin-left:1%;margin-bottom:2%;">
				</router-link>
				<router-link to="/LhaGoodspageaa/funrniture">
					<img src="../../../img/brm.png" alt="" style="width:30%;height:6rem;margin-left:2%;margin-bottom:2%;">
				</router-link>
				<router-link to="/LhaGoodspageaa/HomeFurnishing">
					<img src="../../../img/bzk.png" alt="" style="width:30%;height:6rem;margin-left:2%;margin-bottom:2%;">
				</router-link>
				<router-link to="/LhaGoodspageaa/Digital">
					<img src="../../../img/bms.png" alt="" style="width:30%;height:6rem;margin-left:1%;margin-bottom:2%;">
				</router-link>
				<router-link to="/LhaGoodspagea">
					<img src="../../../img/bzt.png" alt="" style="width:30%;height:6rem;margin-left:2%;margin-bottom:2%;">
				</router-link>
				<router-link to="/LhaGoodspageaa/Stationery">
					<img src="../../../img/bgd.png" alt="" style="width:30%;height:6rem;margin-left:2%;margin-bottom:2%;">
				</router-link>
			</div>
			<div style="text-align:center;">
				<img src="../../../img/kfdh.png" alt="" style="width:95%;">
			</div>
			<div style="text-align:center;">
				<p style="font-size:17px;margin:0;">400－897－6336</p>
				<p style="font-size:12px;color:#ccc;">工作时间：9:00--18:00</p>
			</div>
		</div>
		<div id="Tl_bottom">
			<router-link to="/">
				<img src="../../../img/fsy.png" alt="" style="width:20px;height:30px;margin-left:13.5%;">
			</router-link>
			<router-link to="/LhaGoodspagea">
				<img src="../../../img/ffl.png" alt="" style="width:22px;height:30px;margin-left:13.5%;">
			</router-link>
			<router-link to="/cart">
				<img src="../../../img/fgwc.png" alt="" style="width:35px;height:30px;margin-left:13.5%;">
			</router-link>
			<router-link to="">
				<router-link to="/login"><img src="../../../img/fdd.png" alt="" style="width:40px;height:30px;margin-left:11.5%;"></router-link>
			</router-link>
		</div>
	</div>
</template>
<style lang="scss">
$colorbg : #4fada7;
$coloreee : #eee;
$colorccc : #ccc;
$colorfff : #fff;
$color000 : #000;
$color333 : #333;
$color666 : #666;
$color999 : #999;
$colorbg : #4fada7;
$fontSize12 : 12px;
$fontSize13 : 13px;
$fontSize14 : 14px;
$fontSize15 : 15px;
$fontSize16 : 16px;
$Acolor : black;
$Spancolor : black;

#Tl_search{
	background: $colorbg;
}
#Tl_search_key{
	background: $colorfff;
}
#Tl_btn_search{
	background: $colorfff;
}

#Tl_bottom{
	background: $colorbg;
}
</style>
<script>
	import $ from 'jquery'
	import './index.css'
	export default {
		name: 'index',
		data: function(){
			return {data: [],data2: []}
		},
		created: function(){
			$.get('http://localhost/LC/lc666/reg.php', function(response){
				this.data = JSON.parse(response);
			}.bind(this))
		}
	}
</script>