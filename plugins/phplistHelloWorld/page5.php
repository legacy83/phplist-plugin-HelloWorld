<?php

defined( 'PHPLISTINIT' ) || die;
$plugin = $GLOBALS[ 'plugins' ][ $_GET[ 'pi' ] ];

?>

<h1>Hello World - Using Links</h1>

<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
    Nunc porttitor, purus eget tristique elementum, libero felis mattis ex, et iaculis tellus metus eget odio.<br/>
    Fusce aliquet sit amet ligula a mollis. Fusce vulputate (<a href="#">lobortis tortor</a>)
</p>

<ul>
    <li><?= PageLink2( 'main', 'Simple link to the main plugin page' ); ?></li>
    <li><?= PageLink2( 'page4', 'Simple link with parameters', 'start=100' ); ?></li>
    <li><?= PageLink2( 'configure', 'Simple link to outside the plugin', '', true ); ?></li>
    <li><?= PageLinkButton( 'main', 'A sample link button' ); ?></li>
</ul>
