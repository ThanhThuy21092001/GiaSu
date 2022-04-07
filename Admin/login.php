<?php include("header.php")?>
    <section class="bg-light vh-100 d-flex">
        <div class = "col-6 m-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border rounded-circle mx-auto d-flex" style="width:100px;height:100px">
                    <i class="fa fa-user text-light fa-3x m-auto"></i>                  
                    </div>
                    <form action="actions/login.php">
                       <div class="md-form">
                           <input type="email" id="email" name="email" class = "form-control">
                           <label for="email">Your email</label>
                       </div> 
                       <div class="md-form">
                           <input type="password" id="password" name="password" class = "form-control">
                           <label for="password">Your password</label>
                       </div>
                        <div class="text-center">
                            <button class="btn btn-secondary" name="login">Login</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </section>



<?php include ("footer.php") ?>