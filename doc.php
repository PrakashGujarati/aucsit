<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AU-CS&IT</title>

	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">    
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="js/jquery-3.3.1.min.js"></script>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Event Counter Begin -->
    <section class="event-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="event-name">
                        <h2>How to connect in Summer School ?</h2>
                        <h4 style="font-size: 22px !important;"><img src="img/doc/icon.png" width="30px;"> Cisco Webex - to join Event</h4>
                    </div>
                </div>              
            </div>
        </div>
    </section>
    <!-- Event Counter End -->


    <!-- Tickets Price Area Begin -->
    <section class="tickets-table-price spad">
        <div class="container">
           <div class="row">
            <div class="col-lg-12">
              <h2 class="text-grey">Mobile Users</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h4>Start an Instant Meeting following this steps..</h4>
            </div>
          </div>
          <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="tickets-table">
                        <div class="table-price text-center">
                            <p class="price" style="font-size:20px;">Open Given URL(Link) </p>                     
                            <h2 class="table-title"><img src="img/doc/00.jpeg"></h2>                                   
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tickets-table">
                        <div class="table-price text-center">
                            <p class="price" style="font-size:20px;">Select download webex from store </p>                     
                            <h2 class="table-title"><img src="img/doc/01.jpeg"></h2>                                   
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tickets-table">
                        <div class="table-price text-center">
                            <p class="price" style="font-size:20px;">Install Cisco Webex </p>                     
                            <h2 class="table-title"><img src="img/doc/02.jpg"></h2>                                   
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tickets-table">
                        <div class="table-price text-center">
                            <p class="price" style="font-size:20px;">Accept Meeting Terms </p>                     
                            <h2 class="table-title"><img src="img/doc/03.jpeg"></h2>                                   
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tickets-table">
                        <div class="table-price text-center">
                            <p class="price" style="font-size:20px;">Enter Your Name & Email </p>                     
                            <h2 class="table-title"><img src="img/doc/04.jpeg"></h2>                                   
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tickets-table">
                        <div class="table-price text-center">
                            <p class="price" style="font-size:20px;">Join Meeting</p>                     
                            <h2 class="table-title"><img src="img/doc/05.jpeg"></h2>                                   
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tickets-table">
                        <div class="table-price text-center">
                            <p class="price" style="font-size:20px;">Enter Password</p>                     
                            <h2 class="table-title"><img src="img/doc/06.jpeg"></h2>                                   
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tickets-table">
                        <div class="table-price text-center">
                            <p class="price" style="font-size:20px;">Enjoy with Lecture</p>                     
                            <h2 class="table-title"><img src="img/doc/07.jpeg"></h2>                                   
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tickets-table">
                        <div class="table-price text-center">
                            <p class="price" style="font-size:20px;">Queries</p>                     
                            <h2 class="table-title"><img src="img/doc/08.jpeg"></h2>                                   
                        </div>
                    </div>
                </div>
            </div>    
                    
        </div> 
    </section>
    <!-- Tickets Price Area End -->


    <!-- Js Plugins -->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        $(".countdown-timer")
        .countdown("2020/06/02, 10:00:00 AM", function(event) {
            var totalHours = event.offset.totalDays * 24 + event.offset.hours;
            $(this).html(event.strftime(totalHours + ' hr %M min %S sec'));
        });
      </script>
</body>

</html>
