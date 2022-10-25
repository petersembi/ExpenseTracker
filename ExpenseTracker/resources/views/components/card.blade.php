@props(['expense'])


<div class="col-sm-6 col-md-3 mt-5">
    <div class="card" style="margin-top: 60px;">
        <h5 class="card-header text-center bg-dark text-white">{{$expense->date_of_creation}}</h5>
        <div class="card-body text-center ">
          <h5 class="card-title text-center"><i class='fas fa-coins' style='font-size:48px;color:lightgreen'></i><br><br> </h5>
          <span class="card-text">Total Cost: Ksh {{$expense->cost}}</span><br>
          <span class="card-text font-weight-bold">Author: {{$expense->author}}</span><br>

          <a href="show.html" class="btn btn-sm btn-secondary px-5 mt-1 text-center justify-content-center">Details</a>
        </div>
        
    </div>
    
</div>