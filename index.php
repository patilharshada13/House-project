<?php
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $query=$_POST['query2'];

  $con=mysqli_connect('localhost','root',"",'next');

  $sql="INSERT INTO newtable(name,email,query) VALUES('$name','$email','$query2')";


  if(mysqli_query($con,$sql))
  {
    echo "<script>alert('new record inserted')</script>";
  }
  else{
    echo "error..";
  }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-warning">Build</span>Con</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              </ul>
              
          </div>
        </div>
      </nav>

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="home-1.jpg" class="d-block w-100" alt="...">
          
            <div class="carousel-caption ">
              <h5>Your Dream House</h5>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione nemo 
                voluptatum ad deserunt animi delectus</p>
              <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="home-2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Always Dedicated</h5>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione nemo 
                voluptatum ad deserunt animi delectus</p>
              <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="home-3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>True Contruction</h5>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione nemo 
                voluptatum ad deserunt animi delectus</p>
              <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- about section -->
      <section id="about" class="about section-padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
              <div class="about-img"></div>
              <img src="about.jpg" alt="" class="img-fluid">                
            </div>
            <div class="col-lg-8 col-12 ps-lg-5 mt-md-5">
              <div class="about-text">
                <h2>We provide Best Quality <br> Services Ever</h2>
                <p>Lorem ipsum dolor sit amet consectetur 
                   adipisicing elit. Error eius assumenda exercitationem labore in incidunt</p>
                    <a href="#" class="btn btn-warning">Learn More</a>
                  </div>
            </div>
          </div>
        </div>

        <!--Services section-->
        <section id="services" class="services section-padding">
          <div class="container">
            <div class="row">
            <div class="col-md-12">
              <div class="section-header text-center pd-5">
                <h2>Our Services</h2>
                <p>Lorem ipsum dolor, sit amet consectetur <br>
                  adipisicing elit. Impedit, totam? Doloremque nam qui voluptatum hic.</p>
              </div>
            </div>
            </div>
          
          <div class="row">
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pd-2">
                  <div class="card-body">
                    <i class="bi bi-subtract"></i>
                    <h3 class="card-title">Best Quality </h3>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur, 
                      adipisicing elit. Omnis voluptatem aliquam dolores, itaque libero cumque Lorem ipsum dolor sit amet consectetur 
                      adipisicing elit. Suscipit totam voluptate, rerum quae praesentium dicta!</p>
                    <button class="btn btn-warning text-dark">Read More</button>                  
                    </div>
                </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                  <div class="card text-white text-center bg-dark pd-2">
                    <div class="card-body">
                      <i class="bi bi-playstation"></i>
                      <h3 class="card-title">Integrity</h3>
                      <p class="lead">Lorem ipsum dolor sit amet consectetur, 
                        adipisicing elit. Omnis voluptatem aliquam dolores, itaque libero cumque Lorem ipsum dolor sit amet consectetur 
                        adipisicing elit. Suscipit totam voluptate, rerum quae praesentium dicta!</p>
                      <button class="btn btn-warning text-dark">Read More</button>                  
                      </div>
                  </div>
                  </div>
                  <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pd-2">
                      <div class="card-body">
                        <i class="bi bi-slack"></i>
                        <h3 class="card-title">Sustainability</h3>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur, 
                          adipisicing elit. Omnis voluptatem aliquam dolores, itaque libero cumque Lorem ipsum dolor sit amet consectetur 
                          adipisicing elit. Suscipit totam voluptate, rerum quae praesentium dicta!</p>
                        <button class="btn btn-warning text-dark">Read More</button>                  
                        </div>
                    </div>
            </div>
            </div>
          </div>
         </section>
         <!-- portfolio section-->
         <section id="portfolio" class="portfolio section-padding">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="section-header text-center pd-5">
                  <h2>Our Projects</h2>
                  <p>Lorem ipsum dolor, sit amet consectetur <br>
                    adipisicing elit. Impedit, totam? Doloremque nam qui voluptatum hic.</p>
                </div>
              </div>
              </div>
                <div class="row">
                  <div class="col-12 col-md-12 col-lg-4">
                    <div class="card -body text-dark">
                      <div class="img-area mb-4">
                        <img src="project-1.jpg" alt="" class="img-fluid">
                        <h3 class="card-title">Building Make</h3>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                       Nesciunt veniam amet repellendus Rerm</p>
                          <button class="btn bg-warning text-dark">Learn More</button>
                      </div> 
                    </div>
                  </div>
                
                <div class="col-12 col-md-12 col-lg-4">
                  <div class="card -body text-dark">
                    <div class="img-area mb-4">
                      <img src="project-2.jpg" alt="" class="img-fluid">
                      <h3 class="card-title">Building Make</h3>
                      <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                     Nesciunt veniam amet repellendus Rerm</p>
                        <button class="btn bg-warning text-dark">Learn More</button>
                    </div> 
                  </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                  <div class="card -body text-dark">
                    <div class="img-area mb-4">
                      <img src="project-3.jpg" alt="" class="img-fluid">
                      <h3 class="card-title">Building Make</h3>
                      <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                     Nesciunt veniam amet repellendus Rerm</p>
                        <button class="btn bg-warning text-dark">Learn More</button>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!--team section-->
          <section id="team" class="team section-padding">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="section-header text-center pd-5">
                    <h2>Our Projects</h2>
                    <p>Lorem ipsum dolor sit amet consectetur <br>adipisicing elit. Voluptatibus, voluptatum.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                  <div class="card text-center">
                    <div class="card-body">
                      <img src="team-1.jpg" alt="" class="img-fluid rounded-circle">
                      <h3 class="card-title py-2">Jack Wilson</h3>
                      <p class="card-text">Lorem ipsum dolor sit amet 
                        consectetur adipisicing elit. Minus fuga tempora repellat ullam in nemo.</p>
                      <p class="socials">
                        <i class="bi bi-twitter text-dark mx-1"></i>
                        <i class="bi bi-facebook text-dark mx-1"></i>
                        <i class="bi bi-linkedin text-dark mx-1"></i>
                        <i class="bi bi-Github text-dark mx-1"></i>
                      </p>
                      </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                  <div class="card text-center">
                    <div class="card-body">
                      <img src="team-2.jpg" alt="" class="img-fluid rounded-circle">
                      <h3 class="card-title py-2">Jack Wilson</h3>
                      <p class="card-text">Lorem ipsum dolor sit amet 
                        consectetur adipisicing elit. Minus fuga tempora repellat ullam in nemo.</p>
                      <p class="socials">
                        <i class="bi bi-twitter text-dark mx-1"></i>
                        <i class="bi bi-facebook text-dark mx-1"></i>
                        <i class="bi bi-linkedin text-dark mx-1"></i>
                        <i class="bi bi-Github text-dark mx-1"></i>
                      </p>
                      </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                  <div class="card text-center">
                    <div class="card-body">
                      <img src="team-3.jpg" alt="" class="img-fluid rounded-circle">
                      <h3 class="card-title py-2">Jack Wilson</h3>
                      <p class="card-text">Lorem ipsum dolor sit amet 
                        consectetur adipisicing elit. Minus fuga tempora repellat ullam in nemo.</p>
                      <p class="socials">
                        <i class="bi bi-twitter text-dark mx-1"></i>
                        <i class="bi bi-facebook text-dark mx-1"></i>
                        <i class="bi bi-linkedin text-dark mx-1"></i>
                        <i class="bi bi-Github text-dark mx-1"></i>
                      </p>
                      </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                  <div class="card text-center">
                    <div class="card-body">
                      <img src="team-4.jpg" alt="" class="img-fluid rounded-circle">
                      <h3 class="card-title py-2">Jack Wilson</h3>
                      <p class="card-text">Lorem ipsum dolor sit amet 
                        consectetur adipisicing elit. Minus fuga tempora repellat ullam in nemo.</p>
                      <p class="socials">
                        <i class="bi bi-twitter text-dark mx-1"></i>
                        <i class="bi bi-facebook text-dark mx-1"></i>
                        <i class="bi bi-linkedin text-dark mx-1"></i>
                        <i class="bi bi-Github text-dark mx-1"></i>
                      </p>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <!-- contact section -->
        <section id="contact" class="contact section-padding">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="section-header text-center pb-5">
                  <h2>Contact Us</h2>
                  <p>Lorem, ipsum dolor sit amet consectetur 
                    adipisicing elit. Aperiam eaque saepe inventore alias, nesciunt eos.</p>
                </div>
              </div>
            </div>
            <div class="row m-0">
              <div class="col-md-12 p-0 pt-4 pb-4">
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3">
                      <input type="text" class="form-control"  name="name" required placeholder="Your Full Name">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <input type="email" class="form-control" name="email" required placeholder="Your Email Here">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <textarea  rows="3" required class="form-control" name="query" placeholder="Your Query Here"></textarea>
                  </div>
                </div>
                <button class="btn btn-warning btn-lg btn-block mt-3" name="submit">submit</button>
              </div>
              <div class="row m-0">
                <div class="col-md-12 p-0 pt-4 pb-4">
               <form action="#" class="bg-light p-4.m-auto"></form>   
            </div>
            </div>
          </div>
        </section>

        <!-- Footer -->
        <footer class="bg-dark p-2 text-center">
          <div class="container">
            <p class="text-white">All Right Reserved @website Name</p>
          </div>
        </footer>        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>