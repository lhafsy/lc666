<template>
	<div style="width:100%;margin-top:3rem;">
		<div class="lgy_commonTop">
			<router-link to="/" class="lgy_logincss">主页</router-link>
		</div>
		<div class="top clear" >
			<span class="active">用户登录</span>
			<!--<span>验证码快捷登录</span>-->
		</div>
		<div class="main">
		    <div class="loginMsg selected">
		        <div class="input_area border">
				<input type="text" id="pwd_tel" placeholder="请输入手机号码" v-model='username'>
				</div>
				<div class="input_area border">
				    <input  v-model='password' id="pwd_pwd" type="password" placeholder="请输入密码">
				</div>
				<div class="input_area">
					<input name="pic_verify_num" class="short_input" id="short_input" type="text" placeholder="请输入右边的验证码">
					<span class="checkNum">6666</span>
					<span></span>
				</div>
				<div class="login"><input type="button" value="立即登录" class="loginBtn" @click="login"></div>
				<div class="link" style="margin-top:2rem">
				    <router-link to="/register"><a href="">立即注册</a></router-link>
				    <a href="#">忘记密码</a>
				</div>
		    </div>
		</div>
	</div>
</template>

<script type="text/javascript">
	import './LoginComponent.css'
	import $ from 'jQuery'

	export default {
		name: 'login',
        data:function(){
            return{
                username:this.username,
                password:this.password
            }
        },
        methods:{
            login:function(){
                var obj = {};
                obj.username = this.username || '';
                obj.password = this.password || '';


                if(obj.username == '' || obj.password == ''){
                	alert('格式不对')
                }else{

	               $.ajax({
						url: 'http://localhost/LC/lc666/src/php/login.php',
						type: 'POST',
						data: {username: obj.username,password:obj.password},
						success:function(response){
							
							console.log(response);
							if(response == 'login succeed'){
								console.log(666);
								location.href='http://localhost:8080/'+'?name='+obj.username
							}
							


						}
					})
                }

            }
        }
	}
</script>

<style lang="scss">
	.loginContent{
		width: 400px;
		margin: auto;
	}
</style>