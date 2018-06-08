<?php
//致使错误，输出错误信息并停止运行
/**
 * @param $msg
 * @param string $debug
 */
function E($msg, $debug=''){
	$msg.=APP_DEBUG?$debug:'';
	exit('<pre>'.htmlspecialchars($msg).'</pre>');
}

/**
 * @param $name
 * @return string
 */
function C($name){
	static $config=null;
	if(!$config){
		$config=require(COMMON_PATH.'config.php');
	}
	return isset($config[$name]) ? $config[$name] : '';
}
/**
 * 接收变量，并进行过滤
 * @param string $var 变量名
 * @param array|string $method 待过滤的数组，或表示超全局变量的字符串
 * @param string $type 过滤类型
 * @param mixed $def 默认值
 * @return 过滤后的结果
 */
function I($var, $method='post', $type='html', $def=''){
	switch($method){
		case 'get':    $method = $_GET;    break;
		case 'post':   $method = $_POST;   break;
		case 'server': $method = $_SERVER; break;
		case 'cookie': $method = $_COOKIE; break;
	}
	$value = isset($method[$var]) ? $method[$var] : $def;
	switch($type){
		case 'string': //字符串 不进行过滤
			$value = is_string($value) ? $value : '';
		break;
		case 'html': //字符串 进行HTML转义
			$value = is_string($value) ? toHTML($value) : '';
		break;
		case 'int': //整数
			$value = (int)$value;
		break;
		case 'id': //无符号整数
			$value = max((int)$value, 0);
		break;
		case 'page': //页码
			$value = max((int)$value, 1);
		break;
		case 'float': //浮点数
			$value = (float)$value;
		break;
		case 'bool': //布尔型
			$value = (bool)$value;
		break;
		case 'array': //数组型
			$value = is_array($value) ? $value : [];
		break;
	}
	return $value;
}
//字符串转HTML
/**
 * @param $str
 * @return mixed
 */
function toHTML($str){
	$str = trim(htmlspecialchars($str, ENT_QUOTES));
	return str_replace(' ', '&nbsp;', $str);
}

/**
 * @param $url
 */
function  redirect($url){
    header("Location:$url");
    exit;
};
/**
 * @param null $msg
 * @return string
 */
function tips($msg=null){
    if(!$msg){
        return '';
    }
    return $msg[0]?"<div>$msg[1]</div>":"<div class=\"error\"'>$msg[1]</div>";
}

/**
 * @param $password
 * @param $salt
 * @return string
 */
function password($password, $salt){
    return md5(md5($password).$salt);
}
?>