<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style>
      .footer_style{
     background: #2c2c54;
     color: white;
 }

 a{
    text-decoration: none;
    color: white;
  }
  a:hover{ text-decoration: none; color:yellow; }


  .d-flex div{
    text-align: center;
    border-right: 1px solid grey;
     border-top: 1px solid grey;
  }
  
  .d-flex div: last-child{
    border-right: none;
  }
  
  media(max-width: 768px){
    li{
      list-style: none;
    }
  }



  *{
    margin: 0px; padding: 0px; box-sizing: border-box;

}

 .carousel-inner img {
     width: 100%;
     height: 90vh;
 }

 .aboutimg{
     width: 92%;
     height: 395px!important;
 }
 





    </style>
</head>
<body> 

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Fitness Mavericks</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="indexx.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/gym7.webp" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Fitness lover</h3>
        <p>GET READY TO BURN</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/gym10.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3></h3>
        <p>STRONG HAPPENS WHEN YOU RUN OUT OF WEAK</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/d1.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Diet</h3>
        <p> </p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>
<div class="container-fluid">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/ng1.jpg" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-5">Work out at home for free</h2>
      <p>There are a LOT of exercise videos online, especially on Youtube, but the ones that made this list are the very best when it comes to teaching you how to exercise at home. These workouts require little to no equipment and are taught by excellent fitness instructors who know their stuff.



        
      
      We believe fitness should be accessible to everyone, everywhere, regardless of income or access to a gym. With hundreds of professional workouts, healthy recipes and informative articles, as well as one of the most positive communities on the web, you’ll have everything you need to reach your personal fitness goals – for free!  </p>
      <a href="about.php">Check more </a>
    </div>
    </div>
    
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Services</h2>
    </div>

    <div class="container fluid">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
    <div class="card" >
  <img class="card-img-top" src="images/gym19.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">My Gym</h4>
    <p class="card-text">Gym helps you to give equipments to fulfill your need</p>
    <a href="#" class="btn btn-primary">See Profile</a>
          </div>
      </div>
  </div>
    <div class="col-lg-4 col-md-4 col-12">
    <div class="card" >
  <img class="card-img-top" src="images/workoutplan.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Workout Plan</h4>
    <p class="card-text">workout helps you to get strength</p>
    <a href="#" class="btn btn-primary">See Profile</a>
          </div>
      </div>
  </div>
    <div class="col-lg-4 col-md-4 col-12">
    <div class="card" >
  <img class="card-img-top" src="images/dietplan.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Diet Plan</h4>
    <p class="card-text">Its a fact 70% diet is required to build body.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
          </div>
      </div>
  </div>
    </div>
    </div>
    </section>

    <section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Gallery</h2>
    </div>

<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-12">
<img src="images/gym5.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/gym6.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/gym17.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/gym8.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/gym15.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/gym21.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/ng2.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/ng5.jpg" class="img-fluid pb-4">
</div>
<div class="col-lg-4 col-md-4 col-12">
<img src="images/ng3.jpg" class="img-fluid pb-4">
</div>


</div>

</div>

    </section>

    <section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Services</h2>

        
    </div>

<div class="w-50 m-auto">
        <form action="info.php" method="post">
        <div class="form-group">
        <label>username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
        <label>email</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
        <label>Mobile no.</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>

    </section>

<footer class="footer_style">


<main class="container-fluid">
<div class="row p-3">
  <div class="col-md-4 col-12 offset-md-1">
  <p class="mt-5 text-justify">Being physically and mentally fit is necessary for an individual to live a happy, longer life. Typically, exercise is one of the best ways to keep a person healthy. Hence, no matter how busy you are, it’s always best to find time to do workout routine. With the numerous diseases that spread in the world today, many individuals realized the essence of workout. Specifically, having workout routine will give an individual the greatest benefit in physical, mental and social aspects. Accordingly, exercise will not just help you increase energy levels, reduce risk of chronic disease and lose weight but will also help improve brain health and memory. With such benefits, you probably will love to do workout routines soon. Luckily, you don’t need to do it by yourself as various personal trainers or professional fitness coach exist to provide the help you need. And joining fitness classes is just at your fingertips. Today, we’re going to provide you with ample gym websites design that will help fitness enthusiasts and personal trainers craft amazing gym websites with innovation.</p>
  <p class="mt-5 text justify"> Fitnessmavericks youtube channel is here to help you. if u want any support just subscribe and share my youtube channel with your friends.</p>
  <p class="text-capatalize"> FITNESSMAVERICKS All right reserved.</p>
  </div>
  <div class="col-md-4 col-12">
  <h4>Contacts</h4>
  <dl class="Contacts list">
  <dt>Address:</dt>
  <dd>Chandigarh</dd>
  </dl>
  <dl class="Contacts list">
  <dt>Email:</dt>
  <dd><a href="mailto:#">fitnessmavericks@gmail.com</a></dd>
  </dl>
  <dl class="Contacts list">
  <dt>Phones:</dt>
  <dd><a href="tel:#"> +91 9878958324</a> <span>or</span><a href="tel:#"> +91 9875462465 </a>
  </dd>
  </dl>

  </div>
  <div class="col-md-2 col-12" >
  <h4>Links</h4>
  <ul>
  <li><a href="#">Services</a></li>
  <li><a href="#">Portfolio</a></li>
  <li><a href="#">Blog</a></li>
  <li><a href="#">Contacts</a></li>
  <li><a href="#">About us</a></li>
  </ul>
  </div>
</div>
<div class="d-flex justify-content-around align-items-center">

<div class="p-md-5 p-2 flex fill" >
  <a href="https://www.facebook.com/IITIAN07" ><i class="fa fa-facebook-official" aria-hidden="true"></i>
<span>Facebook</span></a></div>

<div class="p-md-5 p-2 flex fill">
<a href="https://www.instagram.com/naveen_gupta10/" ><i class="fa fa-instagram-official" aria-hidden="true"></i>
<span>instagram</span></a></div>

<div class="p-md-5 p-2 flex fill">
<a href="https://www.youtube.com/channel/UCfhp0bl-zWqNCODE5CvhbSQ?view_as=subscriber" ><i class="fa fa-youtube-official" aria-hidden="true"></i><span>Youtube</span></a></div>

</div>
</main>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
</body>
</html>