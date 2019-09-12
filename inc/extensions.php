<html>
<head>
<title>PHP Extensions</title>
<style>
body { background-color: white; margin-top: 0; margin-left: 20; margin-right: 20; }
table { font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin-top: 0; margin-left: 0; }
a { text-decoration: none; font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin-top: 0; margin-left: 0; }
a:active { color: #2457ff; }
a:hover { color: #2457ff; text-decoration: underline; }
a:link { color: #2457ff; }
a:visited { color: #2457ff; }
.h {background-color: #9999cc; font-weight: bold; color: #000000;}
.black { background-color: #000000; color: #ffffff; }
</style>
</head>
<body>
<br />
<table width="100%" cellspacing="0"><tr><td colspan="2"><table>
<tr><td>PHP version:</td><td><b><?php echo phpversion() ?></b></td></tr>
<tr><td>Server API:</td><td><b><?php echo @php_sapi_name()?></b></td></tr>
<tr><td>Loaded extensions:</td><td><b><?php $extensions = @get_loaded_extensions(); echo count($extensions); ?></b></td></tr>
<tr><td>System:</td><td><b><?php echo @php_uname()?></b></td></tr>
</table><br /></td></tr>
<tr class="h">
<td><b>Activated extensions:</b></td>
<td><b><?php echo (isset($_GET['ext']) && in_array($_GET['ext'], $extensions)) ? $_GET['ext'] : '' ?> function list:</b></td>
</tr>
<tr><td valign="top" width="50%"><table width="100%">
<?php
    @sort($extensions);
    foreach ($extensions as $extension) {
        echo '<tr><td width="30%">' . $extension . '</td><td><a href="?ext=' . $extension . '">function list</a></td></tr>';
    }
?>
</table></td><td valign="top" width="50%"><table>
<?php
    if (isset($_GET['ext'])) {
        $functions = @get_extension_funcs($_GET['ext']);
        if (is_array($functions)) {
            sort($functions);
            foreach ($functions as $function) {
                echo "<tr><td><a href=\"http://www.php.net/manual/function." . str_replace('_', '-', $function) . ".php\" target=\"_blank\">$function</a></td></tr>\n";
            }
        }
    }
?>
</table></td></tr></table></body></html>
