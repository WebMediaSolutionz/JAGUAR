<?php
    $img_path = array( '../img/TELUS-logo-white.svg', '../../img/TELUS-logo-white.svg', '../../../img/TELUS-logo-white.svg' );

    for ( $i = 0; $i < count( $img_path ); $i++ ) { 
        if ( file_exists( $img_path[ $i ] ) ) {
            $img_path = $img_path[ $i ];
        }
    }
?>

<footer class="center">
    <div class="grid">   
        <img class="logo" alt="TELUS logo" src="<?php echo $img_path; ?>">
        <p>&copy; <?php echo date( 'Y' ); ?> TELUS Communications Company</p>
    </div>
</footer>