<footer>
    <div class="footer">
        <div style="padding:15px!important;" class="container">
            <div class="social-icon">
                <div class="col-md-4">
                    <img style="width: 40%; margin:30px auto!important;"  src="images/to2.png"/>
                    <p style="color:#fff;">Tryout Membantu para pelajar untuk berlatih mengerjakan soal dengan praktis</p>
                    <ul class="social-network">
                        <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>	
                </div>
            </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="copyright">
                    &copy; 2016 by GinanjarDP Themes. All Rights Reserved.
                </div>
            </div>						
        </div>
        <div class="pull-right">
            <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
        </div>		
    </div>
</footer>

</html>
<!-- ============== jQuery Library ============== -->
<script src="js/jquery-2.1.1.min.js"></script>
<!-- ============== Bootstrap js Library ============== -->
<script src="js/bootstrap.min.js"></script>
<!-- ============== Responsive tab Library ============== -->
<script src="js/responsive-tabs.js"></script>
<!-- ============== pretty js Library ============== -->
<script src="js/jquery.prettyPhoto.js"></script>
<!-- ============== isotope js Library ============== -->
<script src="js/jquery.isotope.min.js"></script>  
<!-- ============== wow js Library ============== -->
<script src="js/wow.min.js"></script>
<!-- ============== custome js Library ============== -->
<script src="js/functions.js"></script>
<!-- ============== Lightbox Bootstrap js Library ============== -->
<script src="dist/ekko-lightbox.js"></script>
<!-- ============== chart canvas js Library ============== -->
<script src="js/canvasjs.min.js"></script>
    <!-- =========== Start Script Bar Chart =========== -->
    <script type="text/javascript"> 
        window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer", {
                theme: "theme5",//theme1
                    title:{
                    text: "Chart Nilai Rata - Rata per MataPelajaran TryOut "              
                    },
                animationEnabled: false,   // change to true
                data: [              
                    {
                    // Change type to "bar", "area", "spline", "pie",etc.
                    type: "column",
                        dataPoints: [
                        { label: "Biologi",  y: 10  },
                        { label: "orange", y: 15  },
                        { label: "banana", y: 25  },
                        { label: "mango",  y: 30  },
                        { label: "grape",  y: 28  },
                        ]
                    }
                ]
            });
            chart.render();
        }
    </script>
    <!-- =========== End Script Bar Chart =========== -->
    <!-- =========== Start Lightbox Script Boostrap =========== -->
    <script type="text/javascript">
        $(document).ready(function ($) {
            // delegate calls to data-toggle="lightbox"
            $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
                event.preventDefault();
                return $(this).ekkoLightbox({
                onShown: function() {
                if (window.console) {
                return console.log('Checking our the events huh?');
                }
                },
                onNavigate: function(direction, itemIndex) {
                if (window.console) {
                return console.log('Navigating '+direction+'. Current item: '+itemIndex);
                }
                }
                });
            });
            //Programatically call
            $('#open-image').click(function (e) {
                e.preventDefault();
                $(this).ekkoLightbox();
            });
            $('#open-youtube').click(function (e) {
                e.preventDefault();
                $(this).ekkoLightbox();
            });
            // navigateTo
            $(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
                event.preventDefault();
                    var lb;
                    return $(this).ekkoLightbox({
                    onShown: function() {
                        lb = this;
                        $(lb.modal_content).on('click', '.modal-footer a', function(e) {
                        e.preventDefault();
                        lb.navigateTo(2);
                        });
                    }
                });
            });
        });
    </script>
    <!-- =========== End Lightbox Script Boostrap =========== -->
    <!-- =========== Start Responsive Menu Nav Script =========== -->
    <script>
        $(document).ready(function() {
            $('a[href="#navbar-more-show"], .navbar-more-overlay').on('click', function(event) {
            event.preventDefault();
            $('body').toggleClass('navbar-more-show');
            if ($('body').hasClass('navbar-more-show'))	{
            $('a[href="#navbar-more-show"]').closest('li').addClass('active');
            }else{
            $('a[href="#navbar-more-show"]').closest('li').removeClass('active');
            }
            return false;
            });
        });
    </script>
    <!-- =========== Start Responsive Menu Nav Script =========== -->
    <!-- =========== Start Tab Script =========== -->
    <script type="text/javascript">
        $( 'ul.nav.nav-tabs  a' ).click( function ( e ) {
            e.preventDefault();
            $( this ).tab( 'show' );
        });
        (function($) {
        // Test for making sure event are maintained
        $( '.js-alert-test' ).click( function () {
        alert( 'Button Clicked: Event was maintained' );
        } );
        fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );
        })( jQuery );
    </script>
    <!-- =========== End Tab Script =========== -->
    <!-- =========== Start Tetap di Sebelumnya Tab meskipun di refresh page (Script) =========== -->
    <script type="text/javascript">
        $(function() { 
        // for bootstrap 3 use 'shown.bs.tab', for bootstrap 2 use 'shown' in the next line
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        // save the latest tab; use cookies if you like 'em better:
        localStorage.setItem('lastTab', $(this).attr('href'));
        });
        // go to the latest tab, if it exists:
        var lastTab = localStorage.getItem('lastTab');
        if (lastTab) {
        $('[href="' + lastTab + '"]').tab('show');
        }
        });
    </script>
    <!-- =========== End Tetap di Sebelumnya Tab meskipun di refresh page (Script) =========== -->
    <!-- =========== Start Remove auto start slider bootstrap carousel =========== -->
    <script type="text/javascript">
        $('.carousel').carousel({
        interval: false
        }); 
    </script>
    <!-- =========== Start Remove auto start slider bootstrap carousel =========== -->
    <!-- =========== Start Tile Description Toogle =========== -->
    <script type="text/javascript">
        $(document).ready(function () {
        //Initialize tooltips
        $('.nav-tabs > li a[title]').tooltip();
        });
        $(document).ready(function () {
        //Initialize tooltips
        $('.btn-gdp[title]').tooltip();
        });
    </script>
    <!-- =========== End Tile Description Toogle =========== -->
    <!-- ================ Start Next Prev Tab ============ -->
    <script type="text/javascript">
        var $tabs = $('#myTab li');
        $('#prevtab').on('click', function() {
        $tabs.filter('.active').prev('li').find('a[data-toggle="tab"]').tab('show');
        });
        $('#nexttab').on('click', function() {
        $tabs.filter('.active').next('li').find('a[data-toggle="tab"]').tab('show');
        });
    </script>
    <!-- ================ End Next Prev Tab ============ -->
    <!-- ================ Start Accordion Tab ============ -->
    <script type="text/javascript">
        $('.closeall').click(function(){
        $('.panel-collapse.in')
        .collapse('hide');
        });
        $('.openall').click(function(){
        $('.panel-collapse:not(".in")')
        .collapse('show');
        });
    </script>
<!-- ================ end Accordion Tab ============ -->
</body>
</html>