@extends('layouts.app')

@section('content')
<div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-lg-8 col-12">
                <section class="about section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">About Me</h2>
                        <div class="content">
                            <p>A highly motivated and focused person with good interpersonal and communication skills. Acquired knowledge through hands on experience training of various          backgrounds. Strong sense of responsibility and time cautious individual. </p>
                            <p>
                              I am a die hard fan of anime so when ever am not writing code then am either watching anime or sleeping. 😂😂😂
                            </p>
                         
                        </div><!--//content-->
                    </div><!--//section-inner-->                 
                </section><!--//section-->
    
               <section class="latest section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Latest Projects</h2>
                        <div class="content">    
                            <hr class="divider" />
                            <div class="row">
                                <div class="item col-md-6">
                                    <a class=" col-12" href="https://jackbuildgh.com/" target="_blank">
                                    <img class="img-fluid project-image rounded shadow-sm" src="{{asset('images/projects/project-1.png')}}" alt="project name" />
                                    </a>
                                    <div class="desc  col-12">
                                        <h3 class="title"><a href="https://jackbuildgh.com/" target="_blank">JACK-BUILD</a></h3>
                                        <p><a class="more-link" href="https://jackbuildgh.com/" target="_blank"><i class="fas fa-external-link-alt"></i>Find out more</a></p>
                                    </div><!--//desc-->                          
                                </div><!--//item-->

                                <div class="item col-md-6">
                                    <a class=" col-12" href="https://jackbuildgh.com/" target="_blank">
                                    <img class="img-fluid project-image rounded shadow-sm" src="{{asset('images/projects/project-4.png')}}" alt="project name" />
                                    </a>
                                    <div class="desc col-12">
                                        <h3 class="title"><a href="https://jackbuildgh.com/" target="_blank">AGRI MARKET</a></h3>
                                        <p><a class="more-link" href="https://agrimarketgh.com/" target="_blank"><i class="fas fa-external-link-alt"></i>view project</a></p>
                                    </div><!--//desc-->                          
                                </div><!--//item-->
                            </div>
                            <div class="row">
                                <div class="item col-md-6">
                                    <a class=" col-12" href="https://jackbuildgh.com/" target="_blank">
                                    <img class="img-fluid project-image rounded shadow-sm" src="{{asset('images/projects/project-7.png')}}" alt="project name" />
                                    </a>
                                    <div class="desc  col-12">
                                        <h3 class="title"><a href="https://cre8ivehouse.us/" target="_blank">CRE8IVE HOUSE</a></h3>
                                        <p><a class="more-link" href="https://jackbuildgh.com/" target="_blank"><i class="fas fa-external-link-alt"></i>Find out more</a></p>
                                    </div><!--//desc-->                          
                                </div><!--//item-->

                                <div class="item col-md-6">
                                    <a class=" col-12" href="https://jackbuildgh.com/" target="_blank">
                                    <img class="img-fluid project-image rounded shadow-sm" src="{{asset('images/projects/project-8.png')}}" alt="project name" />
                                    </a>
                                    <div class="desc col-12">
                                        <h3 class="title"><a href="https://jackbuildgh.com/" target="_blank">MY HOME CARE PLAN</a></h3>
                                        <p><a class="more-link" href="http://api.rmp.fillyjobs.com/api/documentation" target="_blank"><i class="fas fa-external-link-alt"></i>view project</a></p>
                                    </div><!--//desc-->                          
                                </div><!--//item-->
                            </div>
                            <div class="row">
                                <div class="item col-md-6">
                                    <a class="col-12" href="https://jackbuildgh.com/" target="_blank">
                                    <img class="img-fluid project-image rounded shadow-sm" src="{{asset('images/projects/project-6.png')}}" alt="project name" />
                                    </a>
                                    <div class="desc col-12">
                                        <h3 class="title"><a href="https://improtechci.com/" target="_blank">IMPROTECH CI</a></h3>
                                        <p><a class="more-link" href="https://jackbuildgh.com/" target="_blank"><i class="fas fa-external-link-alt"></i>Find out more</a></p>
                                    </div><!--//desc-->                          
                                </div><!--//item-->

                                <div class="item col-md-6">
                                    <a class="col-12" href="https://jackbuildgh.com/" target="_blank">
                                    <img class="img-fluid project-image rounded shadow-sm" src="{{asset('images/projects/project-5.png')}}" alt="project name" />
                                    </a>
                                    <div class="desc col-12">
                                        <h3 class="title"><a href="http://primeegiftcard.com/" target="_blank">PRIME E-GIFT CARD</a></h3>
                                        <p><a class="more-link" href="https://jackbuildgh.com/" target="_blank"><i class="fas fa-external-link-alt"></i>view project</a></p>
                                    </div><!--//desc-->                          
                                </div><!--//item-->
                            </div>
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                
                </section><!--//section-->
                                
                {{-- <section class="experience section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Work Experience</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title">Partner & Lead Developer - <span class="place"><a href="#">Fintech Ghana Limited</a></span> <span class="year">(2020 - Present)</span></h3>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title">Software Engineer - <span class="place"><a href="#">Flex Digitals Limited</a></span> <span class="year">(2018 - Present)</span></h3>
                                <p> In my role as a web developer I was the sole responsible of the folowing listed actions:
                                    <ul class="list-unstyled">
                                        <li>
                                            ✔ Responsible for developing and maintaining web apps to assist in internal operations.
                                        </li>
                                        <li>
                                           ✔ Responsible for maintaining Company VPS and Shared Hosting Servers. 
                                        </li>
                                        <li>
                                            ✔ Debug and fix any errors with existing applications.
                                        </li>
                                        <li>
                                            ✔ Implement new features and update existing code base of company applications.
                                        </li>
                                        <li>
                                            ✔ Develop new web applications from design - development - deployment.
                                        </li>
                                        <li>
                                            ✔ Develop API endpoints to be consumed by front end application (i.e mobile, web) 
                                        </li>
                                        <li>
                                            ✔ Modify existing websites and webapps to suit current company needs
                                        </li>
                                    </ul>
                                </p>
                            </div><!--//item-->
                            
                            <div class="item">
                                <h3 class="title">Freelance - <span class="place"><a href="#"></a></span> <span class="year">(2017 - Present)</span></h3>
                                <p> 
                                </p>
                            </div><!--//item-->
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section> --}}<!--//section-->
            </div><!--//primary-->
            <div class="secondary col-lg-4 col-12">
                 <aside class="info aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading sr-only">Basic Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-map-marker-alt"></i><span class="sr-only">Location:</span>Accra, Ghana</li>
                                <li><i class="fas fa-envelope"></i><span class="sr-only">Email:</span><a href="mailto:nurudeenh@gmail.com">nurudeenh@gmail.com</a></li>
                                <li><i class="fas fa-phone"></i><span class="sr-only">Phone:</span><a href="tel:+233546428003">+233 54 642 8003</a></li>
                                <li><i class="fas fa-link"></i><span class="sr-only">Website:</span><a href="{{url('/')}}">https://www.nurudeenhabibu.com</a></li>
                            </ul>
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//aside-->
                
                <aside class="skills aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Skills</h2>
                        <div class="content">
                            <p class="intro">
                                List of technologies I work with on the constant basis</p>
                            
                            <div class="skillset">
                               
                                <div class="item">
                                    <h3 class="level-title">PHP (Laravel)<span class="level-label" data-placement="left" data-animation="true" >Medium</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="90%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                <div class="item">
                                    <h3 class="level-title">PHP (Symfony)<span class="level-label" data-placement="left" data-animation="true" >Base</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="90%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">MySql &amp; PostgreSql<span class="level-label" data-placement="left" data-animation="true" >Medium</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="90%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Javascript &amp; jQuery<span class="level-label" data-placement="left" data-animation="true" >Base</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="90%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">HTML5 &amp; CSS3<span class="level-label" data-placement="left" data-animation="true" >Medium</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="90%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                                                
                                <div class="item">
                                    <h3 class="level-title">Rest Api &amp; Json <span class="level-label" data-placement="left" data-animation="true"> Base</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="90%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">Server, Apache2 &amp; Nginx<span class="level-label" data-placement="left" data-animation="true">Base</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="90%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">GIT<span class="level-label" data-placement="left" data-animation="true" >Medium</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="85%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                            </div>              
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//section-->
                            
                <aside class="languages aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Languages</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li class="item">
                                    <span class="title"><strong>English:</strong></span>
                                    <span class="level">Fluent Speaker <br class="visible-xs"/><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span>
                                </li><!--//item-->
                                {{--<li class="item">
                                    <span class="title"><strong>Spanish:</strong></span>
                                    <span class="level">Professional Proficiency <br class="visible-sm visible-xs"/><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half"></i></span>
                                </li><!--//item-->--}}
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                 
                
                {{-- <aside class="list music aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Project Executions</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check-double"></i> <a href="#">CRUD Application </a></li>
                                <li><i class="fas fa-check-double"></i> <a href="#">ACL Implementation </a></li>
                                <li><i class="fas fa-check-double"></i> <a href="#">Custom Business Logic </a></li>
                                <li><i class="fas fa-check-double"></i> <a href="#"> API Development and Testing </a></li>
                                <li><i class="fas fa-check-double"></i> <a href="#">Third Party Rest API Integration </a></li>
                                <li><i class="fas fa-check-double"></i> <a href="#">AWS S3 Integrations </a></li>
                                <li><i class="fas fa-check-double"></i> <a href="#">SMS Integrations </a></li>
                                <li><i class="fas fa-check-double"></i> <a href="#">Payment Gateway Integration </a></li>
                                <li><i class="fas fa-check-double"></i> <a href="#">Newsletter management </a></li>
                                <li><i class="fas fa-check-double"></i> <a href="#">Dynamic Web Application </a></li>
                                <li><i class="fas fa-check-double"></i> <a href="#">Google Services Integration </a></li>
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside> --}}<!--//section--> 
            </div><!--//secondary-->    
        </div><!--//row-->
    </div><!--//masonry-->
@endsection