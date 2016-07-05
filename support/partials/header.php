<?php
    $img_path = array( '../img/TELUS-logo-white.svg', '../../img/TELUS-logo-white.svg' );

    for ( $i = 0; $i < count( $img_path ); $i++ ) { 
        if ( file_exists( $img_path[ $i ] ) ) {
            $img_path = $img_path[ $i ];
        }
    }
?>

<header>
    <div class="grid">
        <div class="clearfix">
            <a class="logo left" href="#">
                <img src="<?php echo $img_path; ?>" alt="TELUS / Home" />
            </a>
            <nav class="left main_nav hide">
                <ul class="clearfix">
                    <li class="left"><a href="#">Buy</a></li>
                    <li class="left"><a href="#">Manage</a></li>
                    <li class="left"><a class="current" href="#">Support</a></li>
                </ul>
            </nav>

            <nav class="right secondary_nav hide">
                <ul class="clearfix">
                    <li class="left"><a href="#">establishments</a></li>
                    <li class="left"><a href="#">Stan Smith</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>