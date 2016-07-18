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

            .container {
            }

            .content {
            }

            .title {
                font-size: 96px;
            }

            .about {
                width: 59%;
                position: absolute;
                margin-top: 100px;
                left: 20%;
                text-align: right;
                color:black;
            }
            .bottom{
                color:white;
                padding-top: 15px;
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

            #back2{
                margin-left: -100px;
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
                                  <li><a href="welcome">Home</a></li>
                                  <li><a href="product">Product</a></li>
                                  <li class="active"><a href="about">About</a></li> 
                                  <li><a href="contact">Contact Us</a></li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-6">
                <div class="about">
                    <img src="images/about.png" width="300px">

                    <p><i>"CHUBU adalah situs e-commerce sederhana</br>
                    yang berisikan tentang penjualan lampu murah namun bukan barang murahan. Perusahaan ini muncul karena adanya semangat dari alumni halloMalang.com untuk membangun sebuah usaha yang bermanfaat bagi seluruh masyarakat dalam negeri ini.</p>
                    <p>Dibangunnya perusahaan ini merupakan bentuk implementasi dari budaya Indonesia yang mengajarkan bahwa <b>'Waktu minum air jangan lupa sumbernya, waktu sukses balaslah budi kepada kampung halamannya'.</b>"</i></p>
                </div>
            </div>
            <div class="col-sm-4" id="back2">
                <img src="images/back2.png" >
            </div>
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
