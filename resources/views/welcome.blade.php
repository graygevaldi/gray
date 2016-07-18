<!DOCTYPE html>
<html>
    <head>
        {!! Html::script(elixir('js/app.js')) !!}
        {!! Html::style(elixir('css/app.css')) !!}
        
        <title>Laravel</title>


        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }
            .title {
                font-size: 96px;
            }
            .banner3{
                margin-top: -20px;
                background:url(image/bnr3.jpg) no-repeat 0px 0px;
                background-size:cover;
                min-height:605px;
            }
            .banFont {
                width: 59%;
                position: absolute;
                top: 37%;
                left: 20%;
                text-align: center;
                color:white;
            }
            .bottom{
                padding-top: 15px;
                color:white;
                text-align: right;
            }
            .col-md-4{
                text-align: center;
            }
            .arrival-info{
                margin-bottom: 50px;
                color:black;
            }
            .offers{
                margin-top: 50px;
                text-align:center;
                font-family: 'Dosis-Medium';
                font-size:2.2em;
                position:relative;
            }
            .top{
                font-size: 20px;
            }
        </style>
    </head>
    <body>

        <div class="row">
            <div class="top">
            <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <div class="col-sm-6">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                   <span class="sr-only">Toggle navigation</span>
                                   <span class="icon-bar"></span>
                                   <span class="icon-bar"></span>
                                   <span class="icon-bar"></span>
                               </button>
                  <img src="images/electric.png" width="300px" height="50px">
                </div>
            </div>
            <div class="col-sm-6">

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="welcome">Home</a></li>
                  <li><a href="product">Product</a></li>
                  <li><a href="about">About</a></li> 
                  <li><a href="contact">Contact Us</a></li> 
                </ul>
            </div>
              </div>
            </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="banner3">
                    <div class="banFont">
                        <h1>THE BEST LIGHTING EVER</h1>
                        <p>Dapatkan diskon hingga 70% sekarang juga!</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="offers">
            <h3>End of Season Sale</h3>
        </div>

        <div class="row">
             <div class="col-md-4">
                 <a href="product"><img src="images/img1.jpg" width="195px" height="243px" alt=""/> 
                     <div class="arrival-info">
                         <h4>Lighting #1</h4>
                         <p>Rp 12000</p>
                         <span class="pric1"><del>Rp 18000</del></span>
                         <span class="disc">[12% Off]</span>
                     </div>
                  </a>
             </div>
             <div class="col-md-4">
                 <a href="product"><img src="images/img2.jpg" width="195px" height="243px" alt=""/> 
                     <div class="arrival-info">
                         <h4>Lighting #1</h4>
                         <p>Rp 10000</p>
                         <span class="pric1"><del>Rp 14000</del></span>
                         <span class="disc">[14% Off]</span>
                     </div>
                  </a>
             </div>
             <div class="col-md-4">
                 <a href="product"><img src="images/img3.jpg" width="195px" height="243px" alt=""/> 
                     <div class="arrival-info">
                         <h4>Lighting #1</h4>
                         <p>Rp 8500</p>
                         <span class="pric1"><del>Rp 9500</del></span>
                         <span class="disc">[10% Off]</span>
                     </div>
                  </a>
             </div>
             <div class="col-md-4">
                 <a href="product"><img src="images/img4.jpg" width="195px" height="243px" alt=""/> 
                     <div class="arrival-info">
                         <h4>Lighting #1</h4>
                         <p>Rp 12000</p>
                         <span class="pric1"><del>Rp 18000</del></span>
                         <span class="disc">[12% Off]</span>
                     </div>
                  </a>
             </div>
             <div class="col-md-4">
                 <a href="product"><img src="images/img5.jpg" width="195px" height="243px" alt=""/> 
                     <div class="arrival-info">
                         <h4>Lighting #1</h4>
                         <p>Rp 10000</p>
                         <span class="pric1"><del>Rp 14000</del></span>
                         <span class="disc">[14% Off]</span>
                     </div>
                  </a>
             </div>
             <div class="col-md-4">
                 <a href="product"><img src="images/img6.jpg" width="195px" height="243px" alt=""/> 
                     <div class="arrival-info">
                         <h4>Lighting #1</h4>
                         <p>Rp 8500</p>
                         <span class="pric1"><del>Rp 9500</del></span>
                         <span class="disc">[10% Off]</span>
                     </div>
                  </a>
             </div>
        </div>


        <div class="row">
            <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <div class="bottom">
                <p>© 2015 Lighting. All Rights Reserved | Design by  <a href="#">Gray Gevaldi</a> </p>
              </div>
            </div>
            </nav>
        </div>
    </body>
</html>
