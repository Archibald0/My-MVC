<?php

//---- sans Smarty
// require VIEWS.DS.'header.php';
// require VIEWS.DS.$destination.'.php';
// require VIEWS.DS.'footer.php';


//---- avec Smarty
$oSmarty = new Smarty_ns();
$oSmarty->display('header.tpl');
require VIEWS.DS.$destination.'.php';

if (isset($data)) {
    $oSmarty->assign(array('datas' => $data));
}

if ($oSmarty->templateExists($destination.'.php')) {
    $oSmarty->display($destination.'.php');
}

$oSmarty->display('footer.tpl');
