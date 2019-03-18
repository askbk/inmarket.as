<!-- Fixed navbar-->
<div class="w3-top white-bg white-bg w3-card z-index-3">
    <div class="w3-bar w3-xxlarge w3-center line-height-3" id="navbar">
        <a href="index.php" class="w3-bar-item line-height-1">
            <img src="img/logos/inmarketlogo2.svg" height="72px" alt="InMarket logo" id="navbar-img">
        </a>
        <!-- <ul class = "w3-right w3-small" style="width:auto;height:36px; margin-top:10px; list-style-type:none;" >
            <li  style="width:30px;height:25px; margin-top:0;" >
                <a href="/index.php" >
                <img src="img/norway-lang-button.png" height="20px" alt="norwegian" >
                </a>
            </li>
            <li  style="width:30px;height:25px; margin-top:0;" >
                <a href="/en/index.php">
                <img src="img/uk-lang-button.png" height="20px" alt="uk">
                </a>
            </li>
        </ul> -->
        <div class = "w3-right w3-small" style="margin-top:25px"  >
            <a href="index.php" >
                <img src="img/norway-lang-button.png" height="20px" alt="norwegian" >
            </a>
            <a href="en/index.php">
                <img src="img/uk-lang-button.png" height="20px" alt="uk">
            </a>
        </div>
        <button class="white-button w3-xlarge w3-right padding-top-1em" id="navbar-button">
            <div class="menu-container" onclick="menuAnimation(this)">
                <div class="menu-bar1"></div>
                <div class="menu-bar2"></div>
                <div class="menu-bar3"></div>
            </div>
        </button>
    </div>
    <div id="navbar-dropdown-content" class="w3-content w3-bar white-bg padding-bottom-16 w3-large" style="display:none;">
        <hr style="margin:10px !important;">
        <div class="row uppercase w3-container">
            <div class="column">
                <ul class="w3-ul">
                    <li>
                        <b>Våre tilbud</b>
                    </li>
                    <li>
                        <a href="bedrift.php" class="golden-accent-bottom">
                            Bedrifter
                        </a>
                    </li>
                    <li>
                        <a href="elever-studenter.php" class="golden-accent-bottom">
                            Under utdanning
                        </a>
                    </li>
                    <li>
                        <a href="arbeidssoker.php" class="golden-accent-bottom">
                            Jobbsøkere
                        </a>
                    </li>
                </ul>
            </div>
            <div class="column">
                <ul class="w3-ul">
                    <li>
                        <b>Om</b>
                    </li>
                    <li>
                        <a href="teamet.php" class="golden-accent-bottom">
                            Teamet
                        </a>
                    </li>
                    <li>
                        <a href="om.php" class="golden-accent-bottom">
                            Visjon og mål
                        </a>
                    </li>
                </ul>
            </div>
            <div class="column">
                <ul class="w3-ul">
                    <li>
                        <b>Nyheter</b>
                    </li>
                    <li>
                        <a href="aktiviteter.php" class="golden-accent-bottom">
                            Hva skjer hos oss?
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="w3-overlay">
</div>
