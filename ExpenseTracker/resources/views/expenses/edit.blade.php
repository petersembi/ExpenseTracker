<x-layout>
  <div class="container mycontainer mt-5 mb-5 position-relative" >
    <div class="row">
      <div class="col-md-7 mx-auto " style="margin-top: 70px" >
          <div class="card mt-5">
              <div class="card-header  bg-dark text-white text-center">
                  <h4 class="mt-3">Edit Expense</h4>
              </div>
              <div class="card-body">
                  <form action="/expenses/{{$expense->id}}" method="POST">
                    @csrf
                    @method('PUT')
                      <div class="mb-3">
                          {{-- change type to date later --}}
                          <label for="name"> Date</label>
                          <input type="text" id="date" class="form-control" name="date_of_creation" placeholder= "yy-mm-dd" value="{{$expense->date_of_creation}}" required>
                      </div>
                      <div class="mb-3">
                          <label for="item">Item</label>
                          <input type="text" id="item" class="form-control" name="item" value="{{$expense->item}}"  required>
                      </div>
                      <div class="mb-3">
                          <label for="category">Category</label>
                          <input type="text" id="category" class="form-control" name="category" value="{{$expense->category}}"  required>
                      </div>
                      <div class="mb-3">
                          <label for="quantity">Quantity</label>
                          <input type="text" id="quantity" class="form-control" name="quantity" placeholder="E.g 2 packets" value="{{$expense->quantity}}"  required>
                      </div>
                      <div class="mb-3">
                          <label for="cost">Cost</label>
                          <input type="text" id="cost" class="form-control" name="cost" placeholder="Enter a numerical value (Ksh.)"  value="{{$expense->cost}}" required>
                      </div>
                     
                      <div class="mb-3 text-center">
                          <button type="submit" class="btn btn-primary" name="save_person">Edit Expense</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
        
   
        </div>
    {{-- </div> --}} 

</x-layout>