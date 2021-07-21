<!doctype html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="tsf.css"> 
</head>
<body>
<div class="main_div">
 
 <div class="navbar navbar-expand-md">
  <a href="#" class="navbar-brand font-weight-bold text-white text-center"><h2>BANK</h2></a>
  <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
  <span class="navbar-toggler-icon" style="background:white;"></span>
  </button>
 
   <div class="collapse navbar-collapse text-center" id="collapsenavbar">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a href="index.php" class="nav-link text-white "><span style="margin-left:90px;">ABOUT</span></a></li>
          <li class="nav-item">
              <a href="viewcustomer.php" class="nav-link text-white ">VIEW CUSTOMERS</a></li>
          <li class="nav-item">
              <a href="history.php" class="nav-link text-white">TRANSACTION HISTORY</a></li>
          <li class="nav-item">
              <a href="#contact" class="nav-link text-white">CONTACT</a></li>    
           </ul>
    </div>
 </div>
 <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <img src="Bank.jpg" class="img-fluid" width="180" height="150" style="margin-top:70px;">
        <h1 class="main_text">BANK</h1>
        <p class="big-text">Serving since years</p>
       
      </div>
      <div class="col-sm-6">
        
        <img src="Bank01.jpg" class="img-fluid" width="560" height="345" style="margin-top:70px;">
       
      </div>
   </div>
   
</div>
</div>
</div>
<!--contact starts-->
<section class="contactus" id="contact" >
    <div class="container headings text-center">
        <h1 class="center" style="font-weight: bold;text-align: center;">CONTACT US</h1>
        <p>We're Here For You. Feel Free To Clear All Your Queries Here.</p> 
        <p>Also Do Give Us Your Valuable Feedback To Improve Our Services</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offet-md-2-col col-1">
                <form action="/action_page.php">
                    <div class="form-group">
                      
                      <input type="text" class="form-control" placeholder="Enter name" id="username" required autocomplete="off">
                    </div>
                    <form action="/action_page.php">
                        <div class="form-group">
                          
                          <input type="email" class="form-control" placeholder="Enter email" id="email" required autocomplete="off">
                        </div>
                        <form action="/action_page.php">
                            <div class="form-group">
                              
                              <input type="number" class="form-control" placeholder="Enter mobile number" id="mobile" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="comment">Comment:</label>
                                <textarea class="form-control" rows="4" id="comment" placeholder="Your Comments"></textarea>
                              </div>
                              <div class="formbutton" style="display: flex;justify-content: center;">
                    <button type="submit" >Submit</button></div>
                  </form>
            </div>
        </div>
    </div>
   </section>
</body>
</html>