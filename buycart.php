<?php
    header("Access-Control-Allow-Origin: http://localhost:8080");
    //定义需要获取数据库的数据
    $cartid = $_POST["cartid"];
    $cartnum = $_POST["cartnum"];
    $cartmsg = $_POST["cartmsg"];
    $cartprice = $_POST["cartprice"];
    $cartimg = $_POST["cartimg"];
    // echo 1111;
    class Goods{
        public $cartid;
        public $cartnum;
        public $cartmsg;
        public $cartprice;
        public $cartimg;
    }

    // var data1 = file_get_contents("php://input");
    // console.log(data1)
    //连接数据库

    $conn = new mysqli("127.0.0.1","root","","shijianfeishi") or die("连接失败!");

    $conn->query("set names utf8"); //设置编码为utf8

    $sql = "select * from cart";

    $sql = "insert into cart (cartid,cartnum,cartmsg,cartprice,cartimg) values ('99','$cartnum','$cartmsg','1','1')";

    $result = $conn->query($sql);//执行数据库命令返回数据
    if($result->num_rows > 0){//$result->num_rows == 返回的数据
        $arr = array();
        while($row = $result->fetch_assoc()){//循环整个数据每次拿出一条
            $goods = new Goods();
            $goods->cartid = $row["cartid"];
            $goods->cartnum = $row["cartnum"];
            $goods->cartmsg = $row["cartmsg"];
            $goods->cartprice = $row["cartprice"];
            $goods->cartimg = $row["cartimg"];

           // echo $row["cartnum"];
            array_push($arr, $goods);
            // if($cartid != $row["cartid"]){
            //     $sql = "insert into cart (cartid,cartnum,cartmsg,cartprice,cartimg) values ('100','$cartnum','$cartmsg','1','1')";
            // }
        }

        //返回json字符串
        echo json_encode($arr);
    }
    else {
        echo "none";
    }

    $conn->close();

?>






