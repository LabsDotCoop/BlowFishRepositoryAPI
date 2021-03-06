<?php
/**
 * Chronolabs REST Blowfish Salts Repository API
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Chronolabs Cooperative http://labs.coop
 * @license         General Public License version 3 (http://labs.coop/briefs/legal/general-public-licence/13,3.html)
 * @package         salty
 * @since           2.0.1
 * @author          Simon Roberts <wishcraft@users.sourceforge.net>
 * @version         $Id: index.php 1000 2015-06-16 23:11:55Z wishcraft $
 * @subpackage		api
 * @description		Blowfish Salts Repository API
 * @link			http://cipher.labs.coop
 * @link			http://sourceoforge.net/projects/chronolabsapis
 */

	$parts = explode(".", microtime(true));
	mt_srand(mt_rand(-microtime(true), microtime(true))/$parts[1]);
	mt_srand(mt_rand(-microtime(true), microtime(true))/$parts[1]);
	mt_srand(mt_rand(-microtime(true), microtime(true))/$parts[1]);
	mt_srand(mt_rand(-microtime(true), microtime(true))/$parts[1]);
	$salter = ((float)(mt_rand(0,1)==1?'':'-').$parts[1].'.'.$parts[0]) / sqrt((float)$parts[1].'.'.intval(cosh($parts[0])))*tanh($parts[1]) * mt_rand(1, intval($parts[0] / $parts[1]));
	header('Context-salting: '. $salter);

	define('MAXIMUM_QUERIES', 11);
	ini_set('memory_limit', '64M');
	
	require_once __DIR__ . DIRECTORY_SEPARATOR . 'apiconfig.php';
	
	/**
	 * URI Path Finding of API URL Source Locality
	 */
	$source = (isset($_SERVER['HTTPS'])?'https://':'http://').strtolower($_SERVER['HTTP_HOST']).API_URL_BASE_PATH;
	
	/**
	 * Display Help if Function Variables Are Wrong
	 */
	if (checkDisplayHelp('ping')) {
		if (function_exists("http_response_code"))
			http_response_code(301);
		header("Location: $source");
		exit;
	}
	if (function_exists("http_response_code"))
		http_response_code(200);
	
	extract($_POST);
	die(getURIData($uri, array('time'=>$time, 'zone'=>$zone, 'from'=>$source)));
?>