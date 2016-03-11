<?php

$wgHooks['ParserFirstCallInit'][] = 'ExampleExtension::onParserSetup';

class ExampleExtension {
	// Register any render callbacks with the parser
	function onParserSetup( Parser $parser ) {
		// When the parser sees the <wavedrom> tag, it executes renderTagWavedrom (see below)
		$parser->setHook( 'wavedrom', 'ExampleExtension::renderTagWavedrom' );
	}

	// Render <wavedrom>
  function renderTagWavedrom( $input, array $args, Parser $parser, PPFrame $frame ) {
    $includeSkin = '<script src="http://wavedrom.com/skins/default.js" type="text/javascript"></script>';
    $includeWavedom = '<script src="http://wavedrom.com/wavedrom.min.js" type="text/javascript"></script>';
    // Mediawiki add <p> and <pre> if newlines ...
    $inputstriped = str_replace(array("\n", "\r"), "", $input);
    $thescript = '<script type="WaveDrom">'.$inputstriped.'</script>';
		return $includeSkin . $includeWavedom . $thescript;
	}
}

?>
