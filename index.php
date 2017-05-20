<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="bootstrap/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/style-index.css" />
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
        <section id="start">
            <div class="container">
                <?php include 'fixed_part/header.php'; ?>
                <img src="img/tedxjuet-black.png" />
                <h1>hello</h1>
            </div>
        </section>
        <section id="service" >
            <div class="container">
                <div class="row">
                    <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                        <div class="section-heading text-center">
                            <img src="img/tedxjuet-white.png" title="tedxjuet" alt="tedxjuet" style="width: 50%;"/>
                            <p>dfghjkl</p>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="service-box">
                                <div class="service-desc">						
                                    <h5>About TED</h5>
                                    <p>
                                        TED Talks began as a simple attempt to share what happens at TED with the world. Under the moniker "ideas worth spreading," talks were released online. They rapidly attracted a global audience in the millions. Indeed, the reaction was so enthusiastic that the entire TED website has been reengineered around TED Talks, with the goal of giving everyone on- demand access to the world's most inspiring voices. As of November 2012, TED Talks have been viewed more than one billion times.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-box">
                                <div class="service-desc">
                                    <h5>About TEDx</h5>
                                    <p>
                                        TEDx was created in the spirit of TED's mission, "ideas worth spreading." The program is designed to give communities, organizations and individuals the opportunity to stimulate dialogue through TED-like experiences at the local level. At TEDx events, a screening of TEDTalks videos -- or a combination of live presenters and TEDTalks videos -- sparks deep conversation and connections. TEDx events are fully planned and coordinated independently, on a community-by-community basis. The TED conference provides general guidance for the TEDx program, but individual TEDx events are self-organized. Any TEDx aims to bring forth the experiences of people of different walks of life. It aims at sharing those stories that have lost themselves in the hustle on the present day, stories that deserve to be listened to. If you’re eager to know more, brush up on some history at:
                                    </p>
                                    <a href="http://www.ted.com/" target="_blank" class="btn btn-skin">www.ted.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="works" class="home-section color-dark text-center bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                            <div class="section-heading text-center">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            TEDx Introduction
                                        </div>
                                    </div>
                                    <div class="panel-body">
<!--                                        <ul class="list-group">
                                            <li class="list-group-item" ><i class="fa fa-map-marker"></i>  Address : Jaypee University of Engineering & Technology,Raghogarh,Guna(M.P.)</li>
                                            <li class="list-group-item" ><i class="fa fa-phone"></i>  Phone No. : +91-xxxxxxxxxx</li>
                                        </ul>-->
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <!--<iframe class="embed-responsive-item" src=""></iframe>-->
                                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/othM2dwi2bE" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
                            <div class="section-heading text-center">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            Current Updates
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="list-group">
                                            <li class="list-group-item" >Site Has been Launched</li>
                                            <li class="list-group-item" >Details of Speaker will be Uploaded Soon</li>
                                            <li class="list-group-item" >Details of Sponsors will be uploaded Soon</li>
                                            <li class="list-group-item" >Dates will be Announced soon</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'fixed_part/footer.php'; ?>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>
            $(window).bind('scroll', function(){
                if($(window).scrollTop() >= $('#start').offset().top + $('#start').outerHeight()-5) {
                    $("header").addClass("fix");
                    $('header>.container-fluid>.row>.col-xs-6>img').attr('src', 'img/tedxjuet-black.png');
                }
                else{
                    $("header").removeClass("fix");
                    $('header>.container-fluid>.row>.col-xs-6>img').attr('src', 'img/tedxjuet-white.png');
                }
            });
            $(document).ready(function(){
                if($(window).scrollTop() >= $('#start').offset().top + $('#start').outerHeight()-5) {
                    $("header").addClass("fix");
                    $('header>.container-fluid>.row>.col-xs-6>img').attr('src', 'img/tedxjuet-black.png');
                }
                else{
                    $("header").removeClass("fix");
                    $('header>.container-fluid>.row>.col-xs-6>img').attr('src', 'img/tedxjuet-white.png');
                }
            });
        </script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
    </body>
</html>
