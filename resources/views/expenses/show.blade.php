<x-layout>

    <div class="container mycontainer  mt-5 mb-5 position-relative" style="margin-top:100000px;">
      <div class="row">
        <div class="col-md-7 mx-auto " style="margin-top: 50px" >
            <div class="card mt-5">
                <div class="card-header  bg-dark text-white text-center">
                    
                    <h4 class="mt-3">My Expenses : {{$data['currentDate']}}</h4>
                </div>
                <div class="card-body">   
          
        <form class=" " >
          <div class="row g-3">
             
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">SR No.</th>
                    <th scope="col">Item</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Category</th>
                    <th scope="col">Cost (KSh.)</th>
                    <th scope="col">Edit </th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                   
                  <?php $serialNo = 0 ?>
                    @foreach($expensesForParticularDate as $expenseForParticularDate)
                    <?php $serialNo += 1; ?>
                        <tr>
                            <th><?php echo ($serialNo) ?></th>
                            <td>{{$expenseForParticularDate["item"]}}</td>
                            <td>{{$expenseForParticularDate["quantity"]}}</td>
                            <td>{{$expenseForParticularDate["category"]}}</td>
                            <td>{{$expenseForParticularDate["cost"]}}</td>
                            <td>
                                <div>
                                  <a href="/expenses/{{$expenseForParticularDate["id"]}}/edit" class="" ><span><i class="fa-solid fa-pen-to-square"></i></span></a>                    
                                </div>
                            </td>
                            <td>
                                <div>
                                  <form method="post" action="/expenses/{{$expenseForParticularDate["id"]}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn "><span><i class="fa-solid fa-trash"></i></span></button>  
                                    </form>                 
                                </div>
                            </td>
                        </tr>
                    @endforeach
                   
                </tbody>
                
              </table>
          
            
            
                <div class="col-md-4">
                  <input class="form-control " id="totalCost" type="text" value=" Total Cost Ksh {{$data['totalCost']}}" readonly>
  
                </div>
                {{-- <div class="col-md-4">
                  <a href="" class="btn btn-danger"><span><i class="fa-solid fa-trash"></i></span> 
                  Delete All Expenses For this Date
                </a> 
                </div> --}}
                     
                    
                    
                      
                   
    
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel"> Edit Item</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="row g-3">
                                  <div class="col-md-4">
                                    <label for="validationServer01" class="form-label">Date</label>
                                    <input type="text" class="form-control" id="validationServer01" placeholder="Date" required>
                                    
                                  </div>
                                  <div class="col-md-4">
                                    <label for="validationServer01" class="form-label">Item</label>
                                    <input type="text" class="form-control" id="validationServer01" placeholder="Item" required>
                                    
                                  </div>
                                  <div class="col-md-4">
                                    <label for="validationServer01" class="form-label">Category</label>
                                    <select class="form-select" aria-label="Default select example">
                                      <option selected>Select Category</option>
                                      <option value="1">Household Items</option>
                                      <option value="2">Friends</option>
                                      <option value="3">Meals</option>
                                      <option value="3">Charity</option>
                                    </select>
                                    
                                  </div>
                                  <div class="col-md-4">
                                    <label for="validationServer01" class="form-label">Quantity</label>
                                    <input type="text" class="form-control" id="validationServer01" placeholder="Quantity" required>
                                    
                                  </div>
                                  <div class="col-md-4">
                                    <label for="validationServer01" class="form-label">Cost</label>
                                    <input type="text" class="form-control" id="validationServer01" placeholder="Enter numerical value" required>
                                    
                                  </div>
                              </div>
                                
                                
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Edit Item</button>
                                </div>
                              </div>
    
    
                            </div>
                      </div>
                          
                      

  
                
                
                
            
        
          
         
          
        
          
        
        </form>
                </div>
            </div>
        </div>
      </div>
      </div>


</x-layout>