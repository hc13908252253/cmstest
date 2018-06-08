<meta charset="utf-8">
<?php
//setcookie('city', '北京市'); 		           //未指定过期时间，在会话结束时过期
//setcookie('city', '北京市', time()+1800); 	           //半小时后过期
//setcookie('city', '北京市', time()+60*60*24);         //一天后过期
setcookie('city', '', time()-1); 	  	           //立即过期（删除COOKIE）
//判断Cookie中是否存在city数据
if(isset($_COOKIE['city'])){
      $city = $_COOKIE['city'];  //从COOKIE中获取City数据
	  echo $city;
}else{
      echo "Cookie中的city不存在";
}


?>