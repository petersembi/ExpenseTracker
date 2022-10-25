<x-layout>
    <div class="container mycontainer mt-5 mb-5 position-relative" >
          
          
        {{-- <form method="POST" action="/expenses" class="" style="margin-top:140px;"> --}}
          <div class=" row g-3">
          <div class="bg-themecolor p-1 text-center">
            <h3>Current Expenses</h3>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">SR No.</th>
                <th scope="col">Item</th>
                <th scope="col">Quantity</th>
                <th scope="col">Category</th>
                <th scope="col">Cost (KSh.)</th>
                <th scope="col">Date</th>
              </tr>
            </thead>
            <tbody>
                <?php $srNo = 1?>
            @foreach($expenses as $expense)
                
              <tr>
                <th scope="row"><?php echo $srNo ?></th>
                <td>{{$expense->item}}</td>
                <td>{{$expense->quantity}}</td>
                <td>{{$expense->category}}</td>
                <td>{{$expense->cost}}</td>
                <td>{{$expense->date_of_creation}}</td>
               
              </tr>
              <?php $srNo += 1?>
            @endforeach           
              
            </tbody>
            
          </table>
          <div class="row">
        
          <div class="col-md-4">
            <input class="form-control" id="totalCost" type="text" value=" Total Cost Ksh 60" readonly>

          </div>
            <div class="col-md-4 mx-auto mt-3">
              <!-- Button trigger modal -->
              
                <button type="button" class="btn btn-primary mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <span class="">Add New Item</span>
                  
                </button>
             

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Item</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action='/expenses' method="post">

                        <div class="row g-3">
                            <div class="col-md-9">

                                <div class="input-group date" id="datepicker">
                                    <label for="validationServer01" class="form-label me-3" >Date</label>
                                    <input type="text" class="form-control" name="date">
                                    <span class="input-group-append">
                                        <span class="input-group-text bg-white d-block">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <label for="validationServer01" class="form-label">Item</label>
                              <input type="text" class="form-control" id="validationServer01" name="item" placeholder="Item" required>
                              
                            </div>
                            <div class="col-md-6">
                              <label for="validationServer01" class="form-label">Category</label>
                              <select class="form-select" aria-label="Default select example" name="category">
                                <option selected>Select Category</option>
                                <option value="1">Household Items</option>
                                <option value="2">Friends</option>
                                <option value="3">Meals</option>
                                <option value="3">Charity</option>
                              </select>
                              
                            </div>
                            <div class="col-md-6">
                              <label for="validationServer01" class="form-label" name="quantity">Quantity</label>
                              <input type="text" class="form-control" id="validationServer01" placeholder="Quantity" required>
                              
                            </div>
                            <div class="col-md-6">
                              <label for="validationServer01" class="form-label" name="cost">Cost</label>
                              <input type="text" class="form-control" id="validationServer01" placeholder="Enter numerical value" required>
                              
                            </div>
                        </div>
                          
                          
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit Item</button>
                          </div>
                        </div>

                      </form>
                     
                      </div>
                    </div>
                    
                </div>
              
              </div>   
            
          </div>
          
         
          
        
          
        </div>
    {{-- </form> --}}

</x-layout>