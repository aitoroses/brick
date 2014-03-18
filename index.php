<?php

/*
 * Brick. Webfonts that actually look good
 */

// Catalogue JSON
define("CATALOGUE", <<<'EOD'
{
	"Raleway": {
		"100": "Raleway Thin",
		"100i": "Raleway Thin Italic",
		"200": "Raleway ExtraLight",
		"200i": "Raleway ExtraLight Italic",
		"300": "Raleway Light",
		"300i": "Raleway Light Italic",
		"400": "Raleway Regular",
		"400i": "Raleway Italic",
		"500": "Raleway Medium",
		"500i": "Raleway Medium Italic",
		"600": "Raleway SemiBold",
		"600i": "Raleway SemiBold Italic",
		"700": "Raleway Bold",
		"700i": "Raleway Bold Italic",
		"800": "Raleway ExtraBold",
		"800i": "Raleway ExtraBold Italic",
		"900": "Raleway Heavy",
		"900i": "Raleway Heavy Italic"
	},
	"TeX Gyre Heros": {
		"400": "TeXGyreHeros-Regular",
		"400i": "TeXGyreHeros-Italic",
		"700": "TeXGyreHeros-Bold",
		"700i": "TeXGyreHeros-BoldItalic"
	},
	"EB Garamond": {
		"400": "EB Garamond 12 Regular",
		"400i": "EB Garamond 12 Italic"
	},
	"Libre Baskerville": {
		"400": "Libre Baskerville",
		"400i": "Libre Baskerville Italic",
		"700": "Libre Baskerville Bold"
	},
	"Open Sans": {
		"300": "Open Sans Light",
		"300i": "Open Sans Light Italic",
		"400": "Open Sans Regular",
		"400i": "Open Sans Italic",
		"600": "Open Sans Semibold",
		"600i": "Open Sans Semibold Italic",
		"700": "Open Sans Bold",
		"700i": "Open Sans Bold Italic",
		"900": "Open Sans Extrabold",
		"900i": "Open Sans Extrabold Italic"
	},
	"Roboto": {
		"250": "Roboto Thin",
		"250i": "Roboto Thin Italic",
		"300": "Roboto Light",
		"300i": "Roboto Light Italic",
		"400": "Roboto",
		"400i": "Roboto Italic",
		"500": "Roboto Medium",
		"500i": "Roboto Medium Italic",
		"700": "Roboto Bold",
		"700i": "Roboto Bold Italic",
		"900": "Roboto Black",
		"900i": "Roboto Black Italic"
	},
	"Roboto Slab": {
		"250": "Roboto Slab Thin",
		"300": "Roboto Slab Light",
		"400": "Roboto Slab",
		"700": "Roboto Slab Bold"
	},
	"Crimson": {
		"400": "Crimson Roman",
		"400i": "Crimson Italic",
		"600": "Crimson Semibold",
		"600i": "Crimson Semibold Italic",
		"700": "Crimson Bold",
		"700i": "Crimson Bold Italic"
	},
	"Latin Modern": {
		"400": "LMRoman10-Regular",
		"400i": "LMRoman10-Italic",
		"700": "LMRoman10-Bold",
		"700i": "LMRoman10-BoldItalic"
	},
	"Montserrat": {
		"400": "Montserrat-Regular",
		"700": "Montserrat-Bold"
	},
	"Noto Sans": {
		"400": "Noto Sans Regular",
		"400i": "Noto Sans Italic",
		"700": "Noto Sans Bold",
		"700i": "Noto Sans Bold Italic"
	},
	"Noto Serif": {
		"400": "Noto Serif Regular",
		"400i": "Noto Serif Italic",
		"700": "Noto Serif Bold",
		"700i": "Noto Serif Bold Italic"
	},
	"Source Sans Pro": {
		"200": "Source Sans Pro ExtraLight",
		"200i": "Source Sans Pro ExtraLight Italic",
		"300": "Source Sans Pro Light",
		"300i": "Source Sans Pro Light Italic",
		"400": "Source Sans Pro Regular",
		"400i": "Source Sans Pro Italic",
		"600": "Source Sans Pro Semibold",
		"600i": "Source Sans Pro Semibold Italic",
		"700": "Source Sans Pro Bold",
		"700i": "Source Sans Pro Bold Italic",
		"900": "Source Sans Pro Black",
		"900i": "Source Sans Pro Black Italic"
	},
	"Inconsolata": {
		"500": "Inconsolata"
	},
	"Linux Libertine": {
		"400": "Linux Libertine O",
		"400i": "Linux Libertine O Italic",
		"600": "Linux Libertine O Semibold",
		"600i": "Linux Libertine O Semibold Italic",
		"700": "Linux Libertine O Bold",
		"700i": "Linux Libertine O Bold Italic"
	},
	"Source Code Pro": {
		"200": "Source Code Pro ExtraLight",
		"300": "Source Code Pro Light",
		"400": "Source Code Pro Regular",
		"500": "Source Code Pro Medium",
		"600": "Source Code Pro Semibold",
		"700": "Source Code Pro Bold",
		"900": "Source Code Pro Black"
	},
	"Bitter": {
		"400": "Bitter Regular",
		"400i": "Bitter Italic",
		"700": "Bitter Bold",
		"700i": "Bitter Bold Italic"
	},
	"Anonymous Pro": {
		"400": "Anonymous Pro",
		"400i": "Anonymous Pro Italic",
		"700": "Anonymous Pro Bold",
		"700i": "Anonymous Pro Bold Italic"
	},
	"Clear Sans": {
		"250": "Clear Sans Thin",
		"300": "Clear Sans Light",
		"400": "Clear Sans",
		"400i": "Clear Sans Italic",
		"500": "Clear Sans Medium",
		"500i": "Clear Sans Medium Italic",
		"700": "Clear Sans Bold",
		"700i": "Clear Sans Bold Italic"
	},
	"Telex": {
		"400": "Telex-Regular"
	},
	"Alegreya Sans": {
		"250": "Alegreya Sans Thin",
		"250i": "Alegreya Sans Thin Italic",
		"300": "Alegreya Sans Light",
		"300i": "Alegreya Sans Light Italic",
		"400": "Alegreya Sans Regular",
		"400i": "Alegreya Sans Italic",
		"500": "Alegreya Sans Medium",
		"500i": "Alegreya Sans Medium Italic",
		"700": "Alegreya Sans Bold",
		"700i": "Alegreya Sans Bold Italic",
		"800": "Alegreya Sans ExtraBold",
		"800i": "Alegreya Sans ExtraBold Italic",
		"900": "Alegreya Sans Black",
		"900i": "Alegreya Sans Black Italic"
	}
}
EOD
);

