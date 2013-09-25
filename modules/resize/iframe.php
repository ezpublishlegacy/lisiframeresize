<?php
/*
* @copyright land in sicht ag 2013
* @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
* @version 0.1
* @eZversion > 4.x
*/

$height = $Params['height'];
if (empty($height) )
{
    $height = 1000;
}
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
    var newHeight = <?= $height;?>;
	var iframe = $(window.top.document).contents().find('iframe')[0];	
	iframe.style.height = newHeight + 'px';
</script>
<?php 
eZExecution::cleanExit();
?>