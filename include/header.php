<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Land</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
            /* header{
                background-image: url(img/real1.jpg);
                background-size: cover;
                background-position: center;
                height: 580px;
                opacity: 0.9 ;
            }
            @media screen and (max-width: 670px) {
                header{
                    min-height: 700px;
                }
            } */

            #try{
                margin-top: 2rem;
                padding-left: 30px;
            }

            .dropdown-content{
                width: max-content !important;
                height:auto !important;
            }
            #landing {
                margin-top: 2.5rem;
            }

            form {
                margin-top: 2rem;
            }

            #find{
                margin-top: 2rem;
            }

            .parallax-container {
            height: "800px";
            /* background-image: url(img/tower.jpg); */
            }

            #sectionp{
                background-image: url(img/tower.jpg);
            }

            #sp {
                color: #ff6b6b;
            }

            #para {
                opacity: 0.2;
            }

            #par {
                margin-top: 3rem;
            }

            #card {
                padding-top: 3rem;
            }

            #canada{
                background-image: url(img/canada.jpg);
                background-size: cover;
                background-position: center;
                height: 300px;
                opacity: 0.9;
                /* margin-right: 1.em; */
                
            }

            #places{
                margin-top: 2rem;
            }

            #uk{
                background-image: url(img/uk.jpg);
                background-size: cover;
                background-position: center;
                height: 300px;
                opacity: 0.9;
                /* margin-right: 1em; */
                
            }

            #usa{
                background-image: url(img/usa.jpg);
                background-size: cover;
                background-position: center;
                height: 300px;
                opacity: 0.9;
                /* margin-right: 1em; */
            }
            #paris{
                background-image: url(img/paris.jpg);
                background-size: cover;
                background-position: center;
                height: 300px;
                opacity: 0.9;
                /* margin-right: 1em; */
            }



    </style>
   
</head>

<body>
    <!--header, navbar and sidenav-->

    <header>
        <div class="navbar-fixed ">
        <nav class="nav-wrapper #1a237e indigo darken-4">
            <div class="container">
                    <a href="index.php" class="brand-logo">House<span id="sp">Point</span></a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a class="white-text text-darken-4" href="#header">Home</a> </li>
                        <li><a class="white-text text-darken-4" href="#pages">Find a Property</a> </li>
                        <li><a class="dropdown-trigger white-text text-darken-4" href="#!" data-target="dropdown1">Pages<i class="material-icons right " id="drop">arrow_drop_down</i></a></li>
                        <li><a class="white-text text-darken-4" href="#about">Blog</a> </li>
                        <li><a class="white-text text-darken-4" href="#foot">Contact Us</a> </li>
                        
                        
                    </ul>
            </div>
                
        </nav>
        </div>
<!--Sidenave structure-->
<ul class="sidenav" id="mobile-demo">
            <li><a href="index.html">Home</a> </li>
            <li><a href="#pages">Find a Property</a> </li>
            <li><a href="#about">Pages</a> </li>
            <li><a href="#sectionp">Blog</a> </li>
            <li><a href="#foot">Contact Us</a> </li>
        </ul>

<!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
        <li><a  class="black-text" href="#about">About Us</a></li>
        <li><a  class="black-text" href="#sectionp">Services</a></li>
        <li class="divider"></li>
        <li><a  class="black-text" href="#about">Gallery</a></li>
    </ul>