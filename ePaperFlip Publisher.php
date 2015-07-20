<?php
/*
Plugin Name: ePaperFlip Publisher
Description: Easily embed ePaperFlip/Flipb Flipbooks in your wordpress page
Version:     1
Author:      Shinjo Melosh
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: my-toolset
*/
function generate_embed($atts){
$margin = "auto";
$mobile = "";
$docType = "";
$dimensions ="%";
$displayViewer = "view.showViewer();";
    $a = shortcode_atts( array(
	'dimension' => 'percentage',
	'docid' => 'error',
	'publicationid' => 'error',
        'width' => '100',
        'height' => '100',
	'center' => 'true',
	'disableflash'=>'false',
    ), $atts );
if($a['docid'] === 'error'){
$docType = 'view.mostRecent("' . $a['publicationid'] . '");';
$displayViewer = "";
} else {
$docType = 'view.setDocumentID("' .  $a['docid']  . '");';
}

if($a['center'] == 'false'){
$margin = "0";
}

if($a['disableflash'] == 'true'){
$mobile = "view.viewMobile();";
}

if($a['dimension'] === 'pixel'){
$dimensions = "px";
}

return '<div style="width:' . $a['width'] . $dimensions . ';height:' . $a['height'] . $dimensions . ';border:none; margin:'. $margin . '; padding:0; overflow:hidden; z-index:999999;" ID="dcviewer">
</div><script type="text/javascript" src="https://api.epaperflip.com/scripts/dcviewer.js"></script>
<script>
var view = new com.epaperflip.api.Viewer();
view.setParentElementID("dcviewer");
' . $docType .'
' . $mobile .'
' . $displayViewer . '
</script>';
	
}

add_shortcode('epaperflip_embed', 'generate_embed');
?>