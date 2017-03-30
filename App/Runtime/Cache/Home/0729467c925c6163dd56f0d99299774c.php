<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>修改</title>
	<FORM	method="post"	acction="/Tp323/index.php/home/form/edit/">
		标题:<INPUt type="text" name="title"	value="<?php echo ($vo["title"]); ?>"<br/>
		内容:<TEXTAREA name="content" rows="5" cols="45"><?php echo ($vo["content"]); ?></TEXTAREA><br/>
	<input type="hidden" name="id"	value="<?php echo ($vo["id"]); ?>">
	<input type="submit" value="提交">
	</FORM>
</head>
<body>

</body>
</html>