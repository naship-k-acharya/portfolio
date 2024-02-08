@extends('layout')
@section('pageClass', 'home')
@section('tabTitle', 'Sean McDonnell - About')
@section('content')
<style>
.roles h2 {
    display: none;
}

.roles h2:first-child {
    display: block;
    animation: showRole 16s linear infinite;
}

.roles h2:nth-child(2) {
    animation-delay: 16s;
}

.roles h2:nth-child(3) {
    animation-delay: 28s;
}

.roles h2:nth-child(4) {
    animation-delay: 36s;
}


    @keyframes showRole {
    0%, 16.66% { opacity: 0; } /* Each animation lasts for 1/3 of the total time */
    16.67%, 33.33% { opacity: 1; } /* First h2 appears */
    33.34%, 49.99% { opacity: 1; } /* Second h2 appears */
    50%, 66.66% { opacity: 1; } /* Third h2 appears */
    66.67%, 83.33% { opacity: 1; } /* Fourth h2 appears */
    83.34%, 100% { opacity: 1; } /* Reset for next cycle */
}
</style>
<section class="home__section home__section--cityscape section blah-blah-blah">
  
        <h1>Hi, I'm Naship.</h1>
         <div class="roles">
        <h2>A Web Developer</h2>
         <h2>A Student</h2>
        
        <h2>A Designer</h2>
        <h2>A Engineer</h2>
    </div> 
    
    <div class="skyline skyline--sunbox">
        <div class="sun-rays">
            <div class="the-sun"></div>
        </div>
    </div>
    <div class="skyline skyline--cloud-2"></div>
    <div class="skyline skyline--cloud-1"></div>
    <div class="skyline skyline--prlx-3"></div>
    <div class="skyline skyline--prlx-2"></div>
    <div class="skyline skyline--prlx-1"></div>
    <div class="skyline skyline--first"></div>
</section>
<section class="home__section home__section--grass">
    <div class="inside-container">
    </div>
</section>
<section id="home__section--about" class="home__section home__section--about section blah-blah-blah">
    <div class="inside-container">
        <div class="row">
            <div class="col-sm-12">
                <div class="circle"><img src="/images/naship-removebg-preview.png" style="margin-right: 10 px; background-color:white; width: 150px; "></div>
                <h3 style="text-align: center; margin: 28px 0 16px;">Hi</h3>
                <p class="tighter" style="text-align: center;">I'm a  developer who enjoys
                    creating for the web across devices. I'm driven by a love of problem solving, an attention to
                    detail,
                    and a desire to continually improve my skills.</p>
            </div>
        </div>
        <hr>
        <h2>What I can do</h2>
        <div class="row tight">
            <div class="col-sm-4 col-sm-offset-1">
                <h3>Adapt to meet your needs.</h3>
                <p style="width: 60vh;">I have experience working on solo projects from conception to deployment as well as part of a team of
                    talented developers and designers. I keep apprised of the latest trends and understand
                    the importance of good design in shaping user browsing habits. When not hunkered over my computer, I
                    also enjoy
                    working with clients to help them realize their vision.</p>
            </div>
            <div class="col-sm-6">
                <p style="text-align: center"><img src="/images/capture-removebg-preview.png" width="40%" height="411"
                    style="max-width: 270px; margin-top: -80px; margin-left:25vh;"></p>
                
            </div>
        </div>
        <div class="row tight">
            <div class="col-sm-4 col-sm-push-7" style="padding: 0;">
                <h3>Use the right tool for the job.</h3>
                <p style="width: 60vh;">With strong fundamentals in HTML, CSS, and JS, I like working within the JS ecosystem through
                    laravel and React. I have extensive experience with SQL databases and PHP , and have coded a number of publicly available
                    custom themes and plugins for CMS platforms like WordPress and Magento.</p>
            </div>
            <div class="col-sm-6 col-sm-pull-3">
                <p style="text-align: center"><img src="/images/tool-for-job-js.png" width="450" height="386"
                    style="width: 350px; margin-right:10vh;"></p>
               
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <h2>I can help</h2>
                <h3 style="text-align: center; margin-bottom: 30px;">I'm available for freelance projects.
                </h3>
                <p class="tighter" style="text-align: center;">If you have a project in mind that you think I may be
                    able to help you with, or if you'd like
                    to get in touch for any other reason, let's talk!</p>
            </div>
        </div>
        <h2></h2>
    </div>
</section>
<script type="text/javascript" src="/js/parallax-background.min.js"></script>
@stop