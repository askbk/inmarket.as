<!DOCTYPE html>
<html>

<head>
    <title>Jobseekers | InMarket</title>
    <?php include_once 'templates/head.php'; ?>
</head>

<body>
    <?php
    include_once 'templates/navigation.php';
    include_once 'templates/cookie_notice.php';
    ?>

    <div class="margin-top-100 bgimg-dressmannsvart full-height parallax-img w3-display-container">
        <div class="w3-display-bottommiddle white-text mobile-large w3-center max-width-1200 width-100 w3-container" style="bottom :40px; line-height:1.2;text-shadow: 1px 1px 2px rgba(0,0,0, 0.3)">

            <p>Getting into the job market isn’t as easy as it used to be. Jobs are getting replaced by robots and the level of globalization is ever-increasing.</p>
            <p>InMarket lets you explore the opportunities of jobs all over again. Along with our partners we are opening new doors for your carrer.</p>
            <p>We'll help you, whether it’s through workshops, regular company visits, or courses.</p>

        </div>
    </div>
    <br>
    <br><div class="w3-card" style="max-width:870px;margin:auto;">
        <div class="w3-padding-32 w3-container w3-center w3-xlarge" style="padding-left:25px;">
            <div class="w3-left w3-mobile" style="width:225px; padding-top:30px;">
                <img src="img/fig/arbeidssokere.png" alt="Figure" style="width:60%;">
                <p>Jobseekers</p>
            </div>


            <div class="w3-left w3-mobile testt" >
                <div class="w3-row">
                    <div class="w3-col m3 w3-hide-small" style="padding-top:30px;">
                        <object type="image/svg+xml" data="img/fig/arrow-right.svg" class="w3-left" style="width:100%"></object>
                    </div>
                    <div class="w3-col m3 w3-hide-medium w3-hide-large">
                        <object type="image/svg+xml" data="img/fig/arrow-down.svg" class="" style="width:90px"></object>
                    </div>
                    <div class="w3-col m9" style = "line-height: 0.5; ">
                        <p>Activities</p>
                        <p>Projects</p>
                        <p>Available positions</p>
                        <p>Workshops and</p>
                        <p>courses</p>
                    </div>
                </div>
            </div>

            <div class="w3-left w3-mobile testt" >
                <div class="w3-row">
                    <div class="w3-col m3 w3-hide-small" style="padding-top:30px;">
                        <object type="image/svg+xml" data="img/fig/arrow-right.svg" class="w3-left" style="width:100%"></object>
                    </div>
                    <div class="w3-col m3 w3-hide-medium w3-hide-large">
                        <object type="image/svg+xml" data="img/fig/arrow-down.svg" class="" style="width:90px"></object>
                    </div>
                    <div class="w3-col m9" style="padding-top:30px;">
                        <img src="img/fig/ledelse.jpg" alt="Figure" class="width-25-percent">
                        <p>Employers</p>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="">

        <article class="narrow-content mobile-large w3-container w3-padding-large w3-center">
            <p>With InMarket you can apply at relevant and nearby companies. This can happen through company invitation or you can send them a request to meet.</p>
        </article>

        <div class="narrow-content">
            <hr class="w3-container golden-hr">
        </div>

        ​​<article class="narrow-content mobile-large w3-container w3-padding-large w3-center">

            <p>Make a profile to document your visits at the different companies. We are always looking to improve our offer of available positions and industries, so that you can have a wide variety of workplaces to choose from. Have a look at the available positions, or pre-register so that you are ready to get started! </p>

        </article>

        <div class="w3-content w3-center w3-padding-16 w3-container w3-xlarge">
            <a href="forhandsregistrering.php" class="black-button w3-card" onclick="arbeidssokerClient();">
                Pre-register
            </a>
        </div>

        <a href="openings.php" class="black-button w3-card w3-bar w3-xxlarge">Available positions</a>
    </div>
    <div class="w3-display-container parallax-img bgimg-allinclusive-3" style="height:70vh;">
        <div class="w3-display-bottomright text-shadow w3-jumbo white-text" style="right:5%;bottom:5%;">
            WORKSHOP
        </div>
    </div>

    <div class="black-bg">
        <article class="w3-content w3-xlarge w3-container white-text">
            <p>At our workshops you will learn to communicate better, particularly in work related situations. Whether it’s about nailing that pitch, resolving communication difficulties with colleagues, or improving your interview skills, we can help you.  ​</p>
            <p>We will also teach you some exercises you can apply to your day to day life in order to improve your use of voice and communication. </p>
        </article>
    </div>
    <article class="w3-content w3-xlarge w3-container w3-center w3-padding">
        <p>PS: Are you an employee who wants to attend a workshop with InMarket and All Inclusive Talk? If so, tell your employer to order a workshop from us. </p>
        <a href="bedrift.php#workshop-anchor" class="black-button w3-card" style="white-space:normal;">Order Workshop Here</a>
    </article>

    <!-- Footer -->
    <?php include_once 'templates/footer.php'; ?>
</body>

</html>