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
 * @version         $Id: manager.php 1000 2015-06-16 23:11:55Z wishcraft $
 * @subpackage		help-html
 * @description		Blowfish Salts Repository API
 * @link			http://cipher.labs.coop
 * @link			http://sourceoforge.net/projects/chronolabsapis
 */


if (strlen($theip = whitelistGetIP(true))==0)
	$theip = "127.0.0.1";

$data = '';
for($t=mt_rand(0, 10); $t<mt_rand(22,45); $t++)
	while(mt_rand(0,45)<= 39)
		$data .= chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("Z"))) . chr(mt_rand(ord("A"),ord("Z"))) . chr(mt_rand(ord("a"),ord("z"))) . chr(mt_rand(ord("!"),ord("="))) . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z")))  . chr(mt_rand(ord("a"),ord("z"))) ;

global $domain, $protocol, $business, $entity, $contact, $referee, $peerings, $source;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php 	$servicename = "Blowfish Salts Repository"; 
		$servicecode = "BSR"; ?>
	<meta property="og:url" content="<?php echo (isset($_SERVER["HTTPS"])?"https://":"http://").$_SERVER["HTTP_HOST"]; ?>" />
	<meta property="og:site_name" content="<?php echo $servicename; ?> Open Services API's (With Source-code)"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="rating" content="general" />
	<meta http-equiv="author" content="wishcraft@users.sourceforge.net" />
	<meta http-equiv="copyright" content="Chronolabs Cooperative &copy; <?php echo date("Y")-1; ?>-<?php echo date("Y")+1; ?>" />
	<meta http-equiv="generator" content="wishcraft@users.sourceforge.net" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="//labs.partnerconsole.net/execute2/external/reseller-logo">
	<link rel="icon" href="//labs.partnerconsole.net/execute2/external/reseller-logo">
	<link rel="apple-touch-icon" href="//labs.partnerconsole.net/execute2/external/reseller-logo">
	<meta property="og:image" content="//labs.partnerconsole.net/execute2/external/reseller-logo"/>
	<link rel="stylesheet" href="/style.css" type="text/css" />
	<link rel="stylesheet" href="//css.ringwould.com.au/3/gradientee/stylesheet.css" type="text/css" />
	<link rel="stylesheet" href="//css.ringwould.com.au/3/shadowing/styleheet.css" type="text/css" />
	<title><?php echo $servicename; ?> (<?php echo $servicecode; ?>) Open API || Chronolabs Cooperative (Sydney, Australia)</title>
	<meta property="og:title" content="<?php echo $servicecode; ?> API"/>
	<meta property="og:type" content="<?php echo strtolower($servicecode); ?>-api"/>
	<!-- AddThis Smart Layers BEGIN -->
	<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50f9a1c208996c1d"></script>
	<script type="text/javascript">
	  addthis.layers({
		'theme' : 'transparent',
		'share' : {
		  'position' : 'right',
		  'numPreferredServices' : 6
		}, 
		'follow' : {
		  'services' : [
			{'service': 'twitter', 'id': 'ChronolabsCoop'},
			{'service': 'twitter', 'id': 'Cipherhouse'},
			{'service': 'twitter', 'id': 'OpenRend'},
			{'service': 'facebook', 'id': 'Chronolabs'},
			{'service': 'linkedin', 'id': 'founderandprinciple'},
			{'service': 'google_follow', 'id': '105256588269767640343'},
			{'service': 'google_follow', 'id': '116789643858806436996'}
		  ]
		},  
		'whatsnext' : {},  
		'recommended' : {
		  'title': 'Recommended for you:'
		} 
	  });
	</script>
	<!-- AddThis Smart Layers END -->

