<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Map Plotting Of Earthquakes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="m/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <style type="text/css">
        body {
            background-image: url('..m/img/header.jpg');
        }
        
        .topbar {
            background: #00001C;
            border-color: #00001C;
            border-radius: 0px;
            border-width: 10px;
        }
        
        .topbar .navbar-header a {
            color: #ffffff;
        }
        
        .wrapper {
            padding-left: 0px;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }
        
        .sidebar {
            z-index: 1000;
            position: fixed;
            top: 50px;
            left: -50px;
            width: 60px;
            height: 710px;
            overflow-y: auto;
            background: #00001C;
            color: #ffffff;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }
        
        .main {
            width: 100%;
            position: relative;
        }
        
        .wrapper.toggled {
            padding-left: 50px;
        }
        
        .wrapper.toggled .sidebar {
            left: 0;
        }
        
        .head img {
            float: left;
            width: 70px;
            height: 80px;
            padding-top: 0px;
        }
        
        .head img2 {
            width: 50px;
            height: 20px;
        }
        
        #navigation ul {
            margin: 0;
            padding: 0;
        }
        
        #navigation ul li {
            list-style-type: none;
            display: inline;
        }
        
        #navigation li:not(:first-child):before {
            color: wheat;
            content: " | ";
        }
        /* Sidebar Styles */
        
        .sidebar-nav {
            position: left;
            top: 0px;
            width: 60px;
            margin: 0 px;
            padding: 0;
            list-style: none;
        }
        
        .sidebar-nav li {
            line-height: 40px;
        }
        
        .sidebar-nav li a {
            display: block;
            text-decoration: none;
            color: #e8e8e8;
            padding: 0;
            text-align: center;
        }
        
        .sidebar-nav li a:hover,
        .sidebar-nav li.active a {
            text-decoration: none;
            color: #03a2aa;
            background: #fff;
            background: rgba(255, 255, 255, 0.2);
        }
        
        .sidebar-nav li a:active,
        .sidebar-nav li a:focus {
            text-decoration: none;
        }
        
        .sidebar-nav li span,
        .subbar li span {
            display: none;
        }
        
        nav.subbar {
            position: relative;
            width: 100%;
            border-radius: 0px;
            background: #fff;
            margin: 50px 0 0 0;
            padding: 10px 0 0 0;
            z-index: 2;
        }
        
        nav.subbar>ul.nav.nav-tabs {
            padding: 0 5px;
        }
        
        nav.subbar>ul.nav.nav-tabs>li.active>a {
            background: #dedede;
            border-top: 1px solid #a6a6a6;
            border-left: 1px solid #a6a6a6;
            border-right: 1px solid #a6a6a6;
            border-radius: 0px;
        }
        
        .content {
            margin-top: 70px;
            padding: 0 30px;
        }
        
        @media(min-width:768px) {
            .subbar li span {
                display: inline;
            }
        }
        
        @media(min-width:992px) {
            .wrapper {
                padding-left: 50px;
            }
            .sidebar {
                left: 0;
                width: 50px;
            }
            .wrapper.toggled {
                padding-left: 200px;
            }
            .wrapper.toggled .sidebar,
            .wrapper.toggled .sidebar-nav {
                width: 200px;
            }
            .wrapper.toggled .sidebar-nav li a {
                text-align: left;
                padding: 0 0 0 10px;
            }
            .wrapper.toggled .sidebar-nav li span {
                display: inline;
            }
        }
        
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>

<body>
    <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">

    <nav class="navbar navbar-fixed-top topbar">
        <p class="navbar-text">
            <a href="#" class="sidebar-toggle">
                <i class="fa fa-bars fa-2x"></i>
            </a> 
        </p>
        <div id="navigation">
            <ul>
                <div class="head img">
                    <li>
                        <a href="home.php"><img src="m\img\logo.jpg "></a>
                    </li>
                </div>
                <div>
                    <li>
                        <a href="home.php"><img src="m\img\slogan.png"></a>
                    </li>
                </div>

            </ul>
                    </div>

        </div>
    </nav>
    <article class="wrapper">

        <aside class="sidebar">
            <ul class="sidebar-nav">
                <li class="active"><a href="home.php" ><i class="fa fa-home fa-2x"></i> <span>&nbsp Home</span></a></li>
                <li>
                    <a href="cluster9.php" ><img src="m\img\plotting.png" height="30px" width="30px"><span>&nbsp Earthquakes Plotting</span></a>
                </li>
                <li>
                    <a href="magnfinquery.php"><img src="m\img\earthquake.png" height="30px" width="30px"><span>&nbsp Earthquake Hazards</span></a>
                </li>
                <li>
                    <a href="obj1.php"><img src="m\img\observatory.png" height="30px" width="30px"><span>&nbsp Seismic Observatory</span></a>
                </li>
                <li>
                    <a href="zones.php"><img src="m\img\seismiczone.png" height="30px" width="30px"><span>&nbsp Seismic Zones</span></a>
                </li>
                <li>
                    <a href="heat.php"><img src="m\img\Ehazard.png" height="30px" width="30px"><span>&nbsp Hazard Map</span></a>
                </li>
                <li>
                    <a href="mailusingphp.php"><img src="icon\liveicon.png" height="30px" width="30px"><span>&nbsp Live</span></a>
                </li>
                <li><a href="bootstrap-contact-forms/form-1/index.html"><i class="fa fa-info-circle fa-2x"></i><span>&nbsp Contact</span></a></li>
            </ul>
        </aside>
    </article>



    <!-- jQuery -->
    <script src="m/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="m/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="m/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="m/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="m/js/creative.min.js"></script>

    <script type="text/javascript">
        $(document).on("click", ".sidebar-toggle", function() {
            $(".wrapper").toggleClass("toggled");
        });
    </script>
    
</body>


</html>