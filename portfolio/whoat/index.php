<!DOCTYPE html>
<html>
<head>
    <title>The WhoAt Case Study</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Case Study for WhoAt on LeonGaban.com">
    <meta name="keywords" content="whoat, web design, web development, web designer, web developer, portfolio">
    <meta name="author" content="Leon Gaban">

	<meta property="og:image" content="../../images/leon_gaban.png"/>
	<meta property="og:title" content="WhoAt Showcase on LeonGaban.com"/>
	<meta property="og:site_name" content="Leon Gaban's Portfolio"/>
	<meta property="og:type" content="portfolio"/>

    <link rel="shortcut icon" href="http://leongaban.com/favicon.ico">
    <link rel="apple-touch-icon" href="http://leongaban.com/apple-touch-icon.png">

	<!-- html5.js for IE less than 9 -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- css3-mediaqueries.js for IE less than 9 -->
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

    <link href="http://fonts.googleapis.com/css?family=Bitter:400,700,400italic" rel="stylesheet" type="text/css" >
    <link href="../../css/style.css" type="text/css" rel="stylesheet" >
    <script type='text/javascript' src="../../js/jquery-2.0.0.min.js"></script>
    <script type='text/javascript' src='../../js/leongaban.js'></script>
    <script src="../../mint/?js" type="text/javascript"></script>
</head>

