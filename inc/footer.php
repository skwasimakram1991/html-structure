<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <h3>Contact</h3>
                <ul class="cont-info">
                    <li>
                    <i class="fas fa-map-marker-alt"></i> 123, Dummy street, USA
                    </li>
                    <li>
                    <i class="fas fa-paper-plane"></i><a href="#">infocontact@gmail.com</a>
                    </li>
                    <li>
                    <i class="fas fa-phone-volume"></i><a href="#">0123456789</a>
                    </li>
                    <li>
                    <i class="fab fa-whatsapp"></i><a href="#">013456789</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-3">
                <h3>Quick Links</h3>
                <ul class="menu">
                    <li><a href="#">Home </a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4">
                <h3>Newsletter</h3>
                <p>Subscribe to our Newsletter & Event
                    right now to be updated.</p>
                <form action="">
                    <input type="text" placeholder="Email *">
                    <input type="submit" value="">
                </form>
                <h3>Follow Us</h3>
                <ul class="social">
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <h5> © 2021  All Rights Reserved by Talagund Holdings.</h5>
            </div>
            <div class="col-lg-6 col-md-6">
                <h6><a href="#">Privacy Policy</a> | <a href="#">Legal Notice</a> | <a href="#">Support</a></h6>
            </div>
        </div>
    </div>
</footer>
<!--  <a href="#0" class="cd-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>     -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.slimNav_sk78.min.js"></script>


<script type="text/javascript">
$(document).ready(function() {
    $('#navigation nav').slimNav_sk78();

    var owl = $('.banner-part');
    owl.owlCarousel({
        autoPlay: 4000, //Set AutoPlay to 3 seconds
        items: 1,
        nav: false,
        dots: true,
        loop: true,
        autoplay: true,
        smartSpeed: 1500,
        autoplayTimeout: 4000,

    });

    var owl = $('.cata-cara');
    owl.owlCarousel({
        autoPlay: 4000, //Set AutoPlay to 3 seconds
        items: 3,
        nav: true,
        dots: false,
        margin: 30,
        loop: true,
        autoplay: true,
        smartSpeed: 1500,
        autoplayTimeout: 4000,

        responsive: {
            0: {
                items: 1,
                nav: false,
                dots: true,
            },

            // breakpoint from 768 up
            768: {
                items: 2,
                nav: false,
                dots: true,
            },
            1024: {
                items: 2,
                nav: true,
                dots: false,
            }
        }
    });
});
</script>
</body>

</html>