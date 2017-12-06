<?php
/*调用PHP提供的MySQL操作函数*/

#1.连接到MySQL服务器，返回值是一个resource对象
$conn = mysqli_connect('127.0.0.1','root',"","GSMH",3306);
#var_dump($conn);

#2.向MySQL服务器发送SQL语句
$sql = "INSERT INTO dept VALUES(80, 'NewDept80')";
$result = mysqli_query($conn, $sql);
#var_dump($result);

#3.查看执行结果
if($result===true){
	echo "执行成功！";
}else {
	echo "执行失败！";
}

#4.关闭连接  mysqli_close($conn);