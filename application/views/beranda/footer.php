 <!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">KALIBER</a>. SMK Negeri 5 Jember.
                </div>
                
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script src="<?php echo base_url(); ?>layout/assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>layout/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>layout/assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url(); ?>layout/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>layout/assets/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url(); ?>layout/assets/js/main.js"></script>


       <!--Scroll to top-->
        <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
        <!--End of Scroll to top-->


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>-->
        <script src="<?php echo base_url(); ?>layout/assets/js2/jquery-1.12.3.min.js"></script>

        <!--Counter UP Waypoint-->
        <script src="<?php echo base_url(); ?>layout/assets/js2/waypoints.min.js"></script>
        <!--Counter UP-->
        <script src="<?php echo base_url(); ?>layout/assets/js2/jquery.counterup.min.js"></script>

         <script>
            //for counter up
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        </script>

        <!--Gmaps-->
        <script src="js/gmaps.min.js"></script>
        <script type="text/javascript">
            var map;
            $(document).ready(function () {
                map = new GMaps({
                    el: '#map',
                    lat: 23.6911078,
                    lng: 90.5112799,
                    zoomControl: true,
                    zoomControlOpt: {
                        style: 'SMALL',
                        position: 'LEFT_BOTTOM'
                    },
                    panControl: false,
                    streetViewControl: false,
                    mapTypeControl: false,
                    overviewMapControl: false,
                    scrollwheel: false,
                });


                map.addMarker({
                    lat: 23.6911078,
                    lng: 90.5112799,
                    title: 'Office',
                    details: {
                        database_id: 42,
                        author: 'Foysal'
                    },
                    click: function (e) {
                        if (console.log)
                            console.log(e);
                        alert('You clicked in this marker');
                    },
                    mouseover: function (e) {
                        if (console.log)
                            console.log(e);
                    }
                });
            });
        </script>
        <!--Google Maps API-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjxvF9oTfcziZWw--3phPVx1ztAsyhXL4"></script>


        <!--Isotope-->
        <script src="<?php echo base_url(); ?>layout/assets/js2/isotope/min/scripts-min.js"></script>
        <script src="<?php echo base_url(); ?>layout/assets/js2/isotope/cells-by-row.js"></script>
        <script src="<?php echo base_url(); ?>layout/assets/js2/isotope/isotope.pkgd.min.js"></script>
        <script src="<?php echo base_url(); ?>layout/assets/js2/isotope/packery-mode.pkgd.min.js"></script>
        <script src="<?php echo base_url(); ?>layout/assets/js2/isotope/scripts.js"></script>


        <!--Back To Top-->
        <script src="<?php echo base_url(); ?>layout/assets/js2/backtotop.js"></script>


        <!--JQuery Click to Scroll down with Menu-->
        <script src="<?php echo base_url(); ?>layout/assets/js2/jquery.localScroll.min.js"></script>
        <script src="<?php echo base_url(); ?>layout/assets/js2/jquery.scrollTo.min.js"></script>
        <!--WOW With Animation-->
        <script src="<?php echo base_url(); ?>layout/assets/js2/wow.min.js"></script>
        <!--WOW Activated-->
        <script>
            new WOW().init();
        </script>



</body>

</html>