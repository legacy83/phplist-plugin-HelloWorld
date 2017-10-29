<?php

@ob_end_clean();
@ob_start();

verifyCsrfGetToken();

if ( is_file( dirname( __FILE__ ) . '/ui/' . $GLOBALS[ 'ui' ] . '/pagetop_minimal.php' ) ) {
    include_once dirname( __FILE__ ) . '/ui/' . $GLOBALS[ 'ui' ] . '/pagetop_minimal.php';
}

$status = s( 'Failed' );

if ( !empty( $_GET[ 'action' ] ) ) {
    $action = basename( $_GET[ 'action' ] );
    if ( is_file( dirname( __FILE__ ) . '/actions/' . $action . '.php' ) ) {
        include dirname( __FILE__ ) . '/actions/' . $action . '.php';
    } elseif ( !empty( $_GET[ 'origpage' ] ) ) {
        $action = basename( $_GET[ 'origpage' ] );
        if ( is_file( dirname( __FILE__ ) . '/actions/' . $action . '.php' ) ) {
            include dirname( __FILE__ ) . '/actions/' . $action . '.php';
        }
    }
} else {
    Redirect( 'home' );
}

print $status;
print '</body></html>';
exit;