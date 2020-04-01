<?php
include_once 'template/template.php';
?>


<!DOCTYPE html>
<html>

<head>
    <?php
    echo $head;
    ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151981087-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-151981087-2');
</script>

</head>

<body>
    <?php 
     echo $nav;
    ?>
    <section class="d-flex flex-column justify-content-center" id="hero">
        <h1 class="text-center" data-aos="fade-up" data-aos-duration="500" data-aos-once="true" id="portfolio-name">Pranjal Jain</h1>
        <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" data-aos-once="true" id="hero-sub-heading">				<div class="caption v-middle text-center">
					<h1 class="cd-headline clip">
			            <span class="blc">I am </span>
			            <span class="cd-words-wrapper">
			              <b class="is-visible">an Innovator.</b>
			              <b>a Developer.</b>
			              <b>a Creator.</b>
                        <b>an Engineer.</b>
			            </span>
	          		</h1>
				</div></div><script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script><div id="particles-js"></section>
    <section class="d-flex d-lg-flex" id="sub">
        <div class="d-lg-flex align-items-lg-center">
            <div class="row no-gutters profile-row">
                <div class="col-md-6">
                    <div id="profile-photo" class="profile-half"><img class="img-fluid" src="assets/img/WhatsApp%20Image%202019-12-05%20at%2010.42.56%20AM.jpeg" style="filter: blur(0px) grayscale(100%);"></div>
                </div>
                <div class="col-md-6">
                    <div id="profile-info" class="profile-half">
                        <h1>Hello There!</h1>
                        <p class="text-left">I discovered my passion for computer science when I was a sophomore in High School; it was then, when I started learning more for my passion. I am pursuing my bachelor's degree at Avantika University, major in Computer science
                            and engineering. A year later I was introduced to Embedded systems, where I discovered the love for electrics and electronics and also for embedded systems. Then I got a scholarship opportunity to do a research work on Smart
                            grid and started the never-ending journey of becoming a developer along with sharpening my eye for innovations.<br></p>
                        <div class="table-responsive table-borderless" id="profile-microElements">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Birthdate:</td>
                                        <td>&nbsp; 01/06/1997<br></td>
                                    </tr>
                                    <tr>
                                        <td>Phone:</td>
                                        <td>&nbsp; +91 7000699743<br></td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td>&nbsp; pranjaljain0697@gmail.com<br></td>
                                    </tr>
                                    <tr>
                                        <td>Website:</td>
                                        <td>&nbsp; www.pranjaljain.ml<br></td>
                                    </tr>
                                    <tr>
                                        <td>github:</td>
                                        <td>pranjaljain0<br></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Education"><div class="container" id="timeline">
	<div class="row">
	<div class="timeline-centered">
	<article class="timeline-entry">
		<div class="timeline-entry-inner">
			<time class="timeline-time" datetime="2014-01-10T03:45"><span>2017-2021</span> </time>
			<div class="timeline-icon bg-success">
				<i class="entypo-feather"></i>
			</div>
			<div class="timeline-label">
				<h2>Avantika University
                    <br>
                    <span>Ujjain, Madhya Pradesh India</span></h2>
				<p>Bachelor of Technology 
                <br>Specialization : Computer Science engineering</p>
			</div>
		</div>
	</article>
	
	<article class="timeline-entry left-aligned">
		<div class="timeline-entry-inner">
			<time class="timeline-time" datetime="2014-01-10T03:45"><span>2012 - 2016</span></time>
			<div class="timeline-icon bg-secondary">
				<i class="entypo-suitcase"></i>
			</div>
			<div class="timeline-label">
				<h2>The Sanskaar Valley School
				<span>Bhopal, Madhya Pradesh
<br>India</span></h2>
				<p>High school
                    <br><strong>ISC- 66%</strong>
                    <br><strong>ICSE- 87%</strong></p>
			</div>
		</div>
	</article>
	
	
	<article class="timeline-entry">
		<div class="timeline-entry-inner">
			<time class="timeline-time" datetime="2014-01-09T13:22"><span>2008 - 2011</span></time>
			<div class="timeline-icon bg-info">
				<i class="entypo-location"></i>
			</div>
			<div class="timeline-label">
				<h2>The Scindia School <br><span>Gwalior,<br>Madhya Pradesh
                    <br>India</span></h2>
				<p>High school</p>
			</div>
		</div>
	</article>
	
	
	<article class="timeline-entry left-aligned">
		
		<div class="timeline-entry-inner">
			<time class="timeline-time" datetime="2014-01-10T03:45"><span>2003 - 2007</span></time>
			
			<div class="timeline-icon bg-warning">
				<i class="entypo-camera"></i>
			</div>
			<div class="timeline-label">
				<h2>St. Joseph's Co-ed School
                    <br><span>Bhopal,<br>Madhya Pradesh
