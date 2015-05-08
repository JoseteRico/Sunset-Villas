<?php include 'header.php';?>

<!-- banner -->
<div class="banner">
    <img src="images/photos/banner_2.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown" style="color:#717171;">Sunset Villas Resort</h1>
                <!--<p class="animated fadeInUp"><img src="images/logo_banner.png"></p>-->
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->


<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-7 col-md-8">
            <!-- RoomCarousel -->
            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/8.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/9.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/10.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
</div>
<div class="col-sm-5 col-md-4">
<h3>Reservation</h3>
    <form role="form" class="wowload fadeInRight ajaxform" method="post" action="book.php" id="form">
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="Name" name="name" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control"  placeholder="Email" name="email" required>
        </div>
        <div class="form-group">
            <input type="Phone" class="form-control"  placeholder="Phone" name="phone" required>
        </div>        
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
            <select class="form-control" name="rooms">
              <option>No. of Rooms</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            </div>        
            <div class="col-xs-6">
            <select class="form-control" name="adults">
              <option>No. of Adult</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            </div></div>
        </div>
        <fieldset>
            <div class="form-group">
                
                <div class="input-group date form_date" data-date="" data-date-format="yy-m-d" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly placeholder="Check IN" name="checkin">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>                
            </div>

            <div class="form-group">                
                <div class="input-group date form_date" data-date="" data-date-format="yy-m-d" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly placeholder="Check OUT" name="checkout">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>                
            </div>            
         </fieldset>        
        <div class="form-group">
            <textarea class="form-control"  placeholder="Message" rows="4" name="message"></textarea>
        </div>
        <button class="btn btn-default" type="submit" value="Book">Submit</button>
    </form>
</div>
</div>
</div>
</div>
<!-- reservation-information -->

<footer class="spacer">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h4>Sunset Villas</h4>
                    <p>If you say "I must take such a holiday that I should feel myself at home, limitations should be beside the point and what is more, I want my kids to be safe"!!
For such services and a holiday full of confidence in a family environment, in Sunset Villas, we offer you to double your holiday delight in the middle of the Mediterranean coast of Turkey with its deep blue sea, verdant nature and of course, its sunset that you cannot get enough of watching

Sunset Villas are 30 km to the Antalya Airport, 5-10 minutes from the centrum of Kadriye and Belek and 10 minutes' walk from the sea. Over and above, the golf center is also on your doorstep…</p>
                </div>

                 <div class="col-sm-3">
                    <h4>Quick Links</h4>
                    <ul class="list-unstyled">
                        <li><a href="rooms-tariff.php">Tariffs</a></li>
                        <li><a href="location.php">Location</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                 <div class="col-sm-4 subscribe">
                    <h4>Subscription</h4>
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter email id here">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Get Notify</button>
                    </span>
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->

    <!--/.footer-bottom-->
</footer>

<div class="text-center copyright">Powered by <a href="http://www.jrico.es">JRico</a></div>

<a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>




<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
</div>



<!-- -----------------------------------------------------------------------  --> 
<!-- ZONA DE SCRIPTS -->
<script src="js/jquery-1.8.3.min.js"> </script>
<script type="text/javascript" src="js/ajaxform.js"> </script>
<!-- calendar -->
<script type="text/javascript" src="js/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>

<!-- uniform -->
<script src="assets/uniform/js/jquery.uniform.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>

<!-- jquery mobile -->
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>


<!-- custom script -->
<script src="assets/script.js"></script>




<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
    </script>






</body>



</html>

