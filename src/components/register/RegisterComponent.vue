<template>
	<div class="main" ng-app="myapp" ng-controller="mycontroller">
		<div><router-link to="/">返回</router-link></div>
	    <div class="loginMsg selected">
	        <div class="input_area border">
				<input type="text" id="name" placeholder="请输入11位手机号码" name="mobile_phone_no" ng-model="name">
				<div id="tips1"></div>
				<!--<a href="#">发送验证码</a>-->
			</div>
			<div class="input_area border">
			    <input name="password" id="pwd_pwd" type="text" placeholder="请输入右边的验证码">
			    <span class="checkNum" id="change">4112</span>
			    <div id="tips2"></div>
			</div>
			<div class="input_area">
				<input name="pic_verify_num" class="short_input" type="password" placeholder="请输入6-16位字母和数字的组合密码" id="psw" ng-model="psw">
				<span></span>
				<div id="tips3"></div>
			</div>
			<div class="input_area">
				<input name="pic_verify_num" class="short_input" type="password" placeholder="请再次输入密码" id="psw" ng-model="psw">
				<span></span>
				<div id="tips4"></div>
			</div>
			<div class="login"><input type="button" value="立即注册" class="loginBtn" id="loginBtn" ng-click="Btn()"></div>	    	
	    </div>
	</div>
</template>

<script type="text/javascript">
	import './RegisterComponent.css';
	import $ from 'jQuery';
	export default {
		name: 'register'
	}
</script>
<script>
	
// 	window.onload =function(){
// 	var btn = document.getElementById('loginBtn');
// 	var tips1 = document.getElementById('tips1');
// 	var tips2 = document.getElementById('tips2');
// 	var tips3 = document.getElementById('tips3');
// 	var tips4 = document.getElementById('tips4');
// 	var input = document.getElementsByTagName('input');
// 	var change = document.getElementById('change');
// 	var bool1,bool2,bool3,bool4,bool5,bool6;
// 	input[0].onblur = function() {
// 	    var str = this.value;
// 	    var reg = /^1(3|4|5|7|8)\d{9}$/;
// 	    if(str==cookName){
// 	    	alert("用户已经注册");
// 	    }else{
// 		    if (reg.test(str)) {
// //		    	tips1.style.color="#aaa";
// 		        tips1.innerHTML = ' ';
// 		        bool1 = true;
// 		    } else if(str==""){
// //		    	tips1.style.color="#aaa";
// 		    	tips1.innerHTML = ' ';
// 		    }else {
// 		    	tips1.style.color="red";
// 		        tips1.innerHTML = '手机号格式不对';
// 		    }
// 	    }
// 	}
// 	input[1].onblur = function() {
// 	    var str = this.value;
// 	    var yzm = change.innerHTML;
// 	    if(yzm =="" || str=="") {
// 	    	tips2.style.color="#aaa";
// 	        tips2.innerHTML = ' ';
// 	    }else if (str == yzm) {
// 	    	tips2.style.color="#aaa";
// 	        tips2.innerHTML = ' ';
// 	        bool2 = true;
// 	    }else {
// 	    	tips2.style.color="red";
// 	        tips2.innerHTML = '验证码错误';
// 	    }
// 	}
// 	input[2].onblur = function() {
// 	    var str = this.value;
// 	    var reg = /\w{6,20}$/
// 	    if (reg.test(str)) {
// 	    	tips3.style.color="#aaa";
// 	        tips3.innerHTML = ' ';
// 			bool3 = true;
// 	    }else if(str==""){
// 	    	tips3.style.color="#aaa";
// 	    	tips3.innerHTML = ' ';
// 	    } else {
// 	    	tips3.style.color="red";
// 	        tips3.innerHTML = '密码输入不合法';
// 	    }
// 	}
// 	input[3].onblur = function() {
// 		if(this.value==""){
// 	    	tips4.style.color="#aaa";
// 	    	tips4.innerHTML = ' ';
// 	    }else if (this.value == input[2].value) {
// 	    	tips4.style.color="#aaa";
// 	        tips4.innerHTML = ' ';
// 	        bool4 = true;
// 	    }else  {
// 	    	tips4.style.color="red";
// 	        tips4.innerHTML = '确认密码不一致';
// 	    }
// 	}
// 	btn.onclick  = function(){
// 		if(bool1&&bool2&&bool3&&bool4){
// 			var name = input[0].value;
// 			var psw = input[2].value;
// 			var strCookie = getCookie('user');
// 			var d = new Date();
// 			d.setDate( d.getDate()+7 )
// 			document.cookie = 'name='+name+';expires='+d+';path=/';
// 			document.cookie = 'psw='+psw+';expires='+d+';path=/';
// 			alert("注册成功");
// 	 	}
//  	}
// }

</script>
<style lang="scss">
	
</style>
