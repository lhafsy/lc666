<template>
	<div class="main" ng-app="myapp" ng-controller="mycontroller">
		<div class="lgy_commonTop">
			<router-link to="/" class="lgy_logincss">主页</router-link>
			<!-- <router-link to="/register" class="lgy_logincss">注册</router-link>
			<router-link to="/login" class="lgy_logincss">登录</router-link> -->
		</div>
	    <div class="loginMsg selected" style="margin-top:3rem">
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
<style lang="scss">
	
</style>
