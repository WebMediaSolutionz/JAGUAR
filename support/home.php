<?php include( 'partials/home_header.php' ); ?>

<!-- Topic Header -->
<div class="topic-header">
    <section class="topic-header__headline">
        <div class="grid">
            <h2 class="capitalize"><?php echo $language[ 'page_title' ]; ?></h2>
        </div>
    </section>

    <div class="grid">
        <nav class="topic-header__filter  ">
            <ul class="topic-header__filter-list">
                <li class="topic-header__filter-list-item jsChangeCategory ctx-active" data-link="getting-set-up">
                    <a class="decoration-default" role="button" aria-controls="getting-set-up" href="#">
                        <span class="capitalize"><?php echo $language[ 'tab1' ]; ?></span>
                    </a>
                </li>
                <li class="topic-header__filter-list-item jsChangeCategory" data-link="buying">
                    <a class="decoration-default" role="button" aria-controls="buying" href="#">
                        <span class="capitalize"><?php echo $language[ 'tab2' ]; ?></span>
                    </a>
                </li>
                <li class="topic-header__filter-list-item jsChangeCategory" data-link="managing">
                    <a class="decoration-default" role="button" aria-controls="managing" href="#">
                        <span class="capitalize"><?php echo $language[ 'tab3' ]; ?></span>
                    </a>
                </li>
                <li class="topic-header__filter-list-item jsChangeCategory" data-link="order-management">
                    <a class="decoration-default" role="button" aria-controls="order-management" href="#">
                        <span class="capitalize"><?php echo $language[ 'tab4' ]; ?></span>
                    </a>
                </li>
                <li class="topic-header__filter-list-item jsChangeCategory" data-link="troubleshooting">
                    <a class="decoration-default" role="button" aria-controls="troubleshooting" href="#">
                        <span class="capitalize"><?php echo $language[ 'tab5' ]; ?></span>
                    </a>
                </li>
                <li class="topic-header__filter-list-item jsChangeCategory" data-link="release-notes">
                    <a class="decoration-default" role="button" aria-controls="release-notes" href="#">
                        <span class="capitalize"><?php echo $language[ 'tab6' ]; ?></span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- / End Topic Header -->

<!-- Topic Catalogue -->
<section role="region" aria-live="polite" id="get-set-up" data-category="getting-set-up" class="topic-catalogue" style="display: block;">
    <div data-tab="getting-set-up" class="grid">
        <div style="min-height: 185px;" class="topic-catalogue__item">
            <h2 class="topic-catalogue__category-title capitalize">
                <span class="frg-icon icon-star-inverted topic-catalogue__category-icon"></span><?php echo $language[ 'tab1' ]; ?>
            </h2>
            <ul style="" class="topic-catalogue__item-list">
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article19.php" class="decoration-default">The difference between a master administrator and a customer administrator</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article20.php" class="decoration-default">Set up/add/remove subscribers</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article21.php" class="decoration-default">Set up/add/remove administrators</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article22.php" class="decoration-default">Book a Training Session</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- / End Topic Catalogue -->

<!-- Topic Catalogue -->
<section role="region" aria-live="polite" id="get-set-up" data-category="buying" class="topic-catalogue" style="display: none;">
    <div data-tab="buying" class="grid">
        <div class="topic-catalogue__item" style="min-height: 185px;">
            <h2 class="topic-catalogue__category-title capitalize">
                <span class="frg-icon icon-user-profile-inverted topic-catalogue__category-icon"></span><?php echo $language[ 'tab2' ]; ?>
            </h2>
            <ul style="" class="topic-catalogue__item-list">
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article23.php" class="decoration-default">Buy Devices and Plans</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article24.php" class="decoration-default">How to Order BYOD Plans?</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article25.php" class="decoration-default">What if a device I want is unavailable?</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article26.php" class="decoration-default">Are the devices shown the ones negotiated in our contract?</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article18.php" class="decoration-default">Upgrade Subscriber Devices</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article100.php" class="decoration-default">How do I port subscribers from another carrier</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article101.php" class="decoration-default">How do I send a device in for repair</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article102.php" class="decoration-default">How to bulk upload subscriber device information</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article103.php" class="decoration-default">What financing is available for devices</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article104.php" class="decoration-default">What is an IMEI</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article105.php" class="decoration-default">Where can I find the SIM number</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- / End Topic Catalogue -->

