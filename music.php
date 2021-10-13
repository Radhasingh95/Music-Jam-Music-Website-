<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
  <!-- font-family: 'Permanent Marker', cursive; -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
  <title>Music Jam</title>
  <style>
    body{
      background-color: black;
    }
  </style>
</head>

<body>



  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Music Jam</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="/index.html">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/about.html">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact.html">Contact Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Products
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/instruments.html">Instruments</a></li>
              <li><a class="dropdown-item" href="/music.html">Music</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Support Us</a></li>
            </ul>
          </li>


          <!-- Code for diabled  -->
          <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> -->
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search song" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <div class="mx-2">
          <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
          <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</button>

        </div>
      </div>
    </div>
  </nav>



  <!-- Login Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login to Music Jam</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            
            <button type="submit" name = "submit"  class="btn btn-primary">Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>


  <!-- Sign Up Modal -->
  <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Get a Music Jam Account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action = "connect.php" method = "POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name = "email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>

            

            <button type="submit" class="btn btn-primary">Create account</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  </div>
 


   <!-- Music list starts here -->
   <p class="h3 my-5 mx-5 text-light">Get started with...</p>

   <div class="container marketing">
 
     <!-- Three columns of text below the carousel -->
     <div class="row">
       <div class="col-lg-2">
         <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
         <img src="Assets/neha.jpg" class="bd-placeholder-img rounded-circle" alt="..." width="150" height="150">
 
         <h2 class="text-light">Neha Kakkar</h2>
         <!-- <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p> -->
         <p><a class="btn btn-warning" href="#">Play »</a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-lg-2">
         <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
         <img src="Assets/arijit.webp" class="bd-placeholder-img rounded-circle" alt="..." width="150" height="150">
 
         <h2 class="text-light">Arijit Singh</h2>
         <!-- <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p> -->
         <p><a class="btn btn-danger" href="#">Play »</a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-lg-2">
         <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
         <img src="Assets/atif.jpg" class="bd-placeholder-img rounded-circle" alt="..." width="150" height="150">
 
         <h2 class="text-light">Atif Aslam</h2>
         <!-- <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p> -->
         <p><a class="btn btn-warning" href="#">Play »</a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-lg-2">
         <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
         <img src="Assets/sunidhi.jpeg" class="bd-placeholder-img rounded-circle" alt="..." width="150" height="150">
 
         <h2 class="text-light">Sunidhi Chauhan</h2>
         <!-- <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p> -->
         <p><a class="btn btn-danger" href="#">Play »</a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-lg-2">
         <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
 
         <img src="Assets/jassi.jpeg" class="bd-placeholder-img rounded-circle" alt="..." width="150" height="150">
         <h2 class="text-light">Jassi Gill</h2>
         <!-- <p>And lastly this, the third column of representative placeholder content.</p> -->
         <p><a class="btn btn-warning" href="#">Play »</a></p>
       </div><!-- /.col-lg-4 -->
     </div><!-- /.row -->
   </div>
 
   <p class="h3 my-5 mx-5 text-light">Quick Songs...</p>
   <div class="d-flex  justify-content-center ">
     <div class="col-lg-2 mx-4  w-25">
       <div class="list-group list-group-flush">
         <a href="#" class="list-group-item list-group-item-action active ">
           Cras justo odio
         </a>
         <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
         <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
         <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
         <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
       </div>
     </div>
     <div class="col-lg-2 mx-4 w-25">
       <div class="list-group list-group-flush">
         <a href="#" class="list-group-item list-group-item-action active">
           Cras justo odio
         </a>
         <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
         <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
         <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
         <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
       </div>
     </div>
     <div class="col-lg-2 mx-4 w-25">
       <div class="list-group list-group-flush">
         <a href="#" class="list-group-item list-group-item-action active">
           Cras justo odio
         </a>
         <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
         <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
         <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
         <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
       </div>
     </div>
   </div>
 
 
   <p class="h3 my-5 mx-5 text-light">Old is Gold...</p>
   <div class="container marketing">
 
     <!-- Three columns of text below the carousel -->
     <div class="row">
       <div class="col-lg-2">
         <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
         <img src="Assets/neha.jpg" class="bd-placeholder-img rounded-circle" alt="..." width="150" height="150">
 
         <h2 class="text-light">Neha Kakkar</h2>
         <!-- <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p> -->
         <p><a class="btn btn-warning" href="#">Play »</a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-lg-2">
         <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
         <img src="Assets/arijit.webp" class="bd-placeholder-img rounded-circle" alt="..." width="150" height="150">
 
         <h2 class="text-light">Arijit Singh</h2>
         <!-- <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p> -->
         <p><a class="btn btn-danger" href="#">Play »</a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-lg-2">
         <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
         <img src="Assets/atif.jpg" class="bd-placeholder-img rounded-circle" alt="..." width="150" height="150">
 
         <h2 class="text-light">Atif Aslam</h2>
         <!-- <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p> -->
         <p><a class="btn btn-warning" href="#">Play »</a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-lg-2">
         <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
         <img src="Assets/sunidhi.jpeg" class="bd-placeholder-img rounded-circle" alt="..." width="150" height="150">
 
         <h2 class="text-light">Sunidhi Chauhan</h2>
         <!-- <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p> -->
         <p><a class="btn btn-danger" href="#">Play »</a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-lg-2">
         <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
 
         <img src="Assets/jassi.jpeg" class="bd-placeholder-img rounded-circle" alt="..." width="150" height="150">
         <h2 class="text-light">Jassi Gill</h2>
         <!-- <p>And lastly this, the third column of representative placeholder content.</p> -->
         <p><a class="btn btn-warning" href="#">Play »</a></p>
       </div><!-- /.col-lg-4 -->
     </div><!-- /.row -->
   </div>
 
   <p class="h3 my-5 mx-5 text-light">Hollywood Hits...</p>
   <div class="container marketing">
 
     <!-- Three columns of text below the carousel -->
     <div class="row">
       <div class="col-lg-2">
         <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
         <img src="Assets/neha.jpg" class="bd-placeholder-img rounded-circle" alt="..." width="150" height="150">
 
         <h2 class="text-light">Neha Kakkar</h2>
         <!-- <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p> -->
         <p><a class="btn btn-warning" href="#">Play »</a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-lg-2">
         <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
         <img src="Assets/arijit.webp" class="bd-placeholder-img rounded-circle" alt="..." width="150" height="150">
 
         <h2 class="text-light">Arijit Singh</h2>
         <!-- <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p> -->
         <p><a class="btn btn-danger" href="#">Play »</a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-lg-2">
         <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
         <img src="Assets/atif.jpg" class="bd-placeholder-img rounded-circle" alt="..." width="150" height="150">
 
         <h2 class="text-light">Atif Aslam</h2>
         <!-- <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p> -->
         <p><a class="btn btn-warning" href="#">Play »</a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-lg-2">
         <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
         <img src="Assets/sunidhi.jpeg" class="bd-placeholder-img rounded-circle" alt="..." width="150" height="150">
 
         <h2 class="text-light">Sunidhi Chauhan</h2>
         <!-- <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p> -->
         <p><a class="btn btn-danger" href="#">Play »</a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-lg-2">
         <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
 
         <img src="Assets/jassi.jpeg" class="bd-placeholder-img rounded-circle" alt="..." width="150" height="150">
         <h2 class="text-light">Jassi Gill</h2>
         <!-- <p>And lastly this, the third column of representative placeholder content.</p> -->
         <p><a class="btn btn-warning" href="#">Play »</a></p>
       </div><!-- /.col-lg-4 -->
     </div><!-- /.row -->
 
   </div>
 
   <p class="h3 my-5 mx-5 text-light">Party Songs...</p>
 
   <div class="container marketing">
 
     <!-- Three columns of text below the carousel -->
     <div class="row">
       <div class="col-lg-2">
         <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
         <img src="Assets/neha.jpg" class="bd-placeholder-img rounded-circle" alt="..." width="150" height="150">
 
         <h2 class="text-light">Neha Kakkar</h2>
         <!-- <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p> -->
         <p><a class="btn btn-warning" href="#">Play »</a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-lg-2">
         <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
         <img src="Assets/arijit.webp" class="bd-placeholder-img rounded-circle" alt="..." width="150" height="150">
 
         <h2 class="text-light">Arijit Singh</h2>
         <!-- <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p> -->
         <p><a class="btn btn-danger" href="#">Play »</a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-lg-2">
         <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
         <img src="Assets/atif.jpg" class="bd-placeholder-img rounded-circle" alt="..." width="150" height="150">
 
         <h2 class="text-light">Atif Aslam</h2>
         <!-- <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p> -->
         <p><a class="btn btn-warning" href="#">Play »</a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-lg-2">
         <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
         <img src="Assets/sunidhi.jpeg" class="bd-placeholder-img rounded-circle" alt="..." width="150" height="150">
 
         <h2 class="text-light">Sunidhi Chauhan</h2>
         <!-- <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p> -->
         <p><a class="btn btn-danger" href="#">Play »</a></p>
       </div><!-- /.col-lg-4 -->
       <div class="col-lg-2">
         <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg> -->
 
         <img src="Assets/jassi.jpeg" class="bd-placeholder-img rounded-circle" alt="..." width="150" height="150">
         <h2 class="text-light">Jassi Gill</h2>
         <!-- <p>And lastly this, the third column of representative placeholder content.</p> -->
         <p><a class="btn btn-warning" href="#">Play »</a></p>
       </div><!-- /.col-lg-4 -->
     </div><!-- /.row -->
 
   </div>



   <!-- Music list ends here  -->


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>