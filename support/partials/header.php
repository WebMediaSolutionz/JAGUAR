<?php
    $img_path = array( '../img/TELUS-logo-white.svg', '../../img/TELUS-logo-white.svg', '../../../img/TELUS-logo-white.svg' );

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
            <nav class="left main_nav">
                <ul class="clearfix">
                    <li class="left"><a class="capitalize" href="#"><?php echo $language[ 'nav1' ]; ?></a></li>
                    <li class="left"><a class="capitalize" href="#"><?php echo $language[ 'nav2' ]; ?></a></li>
                    <li class="left"><a class="current capitalize" href="#"><?php echo $language[ 'nav3' ]; ?></a></li>
                </ul>
            </nav>

            <div class="header">
                <nav class="profile right secondary_nav">
                    <ul class="clearfix hide">
                        <li class="left"><a href="#">establishments</a></li>
                        <li class="left"><a href="#">Stan Smith</a></li>
                    </ul>

                    <ul class="menu no_styles left gap_left clearfix">
                        <li class="left gap_right">
                            <a class="user_name" href="#">
                                <div class="left username"><span>Stan Smith</span></div>
                                <div class="left frg-icon icon-arrow-down"></div>
                            </a>
                            <ul class="no_styles hide">
                                <li></li>
                                <li><a href="#">Stan Smith</a></li>
                                <li><a href="<?php echo $opp_lang_page; ?>"><?php echo $language[ 'opp_language' ]; ?></a></li>
                                <li><a href="corporate_settings.php#tabs1"><?php echo $language[ 'dropdown1' ]; ?></a></li>
                                <li><a href="#"><?php echo $language[ 'dropdown2' ]; ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>