</head>
<body>
<div class="main">
 	<?php if (!empty($GLOBALS['errors']) > 0) { ?>
 	<div id="error" class="error">
    	<h2 style="color: rgb(250,10,20);">Validation(s) Errors have Occured with the API Function called now Executed!</h2>
    	<ol style="color: rgb(250,10,20); font-family: "Api Code Examples", "Courier New", Courier, monospace !important; text-align: center; font-weight: bold; font-size: 129%;"><li><?php echo implode("<li></li>", $GLOBALS['errors']); ?></li></ol>
    </div>
    <?php } ?>
    <h1><?php echo $servicename; ?> (<?php echo $servicecode; ?>) Open API || Chronolabs Cooperative (Sydney, Australia)</h1>
    <p>This is an API Service for creating Blowfish Salts Repository entries in case you loose your blowfish salt on sites and have encryption layers unaccessable or corrupted results without the correct salt!</p>
    <h2>Code API Documentation</h2>
    <p>You can find the phpDocumentor code API documentation at the following path :: <a target="_blank" href="<?php echo $source; ?>docs/" target="_blank"><?php echo $source; ?>docs/</a>. These should outline the source code core functions and classes for the API to function!</p>
    <h2>API Services' Peers</h2>
    <p>This is the services the key is dupicated on when lodged for a multiple recover points and options!</p>
    <blockquote>
    	<ol>
    		<?php foreach($peerings as $domain => $peer) { 
    				if (!strpos($domain, $source)) {
    					?>				<li><a href="mailto:<?php echo $peer['contact']; ?>" target="_blank"><?php echo $peer['business']; ?></a> ~~ <a href="<?php echo $peer['protocol'] . $peer['domain']; ?>" target="_blank"><?php echo $peer['protocol'] . $peer['domain']; ?></a><?php if ($peer['ping']>1.0001) { ?> --- <em>ping <?php echo $peer['ping']; ?>ms</em><?php } else { ?> -- Unabled to Ping! <?php } ?></li>
    					
			<?php }	}?>
    	</ol>
    </blockquote>
    <h2>SEARCH Document Output</h2>
    <p>This is done with the <em>search.api</em> extension at the end of the url.</p>
    <blockquote>
		<form action="<?php echo $source; ?>v2/search.api" method="post">
			<label for="response-json">Response formated JSON&nbsp</label><input type="radio" name="response" id="response-json" value="json" checked="checked"/>
			<label for="response-serial">Response formated PHP Serialisation&nbsp</label><input type="radio" name="response" id="response-serial" value="serial"/>
			<label for="response-xml">Response formated XML&nbsp</label><input type="radio" name="response" id="response-xml" value="xml"/><br/>
			<label for="radio-email">Search for Email&nbsp</label><input type="radio" name="method" id="radio-email" value="email"/>
			<label for="radio-uri">Search for URI&nbsp</label><input type="radio" name="method" id="radio-uri" value="uri"/><br/>
			<label for="name">Value Sort For:&nbsp</label><input type="text" name="query" id="query" size="26"/><br/>
			<label for="peers">Also do Search on Peers:&nbsp</label><input type="checkbox" name="peers" id="peers" value="peers"/><br/>
			<input type="submit" id="submit" Value="Search Lodgement" />
		</form>
		Example of Form:-
		<pre>
	&lt;form action=&quot;<?php echo $source; ?>v2/search.api&quot; method=&quot;post&quot;&gt;
		&lt;label for=&quot;response-json&quot;&gt;Response formated JSON&nbsp&lt;/label&gt;&lt;input type=&quot;radio&quot; name=&quot;response&quot; id=&quot;response-json&quot; value=&quot;json&quot; checked=&quot;checked&quot;/&gt;
		&lt;label for=&quot;response-serial&quot;&gt;Response formated PHP Serialisation&nbsp&lt;/label&gt;&lt;input type=&quot;radio&quot; name=&quot;response&quot; id=&quot;response-serial&quot; value=&quot;serial&quot;/&gt;
		&lt;label for=&quot;response-xml&quot;&gt;Response formated XML&nbsp&lt;/label&gt;&lt;input type=&quot;radio&quot; name=&quot;response&quot; id=&quot;response-xml&quot; value=&quot;xml&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;radio-email&quot;&gt;Search for Email&nbsp&lt;/label&gt;&lt;input type=&quot;radio&quot; name=&quot;method&quot; id=&quot;radio-email&quot; value=&quot;email&quot;/&gt;
		&lt;label for=&quot;radio-uri&quot;&gt;Search for URI&nbsp&lt;/label&gt;&lt;input type=&quot;radio&quot; name=&quot;method&quot; id=&quot;radio-uri&quot; value=&quot;uri&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;name&quot;&gt;Value Sort For:&nbsp&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;query&quot; id=&quot;query&quot; size=&quot;26&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;peers&quot;&gt;Search include on Peers&nbsp&lt;/label&gt;&lt;input type=&quot;checkbox&quot; name=&quot;peers&quot; id=&quot;peers&quot; value=&quot;peers&quot;/&gt;&lt;br/&gt;
		&lt;input type=&quot;submit&quot; id=&quot;submit&quot; Value=&quot;Search Lodgement&quot; /&gt;
	&lt;/form&gt;
		</pre>
    </blockquote>
    <h2>LODGE Document Output</h2>
    <p>This is done with the <em>lodge.api</em> extension at the end of the url.</p>
    <blockquote>
		<form action="<?php echo $source; ?>v2/lodge.api" method="post">
			<label for="response-json">Response formated JSON&nbsp</label><input type="radio" name="response" id="response-json" value="json" checked="checked"/>
			<label for="response-serial">Response formated PHP Serialisation&nbsp</label><input type="radio" name="response" id="response-serial" value="serial"/>
			<label for="response-xml">Response formated XML&nbsp</label><input type="radio" name="response" id="response-xml" value="xml"/><br/>
			<label for="email">Email Address:&nbsp</label><input type="text" name="email" id="email" maxlen="198" size="26"/><br/>
			<label for="name">Email Naming:&nbsp</label><input type="text" name="name" id="name" maxlen="198" size="26"/><br/>
			<label for="pin">4 - 12 Digit Only Pin:&nbsp</label><input type="text" name="pin" id="pin" maxlen="12" size="13"/><br/>
			<label for="uri">Site Root Path:&nbsp</label><input type="text" name="uri" id="uri" maxlen="12" size="13" value="<?php echo $source; ?>"/><br/>
			<label for="salt">Encryption Salt:&nbsp</label><textarea name="salt" id="salt" rows="9" cols="55"><?php echo $data; ?></textarea><br/>
			<input type="submit" id="submit" Value="Create New Salt Lodgement" />
		</form>
		Example of Form:-
		<pre style="overflow: scroll; max-width: 95%">
	&lt;form action=&quot;<?php echo $source; ?>v2/lodge.api&quot; method=&quot;post&quot;&gt;
		&lt;label for=&quot;response-json&quot;&gt;Response formated JSON&nbsp&lt;/label&gt;&lt;input type=&quot;radio&quot; name=&quot;response&quot; id=&quot;response-json&quot; value=&quot;json&quot; checked=&quot;checked&quot;/&gt;
		&lt;label for=&quot;response-serial&quot;&gt;Response formated PHP Serialisation&nbsp&lt;/label&gt;&lt;input type=&quot;radio&quot; name=&quot;response&quot; id=&quot;response-serial&quot; value=&quot;serial&quot;/&gt;
		&lt;label for=&quot;response-xml&quot;&gt;Response formated XML&nbsp&lt;/label&gt;&lt;input type=&quot;radio&quot; name=&quot;response&quot; id=&quot;response-xml&quot; value=&quot;xml&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;email&quot;&gt;Email Address:&nbsp&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;email&quot; id=&quot;email&quot; maxlen=&quot;198&quot; size=&quot;26&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;name&quot;&gt;Email Naming:&nbsp&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;name&quot; id=&quot;name&quot; maxlen=&quot;198&quot; size=&quot;26&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;pin&quot;&gt;4 - 12 Digit Only Pin:&nbsp&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;pin&quot; id=&quot;pin&quot; maxlen=&quot;12&quot; size=&quot;13&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;uri&quot;&gt;Site Root Path:&nbsp&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;uri&quot; id=&quot;uri&quot; maxlen=&quot;12&quot; size=&quot;13&quot; value=&quot;<?php echo $source; ?>&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;salt&quot;&gt;Encryption Salt:&nbsp&lt;/label&gt;&lt;textarea name=&quot;salt&quot; id=&quot;salt&quot; rows=&quot;9&quot; cols=&quot;26&quot;&gt;<?php echo $data; ?>&lt;/textarea&gt;&lt;br/&gt;
		&lt;input type=&quot;submit&quot; id=&quot;submit&quot; Value=&quot;Create New Salt Lodgement&quot; /&gt;
	&lt;/form&gt;
		</pre>
    </blockquote>
    <h2>RETRIEVE Document Output</h2>
    <p>This is done with the <em>retrieve.api</em> extension at the end of the url.</p>
    <blockquote>
		<form action="<?php echo $source; ?>v2/retrieve.api" method="post">
			<label for="response-json">Response formated JSON&nbsp</label><input type="radio" name="response" id="response-json" value="json" checked="checked"/>
			<label for="response-serial">Response formated PHP Serialisation&nbsp</label><input type="radio" name="response" id="response-serial" value="serial"/>
			<label for="response-xml">Response formated XML&nbsp</label><input type="radio" name="response" id="response-xml" value="xml"/><br/>
			<label for="email">Email Address:&nbsp</label><input type="text" name="email" id="email" maxlen="198" size="26"/><br/>
			<label for="pin">4 - 12 Digit Only Pin:&nbsp</label><input type="text" name="pin" id="pin" maxlen="12" size="13"/><br/>
			<label for="uri">Site Root Path:&nbsp</label><input type="text" name="uri" id="uri" maxlen="12" size="13" value="<?php echo $source; ?>"/><br/>
			<input type="submit" id="submit" Value="Retrieve Salt Lodgement" />
		</form>
		Example of Form:-
		<pre>
	&lt;form action=&quot;<?php echo $source; ?>v2/retrieve.api&quot; method=&quot;post&quot;&gt;
		&lt;label for=&quot;response-json&quot;&gt;Response formated JSON&nbsp&lt;/label&gt;&lt;input type=&quot;radio&quot; name=&quot;response&quot; id=&quot;response-json&quot; value=&quot;json&quot; checked=&quot;checked&quot;/&gt;
		&lt;label for=&quot;response-serial&quot;&gt;Response formated PHP Serialisation&nbsp&lt;/label&gt;&lt;input type=&quot;radio&quot; name=&quot;response&quot; id=&quot;response-serial&quot; value=&quot;serial&quot;/&gt;
		&lt;label for=&quot;response-xml&quot;&gt;Response formated XML&nbsp&lt;/label&gt;&lt;input type=&quot;radio&quot; name=&quot;response&quot; id=&quot;response-xml&quot; value=&quot;xml&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;email&quot;&gt;Email Address:&nbsp&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;email&quot; id=&quot;email&quot; maxlen=&quot;198&quot; size=&quot;26&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;pin&quot;&gt;4 - 12 Digit Only Pin:&nbsp&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;pin&quot; id=&quot;pin&quot; maxlen=&quot;12&quot; size=&quot;13&quot;/&gt;&lt;br/&gt;
		&lt;label for=&quot;uri&quot;&gt;Site Root Path:&nbsp&lt;/label&gt;&lt;input type=&quot;text&quot; name=&quot;uri&quot; id=&quot;uri&quot; maxlen=&quot;12&quot; size=&quot;13&quot; value=&quot;<?php echo $source; ?>&quot;/&gt;&lt;br/&gt;
		&lt;input type=&quot;submit&quot; id=&quot;submit&quot; Value=&quot;Retrieve Salt Lodgement&quot; /&gt;
	&lt;/form&gt;
		</pre>
    </blockquote>
    <?php if (file_exists($fionf = dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'apis-labs.coop.html')) {
    	readfile($fionf);
    }?>	
    <?php if (!in_array(whitelistGetIP(true), whitelistGetIPAddy())) { ?>
    <h2>Limits</h2>
    <p>There is a limit of <?php echo MAXIMUM_QUERIES; ?> queries per hour. You can add yourself to the whitelist by using the following form API <a href="http://whitelist.<?php echo domain; ?>/">Whitelisting form (whitelist.<?php echo domain; ?>)</a>. This is only so this service isn't abused!!</p>
    <?php } ?>
    <h2>The Author</h2>
    <p>This was developed by Simon Roberts in 2013 and is part of the Chronolabs System and api's.<br/><br/>This is open source which you can download from <a href="https://sourceforge.net/projects/chronolabsapis/">https://sourceforge.net/projects/chronolabsapis/</a> contact the scribe  <a href="mailto:wishcraft@users.sourceforge.net">wishcraft@users.sourceforge.net</a></p></body>
</div>
</html>
<?php 

