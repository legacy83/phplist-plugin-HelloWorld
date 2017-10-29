<?php

defined( 'PHPLISTINIT' ) || die;
ob_end_clean();

print( json_encode( array(
    'message' => getConfig( 'phplistHelloWorld_global_message' )
) ) );

die();
