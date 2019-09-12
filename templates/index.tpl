<!DOCTYPE html>
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
<div class="center"><h1>{$lang.top}</h1></div>
<div class="right white" id="lang">{$lang.change_lang}<a href="?lang=pl"><img src="gfx/pl.gif" alt="PL" /></a><a href="?lang=eng"><img src="gfx/eng.gif" alt="ENG" /></a></div>
<br class="clear" />
<div class="left box">
<div class="box_top"></div>
<div class="right box_img"><img src="gfx/info.png" alt=""  /></div>
<div class="box_header">{$lang.info}</div>
<div class="box_content">
<br/> 
<p>{$lang.left_1}</p>
<p><b>{$lang.packages}</b></p>
 <ul>
            <li>Apache <span class="red">2.2.26</span></li>
            <li>PHP <span class="red">{$php_version}</span></li>
            <li>Mysql <span class="red">5.5.34</span></li>
			<li>Smarty <span class="red">{$smarty.version}</span></li>		
            <li>SQLite <span class="red">3.8.1</span></li>			
            <li>PhpMyAdmin <span class="red">4.0.9</span></li>
            <li>SQLiteManager <span class="red">1.2.4</span></li>
            <li>Xdebug <span class="red">2.2.3</span></li>
</ul>
<p><b>{$lang.php_ext}</b><br/><br/>{$extensions}</p>
<p><b>{$lang.mysql_ps}</b></p>
{if $password_status}
<div id="mysql_green">{$lang.mysql_green}</div>
{else}
<div id="mysql_red">{$lang.mysql_red}</div>
{/if}
</div>
</div>
<div class="right box">
<div class="box_top"></div>
<div class="right box_img"><img src="/gfx/tools.jpg" alt=""  /></div>
<div class="box_header">{$lang.tools}</div>
<div class="box_content">
<div class="center">
<br/>
<p>
<!-- {$lang.local_tools}  --> 
            <a class="btn btn_t" href="/phpmyadmin">PhpMyAdmin</a>
            <a class="btn btn_b" href="/sqlite">SQLiteManager</a>
<!-- {$lang.misc}>  --> <br/>
            <a class="btn btn_t" href="inc/phpinfo.php">{$lang.view_phpinfo}</a>
            <a class="btn btn_c" href="inc/extensions.php">{$lang.view_extensions}</a>
			<a class="btn btn_b" href="server-info">{$lang.apache_info}</a>
<!-- {$lang.links}  --> <br/>
            <a class="btn btn_t" href="http://vertrigo.sf.net">{$lang.homepage}</a>
			<a class="btn btn_b" href="http://vertrigo.sf.net/forum">VertrigoServ Forum</a>
<!-- {$lang.manuals} --> <br/>
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
</html>