header('Content-type: text/css');
header('X-Content-Type-Options: nosniff');
header('Cache-Control: public, max-age=2628000');
header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time() + 2628000));
header('Last-Modified: ' . gmdate('D, d M Y H:i:s \G\M\T', filemtime(__FILE__)));
header('Pragma: Public');

// Templates segments
$BASE = "@font-face{font-family:'%s';font-style:%s;font-weight:%s;src:%s}";
$URI = array(
	'LOCAL' => "local('%s')",
	'WOFF' => "url(%s) format('woff')"
	);

$query = explode("/", preg_replace("/\/$|^\//", "", urldecode($_SERVER['REQUEST_URI'])));
$catalogue = json_decode(CATALOGUE, true);

if ($query[0] == "") {
	header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request');
	exit();
}

$server = "//brick.a.ssl.fastly.net/fonts/";

foreach ($query as $key=>$val) {
	$val = explode(":", $val);
	$family = preg_replace("/\+/", " ", $val[0]);
	$weights = explode(",", $val[1]);
	$flags = isset($val[2]) ? $val[2] : '';

	foreach ($weights as $weight) {
		$base_url = $server . strtolower(preg_replace("/\s/", '', $family)) . "/";
		$local = $catalogue[$family][$weight];

		// Font URLs
		$woff = $base_url . $weight . ".woff";

		if (preg_match("/i$/", $weight)) {
			$style = 'italic';
			$weight = rtrim($weight, "i");
		} else {
			$style = 'normal';
		}

		// Start with no URI's
		$uri = array();

		// Process flags
		if (strpos($flags,'f') === false)
			array_push($uri, sprintf($URI['LOCAL'], $local));
		// Add font URL
		array_push($uri, sprintf($URI['WOFF'], $woff));

		echo sprintf($BASE, $family, $style, $weight, implode(',', $uri));
	}
}

?>