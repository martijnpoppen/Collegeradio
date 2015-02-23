        <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="footer-menu-container">
                                <ul class="footer-menu">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="luisteren">Luisteren</a></li>
                                    <li><a href="nieuws">Nieuws</a></li>
                                    <li><a href="items">Items</a></li>
                                    <li><a href="contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                             <div id="frame">
                        <iframe src="http://myradiostream.com/crl" width="0" height="0"></iframe>
                    </div>
                            <div class="copy">
                                <p>&copy; CollegeRadio Leeuwarden 2014</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="social-wrap">
                                <div class="social-div">
                                    <a href="https://www.facebook.com/collegeradioleeuwarden?fref=ts">
                                        {{ HTML::image('media/images/fb-logo.png', $alt="check onze facebook", $attributes = array('class' => 'img-responsive social-logo')) }}
                                    </a>
                                    <a href="https://www.facebook.com/collegeradioleeuwarden?fref=ts">
                                        {{ HTML::image('media/images/yt-logo.png', $alt="check onze youtube channel", $attributes = array('class' => 'img-responsive social-logo')) }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </footer>
    </body>
</html>