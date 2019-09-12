<?php /* Smarty version Smarty-3.1.15, created on 2019-09-11 22:20:15
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58615d79731f11f832-19518982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1385336252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58615d79731f11f832-19518982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'php_version' => 0,
    'extensions' => 0,
    'password_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5d79731fc6e366_23492122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d79731fc6e366_23492122')) {function content_5d79731fc6e366_23492122($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Dariusz Handzlik" />
<meta name="robots" content="index,follow,all" />
<meta name="description" content="VertrigoServ" />
<meta name="keywords" content="Apache, MySQL, PHP, PHP5, Phpmyadmin, Zend Optimizer, SQLiteManager, Professional, Windows, Server, Secure, HTTP, WAMP, XHTML, CSS, Installation, Simple, Freeware" />
<title>VertrigoServ</title>
<link rel="stylesheet" type="text/css" href="inc/style.css" title="Main" media="screen" />
</head>
<body>
<div>
<div class="center"><h1><?php echo $_smarty_tpl->tpl_vars['lang']->value['top'];?>
</h1></div>
<div class="right white" id="lang"><?php echo $_smarty_tpl->tpl_vars['lang']->value['change_lang'];?>
<a href="?lang=pl"><img src="gfx/pl.gif" alt="PL" /></a><a href="?lang=eng"><img src="gfx/eng.gif" alt="ENG" /></a></div>
<br class="clear" />
<div class="left box">
<div class="box_top"></div>
<div class="right box_img"><img src="gfx/info.png" alt=""  /></div>
<div class="box_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value['info'];?>
</div>
<div class="box_content">
<br/> 
<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['left_1'];?>
</p>
<p><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['packages'];?>
</b></p>
 <ul>
            <li>Apache <span class="red">2.2.26</span></li>
            <li>PHP <span class="red"><?php echo $_smarty_tpl->tpl_vars['php_version']->value;?>
</span></li>
            <li>Mysql <span class="red">5.5.34</span></li>
			<li>Smarty <span class="red"><?php echo 'Smarty-3.1.15';?>
</span></li>		
            <li>SQLite <span class="red">3.8.1</span></li>			
            <li>PhpMyAdmin <span class="red">4.0.9</span></li>
            <li>SQLiteManager <span class="red">1.2.4</span></li>
            <li>Xdebug <span class="red">2.2.3</span></li>
</ul>
<p><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['php_ext'];?>
</b><br/><br/><?php echo $_smarty_tpl->tpl_vars['extensions']->value;?>
</p>
<p><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['mysql_ps'];?>
</b></p>
<?php if ($_smarty_tpl->tpl_vars['password_status']->value) {?>
<div id="mysql_green"><?php echo $_smarty_tpl->tpl_vars['lang']->value['mysql_green'];?>
</div>
<?php } else { ?>
<div id="mysql_red"><?php echo $_smarty_tpl->tpl_vars['lang']->value['mysql_red'];?>
</div>
<?php }?>
</div>
</div>
<div class="right box">
<div class="box_top"></div>
<div class="right box_img"><img src="/gfx/tools.jpg" alt=""  /></div>
<div class="box_header"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tools'];?>
</div>
<div class="box_content">
<div class="center">
<br/>
<p>
<!-- <?php echo $_smarty_tpl->tpl_vars['lang']->value['local_tools'];?>
  --> 
            <a class="btn btn_t" href="/phpmyadmin">PhpMyAdmin</a>
            <a class="btn btn_b" href="/sqlite">SQLiteManager</a>
<!-- <?php echo $_smarty_tpl->tpl_vars['lang']->value['misc'];?>
>  --> <br/>
            <a class="btn btn_t" href="inc/phpinfo.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['view_phpinfo'];?>
</a>
            <a class="btn btn_c" href="inc/extensions.php"><?php echo $_smarty_tpl->tpl_vars['lang']->value['view_extensions'];?>
</a>
			<a class="btn btn_b" href="server-info"><?php echo $_smarty_tpl->tpl_vars['lang']->value['apache_info'];?>
</a>
<!-- <?php echo $_smarty_tpl->tpl_vars['lang']->value['links'];?>
  --> <br/>
            <a class="btn btn_t" href="http://vertrigo.sf.net"><?php echo $_smarty_tpl->tpl_vars['lang']->value['homepage'];?>
</a>
			<a class="btn btn_b" href="http://vertrigo.sf.net/forum">VertrigoServ Forum</a>
<!-- <?php echo $_smarty_tpl->tpl_vars['lang']->value['manuals'];?>
 --> <br/>
			<a class="btn btn_t" href="http://httpd.apache.org/docs/2.2/">Apache 2.2 documentation</a>
			<a class="btn btn_c" href="http://www.php.net/docs.php">PHP Manual</a>
			<a class="btn btn_c" href="http://dev.mysql.com/doc/">MySQL Manual</a>
			<a class="btn btn_c" href="http://www.phpmyadmin.net/home_page/docs.php">phpMyAdmin Manual</a>
			<a class="btn btn_c" href="http://www.smarty.net/docs.php">Smarty Manual</a>
			<a class="btn btn_b" href="http://www.sqlite.org/docs.html">SQLite Manual</a>
</p>
</div>
</div>
</div>
<div class="right" id="valid"><img src="gfx/xhtml.gif" alt="Valid XHTML" /><img src="gfx/css.gif" alt="Valid CSS" /></div>
<br class="clear"/>
<br/>
<div class="center white" id="footer">Copyright &copy; 2004-2013 by<a href="mailto:dariuszhandzlik(at)poczta.onet.pl"> Dariusz Handzlik</a></div>
<br/>
</div>
</body>
</html><?php }} ?>
