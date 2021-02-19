<!DOCTYPE html>
<html>
<head>
  <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">EasyTrav</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Airport Drop<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cab Tour</a>
      </li>
     
    
        <a class="nav-link" href="#">City Transfer</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="#">General Purpose</a>
      </li>
     
       
     
      
     
    </ul>
    
  </div>
</nav>

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Airport Drop</h2>
    </div>
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label >Name</label>
          <input type="text"   name="Name" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile</label>
          <input type="text"   name="Mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Email</label>
           
          <input type="text"  name="Email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
         <label>Pickup Location </label>
           
          <input type="text"   name="PickupLocation" autocomplete="off" class="form-control">
        </div>
         <div class="form-group">
         <label>Airport Location </label>
          <select id="Airport Location">
   <option value="Biju Patnaik Airport
">Biju Patnaik Airport
</option>
   <option value="SEDAN ">Jharsuguda Airport
</option>
           
          <input type="text"   name="AirportLocation" autocomplete="off" class="form-control">
        </div>
        <div>


        <label>Cartype </label><br>
        
          
        <select>
      <option>SUV</option>
       <option>SEDAN</option>
       <option>HATCH BACK</option>
        <option>select car</option>
  
        <input type="text" name="Cartype" autocomplete="off" class="form-control">
        </select>
      </div>

      
        <br></br>
      <button type="Submit" class="btn btn-success">Submit</button>
       </form>
    </div>
    


</form>
</div>
</section>
<br>
<footer>
  <p class="p-3 bg-dark text-white text-center"> @EasyTrav 2021</p>
</footer>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>