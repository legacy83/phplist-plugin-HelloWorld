<?php

defined( 'PHPLISTINIT' ) || die;
$plugin = $GLOBALS[ 'plugins' ][ $_GET[ 'pi' ] ];

$message = getConfig( 'phplistHelloWorld_global_message' );

if ( isset( $_POST[ 'display-hello-message' ] ) ) {

    if ( !verifyToken() ) {
        Error( 'Token de segurança inválido. Por favor, recarregue a página e tente novamente.' );
        return;
    }

    $mensagemEstaOk = strlen( trim( $_POST[ 'message' ] ) ) !== 0;
    if ( !$mensagemEstaOk ) {
        Info( 'Sua mensagem está em branco. Por isso vamos exibir uma mensagem padrão.', true );
    }

    if ( $mensagemEstaOk ) {
        $message = $_POST[ 'message' ];
    }
}

?>

<h1>Hello World - Page With Form</h1>

<p>
    Lorem ipsum dolor sit amet, consectetur <strong><?= $message; ?></strong>.<br/>
    Nunc porttitor, purus eget tristique elementum, libero felis mattis ex, et iaculis tellus metus eget odio.<br/>
    Fusce aliquet sit amet ligula a mollis. Fusce vulputate (<a href="#">lobortis tortor</a>)
</p>

<?= formStart( 'id="page1" class="page1-class"' ); ?>
<fieldset>
    <label for="page1-text-message">Your Custom Message</label>
    <input type="text" id="page1-text-message" name="message">
    <button type="submit" name="display-hello-message">Display Hello Message</button>
</fieldset>
</form>