<!-- Topic Catalogue -->
<section role="region" aria-live="polite" id="get-set-up" data-category="managing" class="topic-catalogue" style="display: none;">
    <div data-tab="managing" class="grid">
        <div style="min-height: 185px;" class="topic-catalogue__item">
            <h2 class="topic-catalogue__category-title capitalize">
                <span class="frg-icon icon-smartphone-inverted topic-catalogue__category-icon"></span><?php echo $language[ 'tab3' ]; ?>
            </h2>
            <ul style="" class="topic-catalogue__item-list">
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article6.php" class="decoration-default">What information can I get from an invoice report?</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article7.php" class="decoration-default">What do the coloured flags mean in the action status column?</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article8.php" class="decoration-default">What do the features in the Actions drop down menu mean?</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article106.php" class="decoration-default">How do I tag subscribers with organization Tags?</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article10.php" class="decoration-default">How do I run an invoice report?</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article11.php" class="decoration-default">How do make a subscriber change? A bulk subscriber change?</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article12.php" class="decoration-default">How do I change a rate plan?</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article13.php" class="decoration-default">How do I add or remove features?</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article14.php" class="decoration-default">An employee’s stolen phone is found. How do I reactivate the service?</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article15.php" class="decoration-default">An employee’s phone is lost or stolen?</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article16.php" class="decoration-default">An employee’s lost phone is found. How do I reactivate the service?</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article17.php" class="decoration-default">An employee is going on vacation. How do I suspend her service?</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article107.php" class="decoration-default">How do I easily track when a contract is about to expire</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article108.php" class="decoration-default">How do I see my available inventory</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article109.php" class="decoration-default">How do I see the device for each employee</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article110.php" class="decoration-default">How do I use advanced capabilities to search for assets</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article111.php" class="decoration-default">How near realtime is the usage information</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article112.php" class="decoration-default">How to move a mobile device from inventory to assigned without assigning an employee</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- / End Topic Catalogue -->

<!-- Topic Catalogue -->
<section role="region" aria-live="polite" id="get-set-up" data-category="order-management" class="topic-catalogue" style="display: none;">
    <div data-tab="order-management" class="grid">
        <div style="min-height: 185px;" class="topic-catalogue__item">
            <h2 class="topic-catalogue__category-title capitalize">
                <span class="frg-icon icon-cart-inverted topic-catalogue__category-icon"></span><?php echo $language[ 'tab1' ]; ?>
            </h2>
            <ul style="" class="topic-catalogue__item-list">
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article4.php" class="decoration-default">How long will the cart save my order?</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article5.php" class="decoration-default">How do I cancel or change an order after it’s submitted?</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article113.php" class="decoration-default">How do I check the status of my order</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article114.php" class="decoration-default">How long does device activation take</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- / End Topic Catalogue -->

<!-- Topic Catalogue -->
<section role="region" aria-live="polite" id="get-set-up" data-category="troubleshooting" class="topic-catalogue" style="display: none;">
    <div data-tab="troubleshooting" class="grid">
        <div class="topic-catalogue__item" style="min-height: 185px;">
            <h2 class="topic-catalogue__category-title capitalize">
                <span class="frg-icon support-icon support-icon--prepaid topic-catalogue__category-icon"></span><?php echo $language[ 'tab1' ]; ?>
            </h2>
            <ul style="" class="topic-catalogue__item-list">
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article1.php" class="decoration-default">Error message when I try to change a rate plan.</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article2.php" class="decoration-default">Missing items from my order</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article3.php" class="decoration-default">I can’t log into the Jaguar portal through TELUS My Account</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article115.php" class="decoration-default">A device is not working. Any suggestions</a>
                </li>
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article116.php" class="decoration-default">Items ordered are not in stock</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- / End Topic Catalogue -->

<!-- Topic Catalogue -->
<section role="region" aria-live="polite" id="get-set-up" data-category="release-notes" class="topic-catalogue" style="display: none;">
    <div data-tab="release-notes" class="grid">
        <div style="min-height: 185px;" class="topic-catalogue__item">
            <h2 class="topic-catalogue__category-title capitalize">
                <span class="frg-icon icon-star-inverted topic-catalogue__category-icon"></span><?php echo $language[ 'tab1' ]; ?>
            </h2>

            <ul style="" class="topic-catalogue__item-list">
                <li>
                    <a target="_blank" href="articles/<?php echo $lang; ?>/article117.php" class="decoration-default">Release Notes</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- / End Topic Catalogue -->

<?php include( 'partials/second_footer.php' ); ?>

<?php include( 'partials/home_footer.php' ); ?>