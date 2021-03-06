<?php
/* Smarty version 3.1.30, created on 2017-04-22 14:59:09
  from "/var/www/html/app/view/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58fb6fbdb5be77_51747225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48ecc9ff2c47f30606576ab67ce0833434650cdd' => 
    array (
      0 => '/var/www/html/app/view/login.tpl',
      1 => 1491545545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58fb6fbdb5be77_51747225 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录到系统</title>
	<link rel="stylesheet" href="<?php echo getRootDir(array(),$_smarty_tpl);?>
/public/css/basic.css">
	<link rel="stylesheet" href="<?php echo getRootDir(array(),$_smarty_tpl);?>
/public/css/login.css">
</head>
<body>
	<form action="<?php echo makeUrl('Index','login');?>
" method="post" id="login">
		<fieldset>
			<legend>登录</legend>
			<label for="username">用户名 : <input type="text" name="username" id="username"> (2-20位)</label>
			<label for="password">密　码 : <input type="password" name="password" id="password"> (至少5位)</label>
			<label for="stu" style="display: inline;">身　份 : <input type="radio" name="type" value="0" checked="checked" id="stu">学生 </label><label for="admin" style="display: inline;"><input type="radio" name="type" value="1" id="admin"> 管理员</label><br>
			<input type="submit" value="登录" name="submit" class="submit" id="submit"><p>没有账号?<a href="<?php echo makeUrl('Index','signup');?>
">注册一个</a></p>
		</fieldset>
	</form>
</body>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo getRootDir(array(),$_smarty_tpl);?>
/public/js/login.js"><?php echo '</script'; ?>
>
</html><?php }
}
