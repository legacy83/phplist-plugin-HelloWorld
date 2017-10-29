<?php

defined( 'PHPLISTINIT' ) || die;
$plugin = $GLOBALS[ 'plugins' ][ $_GET[ 'pi' ] ];

?>

<h1>Hello World - phpList Ajax Way</h1>

<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
    Nunc porttitor, purus eget tristique elementum, libero felis mattis ex, et iaculis tellus metus eget odio.<br/>
    Fusce aliquet sit amet ligula a mollis. Fusce vulputate (<a href="#">lobortis tortor</a>)
</p>

<ul>
    <li><?= PageLinkClass( 'page08', 'Do the ajax call', '', 'ajaxable' ); ?></li>
    <li><?= PageLinkClass( 'page08', 'Do the ajax call to an action', 'action=hello', 'ajaxable' ); ?></li>
</ul>
