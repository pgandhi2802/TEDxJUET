<!DOCTYPE html>
<html>
    <head>
        <title>
            Contact|TEDxJUET
        </title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="bootstrap/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <?php include 'fixed_part/header.php'; ?>
        <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Contact Us
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="process.php" method="post" class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group col-md-8">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea type="text" class="form-control" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="submit" class="form-control">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Information
                            </div>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item" ><i class="fa fa-map-marker"></i>  Address : Jaypee University of Engineering & Technology,Raghogarh,Guna(M.P.)</li>
                                <li class="list-group-item" ><i class="fa fa-phone"></i>  Phone No. : +91-xxxxxxxxxx</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Our Location
                            </div>
                        </div>
                        <div class="panel-body" id="googleMap" style="height: 380px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <?php include 'fixed_part/footer.php'; ?>
    </body>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        var myCenter=new google.maps.LatLng(24.435192, 77.160878);
        function initialize()
        {
            var mapProp = {
                center:myCenter,
                zoom:13,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
            var marker=new google.maps.Marker({
                position:myCenter,
                animation:google.maps.Animation.BOUNCE
            });
            marker.setMap(map);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</html>