<body>

    <audio id="mySoundClip">
        <source src="../../audio/bloop.mp3"></source>
        <source src="../../audio/bloop.ogg"></source>
    </audio>

    <div class="outer" id="showcase-athenasweb">
        <div class="inner">

            <header id="case-header">
                <?php include '../../includes/showcase-nav.php'; ?>

                <div id="case-h1h2">
                    <h1>You are viewing the Who@ case study</h1>
                    <h2>Work performed: Markup, jQuery &amp; Pyramid integration</h2>
                </div>

                <div id="view-more-button">
                    <input onclick="window.open('http://leongaban.com/portfolio/whoat/whoat.html')" class="view-more-button" type="submit" value="Who@ Preview">
                </div>
            </header>

            <div class="pattern">

                <div class="showcase-nav">
                    <div class="previous-showcase">
                        <a href="../tvp"><div class="showcase-btn" id="btn-prev">&larr; Previous</div></a>
                        <div class="showcase-btn-shadow"></div>
                    </div>
                    <div class="next-showcase">
                        <a href="../chipestimate"><div class="showcase-btn" id="btn-next">Next &rarr;</div></a>
                        <div class="showcase-btn-shadow"></div>
                    </div>
                </div>

                <div class="showcase-thumbs">
                    <div class="first"><img src="../../images/whoat1.jpg"/></div>
                    <div class="second"><img src="../../images/whoat2.jpg"/></div>
                    <div class="third"><img src="../../images/whoat3.jpg"/></div>
                </div>

            </div>

            <div class="video-div">

                <video width="100%" height="100%" autoplay="autoplay" loop="loop" preload>
                    <source src="../../videos/showcase_clouds.mp4" type="video/mp4" >
                    <source src="../../videos/showcase_clouds.ogg" type="video/ogg" >
                    <source src="../../videos/showcase_clouds.webm" type="video/webm" >
                    <object data="../../videos/showcase_clouds.mp4" width="100%" height="100%">
                        <param name="wmode" value="transparent">
                        <param name="autoplay" value="true" >
                        <param name="loop" value="true" >
                        <embed src="../../videos/showcase_clouds.swf" width="100%" height="100%" wmode="transparent" >
                    </object>
                </video>

            </div> 

        </div>

        <div class="inner-mobile">

            <header id="case-header">
                <?php include '../../includes/showcase-nav.php'; ?>

                <div id="case-h1h2">
                    <h1>You are viewing the Who@ case study</h1>
                    <h2>Work performed: Markup, jQuery &amp; Pyramid integration</h2>
                </div>

                <div id="view-more-button">
                    <input onclick="window.open('http://leongaban.com/portfolio/whoat/whoat.html')" class="view-more-button" type="submit" value="Who@ Preview">
                </div>
            </header>

            <div class="pattern">
                <div class="mobile-shadow"></div><!-- For 640 -->

                <div class="showcase-nav">
                    <div class="previous-showcase">
                        <a href="../tvp"><div class="showcase-btn" id="btn-prev">&larr; Previous</div></a>
                        <div class="showcase-btn-shadow"></div>
                    </div>
                    <div class="next-showcase">
                        <a href="../chipestimate"><div class="showcase-btn" id="btn-next">Next &rarr;</div></a>
                        <div class="showcase-btn-shadow"></div>
                    </div>
                </div>

                <div class="showcase-thumbs">
                    <div class="first"><img src="../../images/whoat1.jpg"/></div>
                    <div class="second"><img src="../../images/whoat2.jpg"/></div>
                    <div class="third"><img src="../../images/whoat3.jpg"/></div>
                </div>
            </div>
        </div>

        <!-- Case Study Description -->
        <section id="case-study">

            <div id="case-container">

            <h1>Developing my first web based dashboard</h1>

            <div id="case-study-description">
                <p>
                    Currently I'm having the incredible oppertunity to develop <a href="http://leongaban.com/portfolio/whoat/whoat.html" title="WhoAt preview">the website, online dashboard and emails</a> for the <a href="http://whoat.net">Who@</a> enterprise contacts &amp; relationship management app. And eventually for the rest of our products.
                </p>
                <p>
                    The requirements for the website and dashboard include <a href="http://coding.smashingmagazine.com/2011/01/12/guidelines-for-responsive-web-design/" title="Responsive web design">responsive design</a>, IE8 compliance and lots of jQuery goodness in the form of <a href="http://jqueryui.com/" title="jQuery UI">jQuery UI</a> and other modern functionality to engage users.
                </p>
                <p>
                    Working for startup WhoAt LLC is my latest foray into the realm of agile development, I love working with small teams where members have their dedicated purpose with some crossover and truly owning my part of the project.
                </p>
            </div><!-- #case-study-description -->

            <div id="case-study-extra">
                <a href="https://itunes.apple.com/us/app/who/id536254085?mt=8whoatnet-to-itunes" title="Try the App" target="_blank"><img src="../../images/extra_whoat.jpg"/></a>
                <span>Try the Who@ contacts app for enterprise</span>
            </div>

            </div>
            <div class="cleared"></div>

        </section>

        <!-- Technology Used -->
        <section id="technology">

            <h1>Technology being used on WhoAt</h1>

            <div id="case-container">

                <div id="skills">
                    <ul>
                        <li class="title">Code</li>
                        <li>HTML 5</li>
                        <li>CSS 3</li>
                        <li>SASS (Love Mixins &amp; Variables)</li>
                        <li>jQuery</li>
                        <li>Mako templating</li>
                        <li>Pyramid (Python framework)</li>
                    </ul>
                    <ul>
                        <li class="title">Technology</li>
                        <li><a href="http://www.alfredapp.com/" title="Alfred">Alfred</a> (Can't live without it now)</li>
                        <li>Photoshop</li>
                        <li><a href="http://www.sublimetext.com/" title="Best code editor Sublime Text 2">SublimeText 2</a></li>
                        <li>PyCharm (Python IDE)</li>
                        <li>Codekit</li>
                        <li><a href="http://codepen.io/leongaban/public/" title="Codepen">Codepen</a> (For testing layouts)</li>
                        <li>Source Tree (Prefer <a href="https://github.com/leongaban" title="Leon on Github">Github</a>)</li>
                        <li><a href="http://iterm.sourceforge.net/" title="iTerm">iTerm</a> (Better than Terminal)</li>
                    </ul>
        	    </div>

                <div id="call-to-action">
                    <ul>
                        <li>
                            <input onclick="window.open('http://leongaban.com/#portfolio')" class="cta-button" type="submit" value="View more case studies">
                        </li>
                        <li>
                            <input onclick="window.open('http://leongaban.com/#contact')" class="cta-button" type="submit" value="Contact me for work">
                        </li>
                    </ul>
                </div>

            </div><!-- case-container -->

        </section>

        <?php include '../../includes/showcase-footer.php'; ?>

    </div><!-- outer -->

<!-- Google Analytics -->
<script src="../../js/googleanalytics.js"></script>

</body>
</html>