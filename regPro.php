<?php
 	session_start();
	include "include/dbconn.php";
	include "include/common.inc.php";
	header("Content-type:text/html; charset=utf-8");

	if(!empty($_POST['UserName']) && !empty($_POST['PassWord'])){
		
		if(!empty($_POST['UserName']))
		$username = $_POST['UserName'];
		if(!empty($_POST['PassWord']))
		$password = $_POST['PassWord'];
		
    $userid = '0';
    //判断该注册的用户名是否存在
	$sql = "select user_id from tb_user where user_name='{$username}';";
	//插入语句
    if($res = mysqli_query($link,$sql)){
    	$num=mysqli_num_rows($res);
		if($num<1){
			//不存在该用户,则注册新账号
			$sql = "insert into `tb_user` (`user_name`,`user_pwd`) values('{$username}','{$password}');";
			if($res = mysqli_query($link,$sql)){
				//注册成功
				$result=1;
				if( empty($_SESSION['UserName'])){
					$_SESSION['UserName']) = $username;
				}
				$userid = getResFromTable("user_id","user_name",$username,"tb_user");
			}else{
				//注册失败，插入语句执行失败
				$result=2;
			}
		}else{
			//查找该用户成功，则注册失败
  			 $result=3;
		}
	
 	}else{//end $res
 		//查询语句出错
 		$result = 4;
 	}
		
		echo($result);
	}else{
		echo "you go wrong!";
	}
	


?>
