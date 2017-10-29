<?php

defined( 'PHPLISTINIT' ) || die;
$plugin = $GLOBALS[ 'plugins' ][ $_GET[ 'pi' ] ];

$theGlobalMessagePanelContent = function () {
    $message = getConfig( 'phplistHelloWorld_global_message' );

    return <<<CONTENT
<p>
    Lorem ipsum dolor sit amet, consectetur <strong>{$message}</strong>.<br/>
    Nunc porttitor, purus eget tristique elementum, libero felis mattis ex, et iaculis tellus metus eget odio.<br/>
    Fusce aliquet sit amet ligula a mollis. Fusce vulputate (<a href="#">lobortis tortor</a>)
</p>
CONTENT;
};

?>

    <h1>Hello World - Using The UIPanel</h1>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
        Nunc porttitor, purus eget tristique elementum, libero felis mattis ex, et iaculis tellus metus eget odio.<br/>
        Fusce aliquet sit amet ligula a mollis. Fusce vulputate (<a href="#">lobortis tortor</a>)
    </p>

<?php

$panel = new UIPanel( 'The Global Message', $theGlobalMessagePanelContent() );
print $panel->display();

?>
