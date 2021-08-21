 <!DOCTYPE html>
<html lang="en">
<head>
    <title>Nurudeen Habibu | Web Developer</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nurudeen's Personal Website and Portfolio">
    <meta name="author" content="Nurudeen">    
    <link rel="shortcut icon" href="favicon.ico">  
    
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
    
    <!-- FontAwesome JS -->
    <script defer src="{{asset('fontawesome/js/all.js')}}"></script>
    
    <!-- Global CSS -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">   
        
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{asset('css/styles.css')}}">
    <!-- Cookie consent -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
    
</head> 

<body>
    <!-- ******HEADER****** --> 
    <header class="header">
        <div class="container clearfix">                       
            <img class="profile-image img-fluid float-left rounded-circle" src="{{asset('images/nuru.jpg')}}" alt="profile image" width="160" />
            <div class="profile-content float-left">
                <h1 class="name">Nurudeen Habibu</h1>
                <h2 class="desc">Web Developer</h2> 
                <ul class="social list-inline">
                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/nurudeen-habibu"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="list-inline-item"><a href="https://github.com/nurudeen19"><i class="fab fa-github-alt"></i></a></li>
                </ul> 
            </div><!--//profile-->
            <a class="btn btn-cta-primary float-right" href="mailto:nurudeenh@gmail.com" target="_blank"><i class="fas fa-paper-plane"></i> Contact Me</a>              
        </div><!--//container-->
    </header>
    	@yield('content')

    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="container text-center">
                <!--/* This template is free as long as you keep the attribution link below. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fas fa-heart"></i> by <a href="" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
<script type="text/javascript" src="{{asset('plugins/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/popper.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- custom js -->
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<!-- Cookie consent -->
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#efefef",
      "text": "#404040"
    },
    "button": {
      "background": "#8ec760",
      "text": "#ffffff"
    }
  },
  "showLink": false,
  "theme": "classic",
  "position": "bottom-right"
});
</script>
</body>
</html> 