<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('tabTitle')</title>

    <!-- Fonts -->
    <link rel='shortcut icon' href="/images/favicon.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="/stylesheets/custom.css" rel="stylesheet" type="text/css">
    <link href="/stylesheets/grid12.min.css" rel="stylesheet" type="text/css">
</head>

<body class="@yield('pageClass')">
    <header class="site-header">
        <div class="wrap clear-fix">
            <div class="title-area">
                <a href="/">
                    <div id="temp"><img src="/images/5ad77d7d9dd7434eacf971abd928fc94.png" style="width: 80px; margin-top: 10px;"></div>
                </a>
            </div>
            <div class="primary-nav">
                <ul>
                    <li><a class="start-button" href="/#home__section--about">About</a></li>
                    <li><a href="/my-work">Work</a></li>
                    <li><a href="/my-resume">Resume</a></li>
                </ul>
            </div>
        </div>
        @yield('content1');
    </header>
    <div class="site-inner">
        <main class="content" id="fullpage">
            @yield('content')
        </main>
    </div>
    <footer class="site-footer">
        <div class="wrap" id="contact">
            <div class="inside-container">
                <div class="row">
                    @if(Session::has('success'))
                    <div class="alert-success"> {{ Session::get('success') }} </div>
                    @endif
                    <div class="col-sm-4">
                        <h2>About this site:</h2>
                        <p>This site was created using Laravel 10 and has been my pet project
                            for a number months. When deciding to overhaul my portfolio site,
                            I wanted to keep things simple and functional, but still visually interesting.
                            It's also served as an opportunity to improve my knowledge of Laravel.
                            I plan to make to regular updates and improvements,
                            and hope to collect some remarks.</p>
                    </div> 
                    <div style="margin-left:400px;" class="leftshift">
                    <div class="col-sm-6" style="text-align: center; position: initial;">
                        <div class="circle" ><img src="/images/naship-removebg-preview.png" style="margin-right: 10 px; background-color:white; width: 150px; "></div>
                        <div class="vertical">
                            <a href="https://github.com/naship-k-acharya/"><img
                                    style="display: inline; margin: 0 10px -9px;" src="/images/linkedin-circle-icon.png"
                                    width="30" height="30"></a><a
                                href="https://github.com/naship-k-acharya">Naship Kumar Acharya</a>
                            <div style="height: 10px;"></div>
                            <a href="mailto:nashipacharya@gmail.com"><img style="display: inline; margin: 0 10px -5px;"
                                    src="/images/email-icon.png" width="30" height="20"></a><a
                                href="mailto:nashipacharya@gmail.com"></a>
                            <div style="height: 10px;"></div>
                            <a href="https://github.com/naship-k-acharya"><img style="display: inline; margin: 0 10px -10px;"
                                    src="/images/github-icon.png" width="30" height="30"></a><a
                                href="https://github.com/naship-k-acharya">Naship-k-Acharya</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h2>Want to get in touch?</h2>
                        <form action="{{ route('messages') }}" method="get" data-aos="fade-up" data-aos-delay="300" role="form">
                            @csrf
                            <div class="form-group">
                            <input type="text" class="form-control" name="cf-name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label name="email">Your Email:</label>
                                <input type="email" class="form-control" name="cf-email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label name="message">Your Message:</label>
                                <textarea class="form-control" rows="5" name="cf-message" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="form-control" id="submit-button" name="submit">Send Message</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="/js/custom.js"></script>
    {{--<script type="text/javascript" src="/js/nicescroll/jquery.nicescroll.min.js"></script>--}}
</body>

</html>