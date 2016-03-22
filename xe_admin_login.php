<?php
/*
 *   ! ! W A R N I N G !!
 * This form shoud used as temporary login method.
 * DO NOT USE THIS FILE AT SERVICE. USE AT YOUR OWN RISK.
 */
// declare constants for generic use and for checking to avoid a direct call from the Web
define('__XE__', TRUE);

// require the necessary configuration files
require dirname(__FILE__) . '/config/config.inc.php';

// initialize by creating Context object
$oContext = Context::getInstance();
$oContext->init();
$oMemberController = getController('member');
$id = $_POST['user_id'];
$pw = $_POST['password'];
if(!$id || !$pw)
{
    die('ERR : ID or PW Missing');
}
$output = $oMemberController->doLogin($id,$pw,false);
if(!$output->toBool())
{
    die('Login failed');
}
echo('Login success');
