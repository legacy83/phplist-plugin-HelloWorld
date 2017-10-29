<?php

defined( 'PHPLISTINIT' ) || die;
$plugin = $GLOBALS[ 'plugins' ][ $_GET[ 'pi' ] ];

$table = new WebblerListing( 'ID' );
foreach ( range( 1, 20 ) as $index ) {
    $table->addElement( $index );
    $table->addColumn( $index, 'Name', 'Nulla tristique commodo' );
    $table->addColumn( $index, 'Building', 'Donec finibus, odio sit amet mollis tristique', '#' );
    $table->addColumn( $index, 'Height in Feet', 200 );
}

?>

<h1>Hello World - WebblerListing</h1>

<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br/>
    Nunc porttitor, purus eget tristique elementum, libero felis mattis ex, et iaculis tellus metus eget odio.<br/>
    Fusce aliquet sit amet ligula a mollis. Fusce vulputate (<a href="#">lobortis tortor</a>)
</p>

<?= $table->display(); ?>
