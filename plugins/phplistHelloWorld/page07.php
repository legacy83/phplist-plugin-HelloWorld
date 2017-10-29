<?php

defined( 'PHPLISTINIT' ) || die;
$plugin = $GLOBALS[ 'plugins' ][ $_GET[ 'pi' ] ];

$pagefooter[ 'phplistHelloWorld_page07' ] = <<<SCRIPT
<script type="text/javascript">
    jQuery(document).ready(function($) {
        
        $('#page07-button').click(function() {
            
            $.get( '?page=page07ajax&pi=phplistHelloWorld&ajaxed=1', function(data) {
                $('#page07-pre').html(data);
            } );
            
        });
      
    });
</script>
SCRIPT;

?>

<h1>Hello World - Building Ajax</h1>

<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
    Nunc porttitor, purus eget tristique elementum, libero felis mattis ex, et iaculis tellus metus eget odio.<br/>
    Fusce aliquet sit amet ligula a mollis. Fusce vulputate (<a href="#">lobortis tortor</a>)
</p>

<p>
    <a id="page07-button" class="button" href="#">Do Ajax Call</a>
</p>

<pre id="page07-pre"></pre>
