<?php
header("Access-Control-Allow-Origin: http://localhost:8080");
//获取购物车商品

    class Goods{
        public $cartid;
        public $gid;
        public $uid;
        public $num;
    }

    //得到userid
    // $userid = $_GET["userid"];

    //连接数据库
    $conn = new mysqli("127.0.0.1", "root", "", "shijianfeishi") or die("connect error");
    $conn->query("set names utf8"); //设置编码为utf8
    $sql = "select * from carts";
    // select * from 主表 inner join 2表 on 主表.zwid=2表.id inner join 3表 on 主表.XX=3表.id where 主表.id=$id
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $arr = array();
        while($row = $result->fetch_assoc()){
            $goods = new Goods();
            $goods->num = $row["num"];
           
            array_push($arr, $goods);
        }

        //返回json字符串
       $str = json_encode($arr);
        print_r( $str );
    }
    else {
        echo "[]";
    }


?>