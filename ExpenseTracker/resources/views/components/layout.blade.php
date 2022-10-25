<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"/>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <title>Expense Tracker</title>
</head>
<body>
    <header>
            <div class="fixed-top mb-4">
                
                <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
                <div class="container">
                    <a class="navbar-brand" href="index.html" style="text-transform: uppercase;"> EXPENSE TRACKER</a>
                        
                </div>
                </nav>
                <nav class="navbar mb-5 navbar-expand-lg bg-light">
                    <div class="container-fluid"> 
                                               
                    <div class="row">
                     
                     
                    <div class="">
                      <form class="d-flex" role="search">
                        <div class="input-group ">
                                <span class="input-group-text" id="inputGroupPrepend3"><i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i></span>

                                 <input type="text" placeholder="Search Expense" class="form-control " id="" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                         
                        </div>  
                        
                      <!-- <input class="form-control me-2" type="search" placeholder="Search Expense" aria-label="Search" >
                      <button class="btn btn-outline-success" type="submit"><div class="btn-sm d-inline-block" ></div></button> -->
                      </form>
                      
                    </div>
                    <div class="col-sm-2 mt-2 d-flex d-inline-block">
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    </div>

                    </div>
                        

                       
                          <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto mb-2 ms-4 mb-lg-0 float-end"></ul>
                          <li>
                            <div class=" p-1">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="nav-li">WELCOME JOHN</span>
                                
                            </div>
                          </li> 
                          <li class="nav-item dropdown mx-4">
                            <a class="nav-link dropdown-toggle nav-li" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              SORT BY MONTH
                            </a>
                            <ul class="dropdown-menu nav-li" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="/?month=January">Jan</a></li>
                              <li><a class="dropdown-item" href="/?month=February">February</a></li>
                              <li><a class="dropdown-item" href="/?month=March">March</a></li>
                              <li><a class="dropdown-item" href="/?month=April">April</a></li>
                              <li><a class="dropdown-item" href="/?month=May">May</a></li>
                              <li><a class="dropdown-item" href="/?month=June">June</a></li>
                              <li><a class="dropdown-item" href="/?month=July">July</a></li>
                              <li><a class="dropdown-item" href="/?month=August">August</a></li>
                              <li><a class="dropdown-item" href="/?month=September">September</a></li>
                              <li><a class="dropdown-item" href="/?month=October">October</a></li>
                              <li><a class="dropdown-item" href="/?month=November">November</a></li>
                              <li><a class="dropdown-item" href="/?month=December">December</a></li>
                            </ul>
                          </li>
                          
                       
                       
                        

                        
                     
                      <li>
                        <div class=" p-1">                      
                        
                        <span class="mx-3"><a class="text-decoration-none nav-li" href="register.html" >REGISTER</a></span>                     

                       </div>
                     </li>
                      <li>
                        <div class=" p-1">
                        
                        <span class="mx-3"><a class="text-decoration-none nav-li" href="login.html" style="">LOG IN</a></span>

                        </div>
                    </li>
                    <li>
                      <div class=" p-1">
                        
                        <a href="/create" class="btn btn-sm absolute bottom-0 end-1o  text-white py-2 px-2 text-decoration-none me-3" style="background-color: #00ff00"
          >Add Expense</a>

                      </div>
                    </li>
                    </ul>
                    </div>
                        
                    </div>
                </nav>
            </div>
         
     
    </header>

      <!-- main section -->
    <main>         
      {{$slot}}
    </main>

      <!--=====================FOOTER================ -->
     
        <footer class="footer mh-1 myfooter justify-content-center align-items-center py-3 mb-0 mt-4 border-top text-center"  style="background-color: black;">
          <div class=" justify-content-center">
          <p class="col-md-4 mb-0 text-muted ">&copy; 2022 Company, Inc</p>
        </div>
         
      
          <!-- <span>EXPENSE TRACKER</span> -->
          
    </div>
    
   <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
  
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>