<!-- Fixed navbar-->
<div class="w3-top white-bg white-bg w3-card z-index-3">
    <div class="w3-bar w3-xxlarge w3-center line-height-3" id="navbar">
        <a href="index.php#hjem" class="w3-bar-item line-height-1">
            <img src="img/logos/logo-text.png" height="90px" alt="InMarket logo" id="navbar-img">
        </a>
        <button class="white-button w3-xlarge w3-right padding-top-1em" id="navbar-button">
            <div class="menu-container" onclick="menuAnimation(this)">
                <div class="menu-bar1"></div>
                <div class="menu-bar2"></div>
                <div class="menu-bar3"></div>
            </div>
        </button>
    </div>
    <div id="navbar-dropdown-content" class="w3-content w3-bar white-bg padding-bottom-16 w3-large" style="display:none;">
        <hr>
        <div class="w3-bar-item w3-mobile width-25-percent w3-center" id="navbar-about-link">
            <a class="golden-accent-bottom" ><i class="fa fa-caret-right" id="navbar-about-icon"></i> Om </a>
            <div class="subnav-content" style="display:none;">
                <ul class="w3-ul">
                    <li>
                        <a href="om.php" class="w3-padding"><i class="fas fa-info-circle"></i> Oss</a>
                    </li>
                    <li>
                        <a href="bedrift.php" class="w3-padding"><i class="fas fa-info-circle"></i> Bedrift</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w3-bar-item w3-mobile width-25-percent w3-center">
            <a href="teamet.php" class="golden-accent-bottom"><i class="fas fa-user"></i> Vårt team</a>
        </div>
        <div class="w3-bar-item w3-mobile width-25-percent w3-center">
            <a href="aktiviteter.php" class="golden-accent-bottom"><i class="fas fa-play-circle"></i> Aktiviteter</a>
        </div>
        <div class="w3-bar-item w3-mobile width-25-percent w3-center">
            <a href="kontakt.php" class="golden-accent-bottom"><i class="fas fa-envelope"></i> Kontakt oss</a>
        </div>
    </div>
</div>

<div class="w3-overlay">
</div>
