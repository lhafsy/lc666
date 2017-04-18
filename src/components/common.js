// 判断滚动条
$(document).ready(function () {
    $(window).scroll(function () {
        var scrollTop = $(document).scrollTop(); //htm文档滚动对象距离顶部位置
        if(scrollTop > 100){
            $("#runTop").css("display","block");
        }else{
            $("#runTop").css("display","none");
        }
    })
})
$(function(){
    $('#runTop').click(function(){
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
        return false;
    });
    
        //登录方式切换
    $(".checkNum").html(parseInt(Math.random()*10000));
	$(".top span").click(function(){
		console.log(11)
	    var $this = $(this),
	        index = $this.index();
	    $this.addClass("active").siblings("span").removeClass("active");
		$(".checkNum").html(parseInt(Math.random()*10000));
	    $(".main .loginMsg").eq(index).addClass("selected").siblings("div").removeClass("selected");
	});
//	验证码切换
	$(".checkNum").click(function(){
		$(".checkNum").html(parseInt(Math.random()*10000));
	})
})

// cookie方法
function setCookie(key, value, t) {
    var oDate = new Date();
    oDate.setDate( oDate.getDate() + t );
    document.cookie = key + '=' + value + ';expires=' + oDate.toGMTString();
}

function getCookie(key) {
    var arr1 = document.cookie.split('; ');
    for (var i=0; i<arr1.length; i++) {
        var arr2 = arr1[i].split('=');
        if ( arr2[0] == key ) {
            return decodeURI(arr2[1]);
        }
    } 
}

function removeCookie(key) {
    setCookie(key, '', -1);
}