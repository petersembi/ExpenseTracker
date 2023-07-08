<x-layout>
    <div class="container mt-5 mycontainer">



        <!-- Address creation form -->
            <div class="row">
                <div class="col-md-6 mx-auto mb-4" style="margin-top:110px;">
                    <div class="card">
                        <div class="card-header bg-black text-white">
                            <h4>Log In to your Account
                                
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="/users/authenticate" method="POST">                    
                                  @csrf                                     
                               
                                <div class="mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" class="form-control" name="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>
                               
                                <div class="mb-3 text-center">
                                    <button type="submit" class="btn btn-primary" name="save_person">LOG IN</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-layout>