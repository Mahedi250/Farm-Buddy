<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Dairy</title>

    <link rel = "icon" href =  
    "https://i.ibb.co/4tctjG9/farm-buddy-logo.png" 
        type = "image/x-icon"> 







        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
     
          <a  class="navbar-brand" href=""><img src="https://i.ibb.co/4tctjG9/farm-buddy-logo.png" height="40"/></a>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    
                  <a class="nav-link" href="logout.php"> <button style="height: 30px; padding-top: 2px; " type="button" class="btn btn-danger">Log Out</button></a> 
                 </li>

            </ul>
          
          
            </div>
                  
              </nav>

</head>
<body>
    <div style="padding-top: 150px; padding-left: 350px;">

    <div class="dropdown" style=margin-left:30px;>
        <button class="btn btn-danger"  type="button" id="dropdownMenuButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="https://i.ibb.co/Bjm32gr/dairy.png" height="50"/></button>
          
        <div class="dropdown-menu" type="button" data-toggle="modal" data-target="#exampleModal" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Sale</a>
          <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Purchase</a>
          <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Per Cow Cost</a>
          <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Daily Milk Record</a>
          <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal" href="#">FCR</a>
          <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Kanta Weight</a>
    </div>
      </div>

      <div style="position:relative; margin-top:-65px; margin-left: 150px;">
        <button type="button"    class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"><img src="https://i.ibb.co/K7wLjTd/Feed.png" height="50"/></button>

                                





      </div>

      <div style="position:relative; margin-top:-65px; margin-left: 270px; "> 

        <button type="button"  class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"><img src="https://i.ibb.co/bPppSnK/vehicle.png" height="50"/></button>

      </div>
      
      <div class="dropdown" style="position: relative; margin-top: -65px; margin-left: 385px;">
        <button class="btn btn-danger"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="https://i.ibb.co/PZdpwps/customer.png" height="50"/></button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Add Customer</a>
          <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Add Customer Balance</a>
    </div>

    <div style="position:relative; margin-top:-65px; margin-left: 115px"> 

      <button type="button"  class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"><img src="https://i.ibb.co/XD0r1YS/user.png" height="50"/></button>

    </div>


    <div class="dropdown" style=" position:relative; margin-top:50px ; left: -355px; ">
      <button class="btn btn-danger"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="https://i.ibb.co/6sThN5L/report.png" height="50"/></button>
      <div class="dropdown-menu" type="button" data-toggle="modal" data-target="#exampleModal" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Cow Sale</a>
        <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Cow Purchase</a>
        <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Per Cow Milk Record</a>
        <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Feed Details</a>
        <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Medicine Details</a>
        <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Bank Statement</a>
        <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal" href="#">User Activity Logs</a>
        <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Kanta Weight</a>
        <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Customer Ledger</a>
  </div>

  <div style="position:relative; margin-top:-65px; margin-left: 115px"> 

    <button type="button"  class="btn btn-danger"data-toggle="modal" data-target="#exampleModal"><img src="https://i.ibb.co/JvYH26q/medicine.png" height="50"/></button>

  </div>

  <div class="dropdown" style=" position:relative;  margin-top: -65px; margin-left: 240px;">
    <button class="btn btn-danger"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img src="https://i.ibb.co/16XPffZ/expence.png" height="50"/></button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Expense</a>
      <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Expense Chategory</a>
</div>

<div class="dropdown" style=" position:relative;  margin-top: -65px; margin-left: 115px;">
  <button class="btn btn-danger"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img src="https://i.ibb.co/XVX7GMC/bank.png" height="50"/></button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Add Bank</a>
    <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Deposite/ Online Receiving</a>
    <a class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal" href="#">Debit/ Online Sending</a>
</div>

<div style="position:relative; margin-top:-65px; margin-left: 115px;"> 

  <button type="button"  class="btn btn-danger"data-toggle="modal" data-target="#exampleModal"><img src="https://i.ibb.co/6RH1BD1/backup.png" height="50"/></button>

</div>

</div>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           <br>
          <div style="position: relative; top: 20px; border-style: solid; width: 260px; height: 140PX;">
           

            <table style="width:15%; ">
            <tr>
                    <td>Date:</td>
                    <td><input type="date"></td>
                </tr>
                <tr>
                  <td>Price:</td>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <td>Quantity:</td>
                  <td><input type="text"></td>
                </tr>
                <tr>
                  <td>Total:</td>
                  <td><input type="text"></td>
                </tr>
              </table>
              
          </div>
        
          <div style="position: relative; top: -120px; ;left: 265px; border-style: solid; width: 400px; height:140PX ; ">
            <table >
             <td>  <tr>
                    <td>Company Name:</td>
                    <td><input type="text" style="padding-left: 60px;"></td>
                </tr>
                <tr>
                  <td>Address:</td>
                  <td><input type="text" style="padding-bottom:25px ;padding-left: 60px;"></td>
                </tr>
                <tr>
                  <td>Quantity:</td>
                  <td><input type="text" style="padding-left: 60px;"></td>
                </tr>
        
              </table>
              
          </div>
          <div style="position: relative; top: -257px; ;left: 675px;">
            <input type="button" value="New"><br><br>
        <input type="button" value="Save"><br><br>
        <input type="button" value="Close">
          </div>
        
        <div style="position: relative; top: -200px;  border-style: solid; width: 720px; height: 100px;  ">
        
        
        </div>



        </div>
      </div>
    </div>
  </div>

  
</body>
<footer>

  <div  class="fixed-bottom" > 
    <div class="p-3 mb-2 bg-dark text-white">User:

      <label for=""></label>

  </div></div>

</footer>
</html>