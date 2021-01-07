<!--footer-->
<section id="foot" class="section scrollspy">
        <footer class="page-footer #1a237e indigo darken-4">
            <div class="container">
                <div class="row">
                    <div class="col s6 m6 l6">
                        <h5 class="white-text">About us</h5>
                        <p>HousePoint is an initiative run by 4 members: Bolanle Adeoti Dada, Oluwakemi Green
                            Ibrahim, Adesanya Adejumoke Aderonke and Christianah Adeyemi. They established
                            HousePoint out of the need to make the search for housing in Nigeria much easier and
                            faster.
                           </p>
                           <ul>
                               <p><b> Board of Directors </b> </p>
                                <li>Mrs. Stella Iwuchukwu</li>
                                <li>Mr. Nelson</li>
                           </ul>

                    </div>
                    <div class="col l4 offset-l2  m6 s12">
                        
                        <ul>
                        
                        <li><a class="grey-text text-lighten-3" href="#!">Services</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Board of Directors</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Advertise with us</a></li> 
                        <li><a class="grey-text text-lighten-3" href="#!">Contact</a></li>
                        <li> <i class="tiny material-icons prefix">call</i> 08111111111;</li> 
                        <li><i class="tiny material-icons prefix">email</i>Housepoint@gmail.com</li>
                        <li><a class="grey-text text-lighten-3" href="#!"></a></li>
                        <br/>

                        <div class="">
                            <!-- <li><a class="waves-red waves-light btn social dropbox"><i class="fa fa-google"></i></a></li> -->
                            <button class="btn btn-small facebook waves-light #01579b light-blue darken-4" data-provider="facebook"><i class="fab fa-facebook-f"></i></button>
                            <button class="btn btn-small twitter #81d4fa light-blue lighten-3" data-provider="twitter"><i class="fab fa-twitter"></i></button>
                            <!-- <button class="btn google #d84315 deep-orange darken-3" data-provider="google"><i class="fab fa-google"></i></button> -->
                            <button class="btn btn-small instagram #ff4081 pink accent-2" data-provider="instagram"><i class="fab fa-instagram"></i></button>
                            <button class="btn btn-small linkedin #2196f3 blue" data-provider="linkedin"><i class="fab fa-linkedin"></i></button> <br/>         
                        </div>
                        </ul>
                    </div>
                </div>
            </div>
        
            <div class="footer-copyright  black">
                <p class="grey-text text-lighten-4 container center-align"> © 2020 Designed by Stream 1 Group 2 </p>
            </div>
        </footer>
    </section>
    <!--footer end-->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    // <!--Sidenav-->
  var elem = document.querySelector('.sidenav');
  var instance = new M.Sidenav(elem, {});

  var dropdowns = document.querySelectorAll('.dropdown-trigger')
for (var i = 0; i < dropdowns.length; i++){
    M.Dropdown.init(dropdowns[i]);
}

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, {});
  });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems, {});
  });

</script>
</body>
</html>