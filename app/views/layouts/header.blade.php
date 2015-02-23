<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Collegeradio Leeuwarden | collegeradio-leeuwarden.nl </title>
        
        



        

        {{ HTML::script('media/vendor/jquery/jquery-v1.11.1.min.js') }}

        {{ HTML::style('media/vendor/bootstrap/css/bootstrap.min.css') }}
        {{ HTML::style('media/css/style.css') }}

        {{ HTML::script('media/vendor/bootstrap/js/bootstrap.min.js') }}

        {{ HTML::style('media/vendor/flexslider/flexslider.css') }}
        
        {{ HTML::script('media/vendor/flexslider/jquery.flexslider-min.js') }}


        {{ HTML::script('media/audiojs/audio.min.js')}}
        


<script>
        
		audiojs.events.ready(function() {
		
              var as = audiojs.createAll();
        });
        
       jQuery(document).ready(function($) {
            
            

            // Flexslider
            $('.flexslider').flexslider({

                    controlNav: true,               
                    directionNav: false,
                    easing: 'linear',
                    slideshowSpeed: 3000,    
            });
       });

              


             
</script>
<script type="text/javascript">
    
    $(window).load(function() {
   	 $('#frame').remove();

    })
</script>

    </head>
    <body>


        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="logo">
                        <a href="/">
                            {{ HTML::image('media/images/logo.png', $alt="Collegeradio-leeuwarden logo", $attributes = array('class' => '')) }}
                         </a>
                  
                    
                </div>
                                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-4 col-centered nav-col">
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="/"><div class="glyphicon glyphicon-home active hidden-xs" style="display:block;"></div>Home</a></li>
                            <li><a href="luisteren"><div class="glyphicon glyphicon-headphones hidden-xs" style="display:block;"></div>Luisteren</a></li>
                            <li><a href="nieuws"><div class="glyphicon glyphicon-globe hidden-xs" style="display:block;"></div>Nieuws</a></li>
                            <li><a href="items"><div class="glyphicon glyphicon-map-marker hidden-xs" style="display:block;"></div>Items</a></li>
                            <li><a href="contact"><div class="glyphicon glyphicon-envelope hidden-xs" style="display:block;"></div>Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 search-form">
                     <form class="navbar-form visible-sm">
                        <!-- <input class="form-control search" type="text" placeholder="Zoeken"></input> -->
                        <button type="submit" class="glyphicon glyphicon-search"></button>
                    </form>
                    <form class="navbar-form hidden-sm hidden-xs">
                        <input class="form-control search" type="text" placeholder="Zoeken"/>
                        <button class="btn btn-succes" type="submit">OK</button>
                    </form>
                </div>
            </div>
        </div>


        <div class="container-full">
             
            <div class="player"><audio src="http://s31.myradiostream.com:7306/;.mp3" preload="auto" /></div>
            <div class="flexslider">
              <ul class="slides">
                <li>
                   {{ HTML::image('media/images/slider/slider-1.jpg', $alt="Collegeradio-leeuwarden", $attributes = array('class' => 'img-responsive header-image')) }}
                </li>
                <li>
                   {{ HTML::image('media/images/slider/slider-2.jpg', $alt="Collegeradio-leeuwarden", $attributes = array('class' => 'img-responsive header-image')) }}
                </li>
                <li>
                    {{ HTML::image('media/images/slider/slider-3.jpg', $alt="Collegeradio-leeuwarden", $attributes = array('class' => 'img-responsive header-image')) }}
                </li>
                <li>
                    {{ HTML::image('media/images/slider/slider-4.jpg', $alt="Collegeradio-leeuwarden", $attributes = array('class' => 'img-responsive header-image')) }}
                </li>
              </ul>
            </div>
        </div>
        