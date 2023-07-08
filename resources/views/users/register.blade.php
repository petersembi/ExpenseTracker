<x-layout>
    <div class="container mt-5" >
       <!-- Address creation form -->
       <div class="row">
        <div class="col-md-6 mx-auto mb-4" style="margin-top:110px">
            <div class="card">
                <div class="card-header bg-black text-white">
                    <h4>Register to Post An Expense
                        
                    </h4>
                </div>
                <div class="card-body">
                    <form action="/users" method="POST">                    
                       @csrf
                        <div class="mb-3">
                            <label for="name"> Name</label>
                            <input type="text" id="name" class="form-control" name="name" required>
                        </div>   
                        
                      
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="name">Password</label>
                            <input type="password" id="name" class="form-control" name="password" required>
                        </div>  
                        <div class="mb-3">
                            <label for="name">Confirm Password</label>
                            <input type="password" id="name" class="form-control" name="password_confirmation" required>
                        </div>                                       
                       
                       
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary" name="save_person">Register</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>




</x-layout>