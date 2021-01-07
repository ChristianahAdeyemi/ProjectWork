<?php 
include('include/config.php');
include('include/header.php');






?>       

<style> 

header{
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
            }
#about {
    background-image: url(img/amb.jpg);
}

</style>
       
       <div class="container" id="landing">
            <div class="center-align white-text text-darken-4">
                <h2>Search and Find Your <span id="sp" class="#1a237e indigo darken-4">Luxury</span> Homes</h2>
                <p><b>Property for sale & for rent anywhere in Nigeria</b></p>
            </div>

            <div class="row">
                <form class="col s12" action="fetch.php" method="POST">
                  <div class="row">
                      <div class="input-field col s12 l6 ">
                        <label></label>
                            <select class="browser-default" name="status">
                                <option value="" disabled selected>Any Status</option>
                                <!-- <option value="any">Any Status</option> -->
                                <option value="rent">For Rent</option>
                                <option value="sale">For Sale</option>
                            </select>
                      </div>

                      <div class="input-field col s12 l6">
                        <label></label>
                            <select class="browser-default" name="bedroom">
                                <option value="" disabled selected>Bedrooms</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="500Msquare">500Msquare</option>
                            </select>
                      </div>

                      <div class="input-field col s12 l6">
                        <label></label>
                            <select class="browser-default" name="type">
                                <option value="" disabled selected>All Type</option>
                                <option value="apartment">Apartment</option>
                                <option value="restaurant">Restaurant</option>
                                <option value="shop">Shop</option>
                                <option value="villa">Villa</option>
                            </select>
                      </div>

                      <div class="input-field col s12 l6">
                        <label></label>
                            <select class="browser-default" name="location">
                                <option value="" disabled selected>Location</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Abuja">Abuja</option>
                                <option value="PortHarcourt">Port Harcourt</option> <br/>
                            </select>
                      </div>

                        <div class="container center-align">
                        
				            <input type="submit" name="submit" value="Submit" class="btn-large center-align #1a237e indigo darken-4 text-darken-4" id="find">
			
                          <!-- <a class="waves-effect waves-light btn-large center-align #1a237e indigo darken-4 text-darken-4" id="find" href="fetch.php" type="submit">Find Here </a> -->
                        </div>
                  </div>
                </form>
              </div>
    
        </div>

        
    </header> <br/>
<!--header end-->


<!--About us Section-->

    <section id="" class="section scrollspy">
        <div class="container">
            <div class="center align"><h3>Welcome to House<span id="sp">Point</span></h3></div>
            <div class="row">
                <div class="col s12 m6 l6">
                    <img src="img/help2.png" width="100%">
                </div>
                <div class="col s12 m6 l6">
                    <h5><b>The best place to find the house you want.</b></h5>
                    <p>Are you tired of calling agent after agent just to find a house? Are you also tired of paying enormous agency fees for a house you don't even like? House<span id="sp">Point</span> takes all your househunting worries away! </p> <hr/>
                    <p>Find the perfect property for you through our listings all over Nigeria! We also provide you
                        with the opportunity to inspect the property thoroughly before paying any amount! Find
                        your ideal home today with House<span id="sp">Point</span>.</p>

                </div>

            </div>
        

        </div>

    </section>

<!--parallax-->

<section class="section scrollspy" id="sectionp">
    <div id="parallax-container">
        <div class="container center-align">
            <h3 id="par" class="white-text"><b>We Provide The Best Services</b></h3>
            <!-- <h5 id="par_" class="white-text">Excepteur sint occaecat cupidatat</h5> -->
        </div>

        <div class="row container">
            <div class="col s12 m4 l4">
              <div class="card">
                <div class="card-content">
                 <Div class="center-align"><a class="btn-floating waves-effect waves-light red"><i class="material-icons center-align">home</i></a></Div> <br/>
                <span class="card-title center-align">Finding a Property</span> <br/>
                   <p>We help you find a property that fits your dream and budget!</p> <br/>
                <!-- <div class="card-action center-align">
                      <a href="#">Read More</a>
                </div> -->
                </div>
              </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                  <div class="card-content">
                   <Div class="center-align"><a class="btn-floating waves-effect waves-light red"><i class="material-icons center-align">dialpad</i></a></Div> <br/>
                  <span class="card-title center-align">Perfection of title documents</span> <br/>
                     <p>We help you register and perfect all your land documents.</p> <br/>
                  <!-- <div class="card-action center-align">
                        <a href="#">Read More</a>
                  </div> -->
                  </div>
                </div>
              </div>
              <div class="col s12 m4 l4">
                <div class="card">
                  <div class="card-content">
                   <Div class="center-align"><a class="btn-floating waves-effect waves-light red"><i class="material-icons center-align">work</i></a></Div> <br/>
                  <span class="card-title center-align">Consultation</span> <br/>
                     <p>We provide free consultancy services for our customers!</p> <br/>
                  <!-- <div class="card-action center-align">
                        <a href="#">Read More</a>
                  </div> -->
                  </div>
                </div>
              </div>
                      <div class="parallax">
            <!-- <img id="para" src="img/tower.jpg" class="responsive-img"/> -->
            
        </div>

    </div> <br/>
</section>

<!--pupular places-->
<section id="pages" class="section scrollspy">
    <div class="container">
        <div class="container center-align">
            <h4 >Most Popular <span id="sp">Places</span></h4>
            <!-- <h6>Excepteur sint occaecat cupidatat</h6> -->

            
        </div>

        <div class="row" id="places">

                <div class="col s12 m6 l3"><p id="canada">Lekki <br/> Lagos</p></div>
                <div class="col s12 m6 l3"><p id="uk">Eneka <br/> Port-Harcourt</p></div>
                <div class="col s12 m6 l3"><p id="paris" class="white-text">Gwarimpa <br/> Abuja</p> </div>
                <div class="col s12 m6 l3"><p id="usa">Victoria Island <br/> Lagos</p></div>
              </div>
        </div>
    
    </div>

</section>



<section  id="about" class="section scrollspy">
 <div class="container">
    <h3 class="center-align white-text"> Blog Post</h3>

            <div class="row">

                <div class="col s12 m6 l6"> 
                <img src="img/house2.jpg" width="70%"> </br>
                 <h5> <a href="blog.php" class="white-text">Blog Post 1: A sneak peek into real estate in Nigeria </a></h5>
            
                </div>


                <div class="col s12 m6 l6"> 
                <img src="img/house3.jpg" width="70%"> </br>
                 <h5> <a href="blog.php" class="white-text">Blog Post 2: How to Maintain your New Space </a></h5>
            
                </div>
                
        </div>
 
 </div>

</section>
<?php include('include/footer.php'); ?>