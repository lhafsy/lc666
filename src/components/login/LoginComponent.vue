<template>
	<div style="width:100%;margin-top:1.25rem;">
		<div><router-link to="/">主页</router-link></div> 
		<div class="top clear" >
			<span class="active">用户登录</span>
			<!--<span>验证码快捷登录</span>-->
		</div>
		<div class="main">
		    <div class="loginMsg selected">
		        <div class="input_area border">
				<input type="text" id="pwd_tel" placeholder="请输入手机号码" name="mobile_phone_no" ng-model="name">
				</div>
				<div class="input_area border">
				    <input name="password" id="pwd_pwd" type="password" placeholder="请输入密码" ng-model="psw">
				</div>
				<div class="input_area">
					<input name="pic_verify_num" class="short_input" id="short_input" type="text" placeholder="请输入右边的验证码">
					<span class="checkNum">6666</span>
					<span></span>
				</div>
				<div class="login"><input type="button" value="立即登录" class="loginBtn" id="loginBtn" ng-click="Btn()"></div>
				<div class="link">
				    <a href="register.html" id="loginBtn">立即注册</a>
				    <a href="#">忘记密码</a>
				</div>
		    	
		    </div>
		    <div  class="loginMsg">
		        <div class="input_area border">
					<input type="text" id="name" placeholder="请输入手机号码" name="mobile_phone_no">
					<a href="#">发送验证码</a>
				</div>
				<div class="input_area border">
				    <input name="password" id="pwd_pwd" type="text" placeholder="请输入短信中的验证码">
				</div>
				<div class="input_area">
					<input name="pic_verify_num" class="short_input" type="text" placeholder="请输入右边的验证码">
					<span class="checkNum">1111</span>
					<span></span>
				</div>
				<div class="login"><input type="button" value="验证并登录" class="loginBtn"></div>
				<div class="link">
				    <a href="register.html">立即注册</a>
				    <a href="#">忘记密码</a>
				</div>
		    	
		    </div>
			
		</div>
	</div>
</template>

<script type="text/javascript">
	import './LoginComponent.css'

	export default {
		name: 'login',
		
	}
</script>

<style lang="scss">
	.loginContent{
		width: 400px;
		margin: auto;
	}
</style>