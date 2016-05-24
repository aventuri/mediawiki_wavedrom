<?php
$wgHooks['ParserFirstCallInit'][] = 'WaveDrom::onParserSetup';
class WaveDrom {
      // Register any render callbacks with the parser
      function onParserSetup( Parser $parser ) {
               // When the parser sees the <wavedrom> tag, it executes renderTagWavedrom (see below)
                  $parser->setHook( 'wavedrom', 'WaveDrom::renderTagWavedrom' );
                  }
                  // Render <wavedrom>
  function renderTagWavedrom( $input, array $args, Parser $parser, PPFrame $frame ) {
    //$parser->addHeadItem(
    $parser->getOutput()->addHeadItem('<script src="http://wavedrom.com/skins/default.js" type="text/javascript"></script>', 'WaveDromDefault');
    $parser->getOutput()->addHeadItem('<script src="http://wavedrom.com/wavedrom.min.js" type="text/javascript"></script>', 'WaveDromMain');
    $parser->getOutput()->addHeadItem('<script>window.addEventListener(\'DOMContentLoaded\', WaveDrom.ProcessAll, false);</script>', 'WaveDromLoad');
    // Mediawiki add <p> and <pre> if newlines ...
    $inputstriped = str_replace(array("\n", "\r"), "", $input);
    return '<script type="WaveDrom">'.$inputstriped.'</script>';
  }
}
?>


