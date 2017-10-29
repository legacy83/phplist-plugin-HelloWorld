<?php

defined( 'PHPLISTINIT' ) || die;
$plugin = $GLOBALS[ 'plugins' ][ $_GET[ 'pi' ] ];

$pagefooter[ 'phplistHelloWorld_page06' ] = <<<SCRIPT
<script type="text/javascript">
    jQuery(document).ready(function($) {
        
        console.log('phplistHelloWorld_page06 script started!');
        
        $('#page06-button').click(function() {
            alert('page06-button has been clicked!');
        });
      
    });
</script>
SCRIPT;

?>

<h1>Hello World - Using JavaScript</h1>

<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
    Nunc porttitor, purus eget tristique elementum, libero felis mattis ex, et iaculis tellus metus eget odio.<br/>
    Fusce aliquet sit amet ligula a mollis. Fusce vulputate (<a href="#">lobortis tortor</a>)
</p>

<p>
    <a id="page06-button" class="button" href="#">Show Alert</a>
</p>
