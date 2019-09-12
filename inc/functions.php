<?php
function set_lang()
{
if (isset ($_GET['lang']) AND (($_GET['lang']=='eng') OR ($_GET['lang']=='pl'))) return( $_GET['lang']);
elseif (preg_match("/^pl/", $_SERVER['HTTP_ACCEPT_LANGUAGE'])) return 'pl';
else  return 'eng';
}
?>