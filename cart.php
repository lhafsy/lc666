<?php
    header("Access-Control-Allow-Origin: http://localhost:8080");
//定义需要获取数据库的数据
    class Goods{
        public $cartid;
        public $cartnum;
        public $cartmsg;
        public $cartprice;
        public $cartimg;
    }

    //连接数据库
    // $conn = new mysqli("127.0.0.1","root","","shijianfeishi") or die("连接失败!");
        require 'mysql666.php';
    $conn->query("set names utf8"); //设置编码为utf8

   
    // $sql = "select * from carts inner join goods on carts.gid=goods.index_id ";
    // select * from 主表 inner join 2表 on 主表.zwid=2表.id inner join 3表 on 主表.XX=3表.id where 主表.id=$id
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

    //        echo $row["goodsname"];
            // if($row["cartid"] == "")
            array_push($arr, $goods);

        }
            // echo(111);

        //返回json字符串
        echo json_encode($arr);
        // printf(json_encode($arr));
    }
    else {
        // print("null");
        // echo "666"
    }

    $conn->close();

?>






