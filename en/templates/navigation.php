<!-- Fixed navbar-->
<div class="w3-top white-bg white-bg w3-card z-index-3">
    <div class="w3-bar w3-xxlarge w3-center line-height-3" id="navbar">
        <a href="index.php" class="w3-bar-item line-height-1">
            <img src="img/logos/inmarketlogo2.svg" height="72px" alt="InMarket logo" id="navbar-img">
        </a>

        <div class = "w3-right w3-small" style="margin-top:25px"  >

            <a href="/index.php" >
                <img src="img/norway-lang-button.png" height="20px" alt="norwegian" >
            </a>


            <a href="/en/index.php">
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
                        <b>Our offer</b>
                    </li>
                    <li>
                        <a href="bedrift.php" class="golden-accent-bottom">
                            Companies
                        </a>
                    </li>
                    <li>
                        <a href="elever-studenter.php" class="golden-accent-bottom">
                            Students and pupils
                        </a>
                        <ul class="w3-ul">
                            <li style="padding-left:16px !important;">
                                <a href="openings.php" class="golden-accent-bottom">
                                    Available projects
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="arbeidssoker.php" class="golden-accent-bottom">
                            Jobseekers
                        </a>
                        <ul class="w3-ul">
                            <li style="padding-left:16px !important;">
                                <a href="openings.php" class="golden-accent-bottom">
                                    Vacancies
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="column">
                <ul class="w3-ul">
                    <li>
                        <b>About</b>
                    </li>
                    <li>
                        <a href="teamet.php" class="golden-accent-bottom">
                            The team
                        </a>
                    </li>
                    <li>
                        <a href="om.php" class="golden-accent-bottom">
                            Vision and goal
                        </a>
                    </li>
                    <li>
                        <a href="#" class="golden-accent-bottom">
                            History
                        </a>
                    </li>
                </ul>
            </div>
            <div class="column">
                <ul class="w3-ul">
                    <li>
                        <b>News</b>
                    </li>
                    <li>
                        <a href="aktiviteter.php" class="golden-accent-bottom">
                            What's up?
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/pg/InMarketNorge/events/" class="golden-accent-bottom">
                            Upcoming events
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="w3-overlay">
</div>
