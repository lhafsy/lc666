<?php


    header("Access-Control-Allow-Origin: http://localhost:8080");
     if(!empty($_POST['cartid'])){
        //获取客户端发送过来的参数
        $cartid = $_POST["id"]; //从客户端获取的用户名
        $name = $_POST["name"]; //从客户端获取的密码
        $numAdd = $_POST["num"];
        $numMin = $_POST["numMin"];

       
        //将要注册的用户信息插入到数据库中

        // $conn = new mysqli("127.0.0.1", "root","","shijianfeishi") or die("连接失败!");
        require '../../mysql666.php';

        // $conn->query("set names utf8"); //设置编码为utf8

        $isExist = false; //是否已经存在相同用户名
        //查询数据, 检测是否已经存在该用户
        $sql1 = "select * from carts ";
        $result = $conn->query($sql1);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                if($row["gid"] == $cartid){
                  
                   $sql3 = "UPDATE carts SET num=num+1 where  gid = '".$cartid."'" ;
                   $conn->query( $sql3);

                   $isExist = true;

                  
                };
                if($row["num"] == $numAdd ){
                   echo  111;
                   $sql4 = "UPDATE carts SET num=num+1 where  gid = '".$cartid."'" ;
                   $conn->query( $sql4);

                   $isExist = true;

                  
                };
                

            }
        }else {
            // echo "没有用户数据";
        };
       

        //检测到不存在该用户
        if(!$isExist) {
          

            //插入数据
            $sql2 = "insert into carts (gid,uid,num) values( '".$cartid."','".$name."','".$numAdd."')";
            if ($conn->query($sql2)) {
               
                echo "success";
                // echo $numAdd;
            } else {
                echo "register fail";
            }
        }

        $conn->close(); //关闭数据库
    }

  


?>