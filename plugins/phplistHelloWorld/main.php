<?php

defined( 'PHPLISTINIT' ) || die;
$plugin = $GLOBALS[ 'plugins' ][ $_GET[ 'pi' ] ];

?>

<h1>phplist Hello World Plugin</h1>

<h2>Version <?= $plugin->version ?></h2>

<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
    Nunc porttitor, purus eget tristique elementum, libero felis mattis ex, et iaculis tellus metus eget odio.<br/>
    Fusce aliquet sit amet ligula a mollis. Fusce vulputate (<a href="#">lobortis tortor</a>)
</p>

<h2>The Global Message</h2>

<p>
    Lorem ipsum dolor sit amet, consectetur <strong><?= getConfig( 'phplistHelloWorld_global_message' ); ?></strong>.<br/>
    Nunc porttitor, purus eget tristique elementum, libero felis mattis ex, et iaculis tellus metus eget odio.<br/>
    Fusce aliquet sit amet ligula a mollis. Fusce vulputate (<a href="#">lobortis tortor</a>)
</p>
