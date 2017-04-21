<?php
header("Access-Control-Allow-Origin: http://localhost:8080"); 
 class Goods{
        public $goodsId;
        public $goodsName;
        public $goodsPrice;
        public $goodsImg;
        public $goodsnum;
    }
    $id  = $_POST['id'];
    // $conn = new mysqli("127.0.0.1", "root", "", "shijianfeishi") or die("connect error");
    require '../mysql666.php';
    $conn->query("set names utf8");
    

    $sql = "delete from carts where gid = '".$id."'";
    $result = $conn->query($sql);
    $sql1 = "select * from carts";
    $resultq = $conn->query($sql1);
     if($resultq->num_rows > 0){
        $arr = array();
        while($row = $result->fetch_assoc()){
            $goods = new Goods();
            $goods->goodsId = $row["index_id"];
            $goods->goodsName = $row["name"];
            $goods->goodsPrice = $row["price"];
            $goods->goodsImg = $row["img"];
           
            array_push($arr, $goods);
        }

        //返回json字符串
       $str = json_encode($arr);
        print_r( $str );
    }
    else {
        echo "[]";
    }





     $conn->close();





?>