<br>India</span></h2>
                <p>Middle school</p>

			</div>
		</div>
		
	</article>
	
	
	<article class="timeline-entry begin">
	
		<div class="timeline-entry-inner">
			
			<div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
				<i class="entypo-flight"></i>
			</div>
			
		</div>
		
	</article>
	
</div>
	</div>
</div></section>
    <section id="skills">
        <div class="container">
            <div class="row">
                <div class="col" id="skill-card">
                    <h1>Skills</h1>
                    <div class="table-responsive" id="skill-table">
                        <table class="table">
                            <thead>
                                <tr></tr>
                            </thead>
                            <tbody>
                                <tr id="advance">
                                    <td>Python</td>
                                    <td>Advance</td>
                                </tr>
                                <tr id="advance">
                                    <td>HTML</td>
                                    <td>Advance</td>
                                </tr>
                                <tr>
                                    <td>PHP</td>
                                    <td>Advance</td>
                                </tr>
                                <tr>
                                    <td>JAVA</td>
                                    <td>Advance</td>
                                </tr>
                                <tr>
                                    <td>C++</td>
                                    <td>Advance</td>
                                </tr>
                                <tr>
                                    <td>C</td>
                                    <td>Advance</td>
                                </tr>
                                <tr>
                                    <td>Android</td>
                                    <td>Intermediate</td>
                                </tr>
                                <tr>
                                    <td>JS</td>
                                    <td>Intermediate</td>
                                </tr>
                                <tr>
                                    <td>MongoDB</td>
                                    <td>Intermediate</td>
                                </tr>
                                <tr>
                                    <td>ReactJS</td>
                                    <td>Beginner</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col" id="skill-card">
                    <h1>Soft skills</h1>
                    <div class="table-responsive" id="skill-table">
                        <table class="table">
                            <thead>
                                <tr></tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td>Creativity<br></td>
                                </tr>
                                <tr>
                                    <td>Collaboration<br></td>
                                </tr>
                                <tr>
                                    <td>Problem Solving<br></td>
                                </tr>
                                <tr>
                                    <td>Adaptability<br></td>
                                </tr>
                                <tr>
                                    <td>Emotional Intelligence<br></td>
                                </tr>
                                <tr>
                                    <td>Conceptualization<br></td>
                                </tr>
                                <tr>
                                    <td>Leadership<br></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="projects">
        <h1 id="section-title">Projects</h1>
        <div class="row no-gutters">
            <?php            
            $servername = "sql302.epizy.com";
            $username = "epiz_24755839";
            $password = "Crazyfrog909";
            $dbname = "epiz_24755839_portfolio";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            $sql = "SELECT * from projects";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $project_id=$row["project_id"];
                    $project_title=$row["project_title"];
                    $project_desc=$row["project_desc"];
                    $project_tag=$row["project_tag"];
                    $project_mini_desc=$row["project_mini_desc"];
                    $visibility=$row["visibility"];
                    if($visibility==1){
                    echo '
                    <div class="col-md-6 col-project-card" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true">
                <div id="project-card" class="project-card"><span id="project-cat">'.$project_tag.'</span>
                    <h1 id="project-title">'.$project_title.'<br></h1>
                    <p id="project-desc">'.$project_mini_desc.'</p><a class="btn btn-info" role="button" href="project.php?project_id='.$project_id.'" id="project-read-button">Read more<i class="icon ion-arrow-right-b read-more"></i></a></div>
            </div>
                    ';
                    }
                }
            } else {
                echo "0 results";
            }

            mysqli_close($conn);

            ?>
        </div>
    </section>
    <section id="experience">
        <h1 id="section-title">Experience</h1>
        <div class="d-flex flex-row" id="exp-card"><i class="fa fa-calendar" id="exp-card-icon"></i>
            <div>
                <h5 id="exp-duration" style="color: rgb(130,140,150);">September 2019- present<br></h5>
                <h3 id="exp-title">Research Scholarship</h3>
                <h5 id="exp-location" style="color: rgb(130,140,150);">Avantika University<br></h5>
                <p id="exp-desc" style="color: rgb(130,140,150);">Research on smart power grid<br></p>
            </div>
        </div>
        <hr id="white-hr">
        <div class="d-flex flex-row" id="exp-card"><i class="fa fa-calendar" id="exp-card-icon"></i>
            <div>
                <h5 id="exp-duration" style="color: rgb(130,140,150);">May 2019- July 2019<br></h5>
                <h3 id="exp-title">Web Designer/Developer (Intern)</h3>
                <h5 id="exp-location" style="color: rgb(130,140,150);"><strong>HUDE Labs</strong><br></h5>
                <p id="exp-desc" style="color: rgb(130,140,150);">Internship at HUDE labs, Bhopal as a web designer/developer.<br></p>
            </div>
        </div>
    </section>
    <?php 
        echo $footer;
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/script.min.js"></script>
    <script async defer src="https://cdn.simpleanalytics.io/hello.js"></script>
    <noscript><img src="https://api.simpleanalytics.io/hello.gif" alt=""></noscript>
</body>
</html>