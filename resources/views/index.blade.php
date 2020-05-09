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
                            <div class="item row">
                                <a class="col-md-4 col-12" href="https://jackbuildgh.com/" target="_blank">
                                <img class="img-fluid project-image rounded shadow-sm" src="{{asset('images/projects/project-1.png')}}" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-12">
                                    <h3 class="title"><a href="https://jackbuildgh.com/" target="_blank">JACK-BUILD</a></h3>
                                    <p class="mb-2">JACK-BUILD comes in with the assurance of providing you with the peace of mind to own your dream home, from land acquisition, planning, construction, to property management (rent/sale) and maintenance.</p>
                                    <p><a class="more-link" href="https://jackbuildgh.com/" target="_blank"><i class="fas fa-external-link-alt"></i>Find out more</a></p>
                                </div><!--//desc-->                          
                            </div><!--//item-->
                            
                            <div class="item row">
                                <a class="col-md-4 col-12" href="http://www.improtechsystems.com/" target="_blank">
                                <img class="img-fluid project-image rounded shadow-sm" src="{{asset('images/projects/project-2.png')}}" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-12">
                                    <h3 class="title"><a href="http://www.improtechsystems.com/" target="_blank">Improtech Systems Solutions</a></h3>
                                    <p class="mb-2">IMPROTECH is an IT solutions company taking advantage of a significant gap in networking training and consultancy services across Sub-Saharan Africa.</p>
                                    <p><a class="more-link" href="http://www.improtechsystems.com/" target="_blank"><i class="fas fa-external-link-alt"></i>Find out more</a></p>
                                </div><!--//desc-->                          
                            </div><!--//item-->
                            
                             <div class="item row">
                                <a class="col-md-4 col-12" href="http://flexdigitals.net/" target="_blank">
                                <img class="img-fluid project-image rounded shadow-sm" src="{{asset('images/projects/project-3.png')}}" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-12">
                                    <h3 class="title">Flex Digitals<a href="http://flexdigitals.net/" target="_blank"></a></h3>
                                    <p class="mb-2">
                                        inspires and engages discerning businesses and their consumers.
                                    </p>
                                    <p><a class="more-link" href="http://flexdigitals.net/" target="_blank"><i class="fas fa-external-link-alt"></i>Find out more</a></p>
                                </div><!--//desc-->                          
                            </div><!--//item-->
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                
                </section><!--//section-->
                                
                <section class="experience section">
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
                </section><!--//section-->
            </div><!--//primary-->
            <div class="secondary col-lg-4 col-12">
                 <aside class="info aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading sr-only">Basic Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-map-marker-alt"></i><span class="sr-only">Location:</span>Accra, Ghana</li>
                                <li><i class="fas fa-envelope"></i><span class="sr-only">Email:</span><a href="#">nurudeenh@gmail.com</a></li>
                                <li><i class="fas fa-link"></i><span class="sr-only">Website:</span><a href="#">https://www.nurudeen.com</a></li>
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
                                        <div class="level-bar-inner" data-level="96%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">MySql &amp; PostgreSql<span class="level-label" data-placement="left" data-animation="true" >Medium</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="96%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Javascript &amp; jQuery<span class="level-label" data-placement="left" data-animation="true" >Base</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="96%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">Vuejs<span class="level-label" data-placement="left" data-animation="true" >Medium</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="96%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">HTML5 &amp; CSS3<span class="level-label" data-placement="left" data-animation="true" >Medium</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="96%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                                                
                                <div class="item">
                                    <h3 class="level-title">Rest Api &amp; Json <span class="level-label" data-placement="left" data-animation="true"> Base</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="96%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">Server, Apache2 &amp; Nginx<span class="level-label" data-placement="left" data-animation="true">Base</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="96%">
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
                                    <span class="level">Native Speaker <br class="visible-xs"/><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span>
                                </li><!--//item-->
                                {{--<li class="item">
                                    <span class="title"><strong>Spanish:</strong></span>
                                    <span class="level">Professional Proficiency <br class="visible-sm visible-xs"/><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half"></i></span>
                                </li><!--//item-->--}}
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                 
                
                <aside class="list music aside section">
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
                </aside><!--//section--> 
            </div><!--//secondary-->    
        </div><!--//row-->
    </div><!--//masonry-->
@endsection