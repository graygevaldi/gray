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
                margin-top: 15px;
                left: 20%;
                text-align: right;
                color:black;
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

            #back2{
                margin-left: -100px;
            }
            .form{
                margin-top: 35px;
                margin-bottom: 150px;
            }
            .isi{
                margin-top: 80px;
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
                                  <li><a href="about">About</a></li> 
                                  <li class="active"><a href="contact">Contact Us</a></li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        

        <div class="row">
            <div class="isi">
                <div class="col-sm-1"></div>
                    <div class="col-sm-3">
                        <img src="images/electric.png" width="300px" height="100px">
                        <div class="about">
                            <hr><h4>Company Information :</h4><hr>
                            <p>CHUBU Electric Power</p>
                            <p>Villa Puncak Tidar N19</p>
                            <p>Malang, East Java, Indonesia</p>
                            <p>Phone:0822-3116-7070</p>
                            <p>Email: <a href="#">graygevaldi@gmail.com</a></p>
                            <p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <form role="form" class="form">
                        <div class="form-group">
                            <label for="pwd">Name:</label>
                            <input type="text" class="form-control" id="pwd">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Subject:</label>
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-sm-1"></div>
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
