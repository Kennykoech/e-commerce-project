<br><br><br>
<div class="container">
    <div class="col-md-6 col-md-offset-3">
            <h3 style="">Sign Up</h3><br><br>
        
            <form action="<?php echo site_url();?>users/sign_up" method="post">

                <div class="form-group">
                    <label><h4 style="color:seagreen;"><strong>Username:</strong></h4></label>
                    <input type="text" name="username" class="form-control" placeholder="enter username">
                </div>
                
                <div class="form-group">
                    <label><h4 style="color:seagreen;"><strong>Choose Password:</strong></h4></label>
                    <input type="password" name="password" class="form-control" placeholder="enter password">
                </div>
                <div class="form-group">
                    <label><h4 style="color:seagreen;"><strong>Email:</strong></h4></label>
                    <input type="email" name="email" class="form-control" placeholder="enter email">
                </div>
                <div class="form-group">
                    <label><h4 style="color:seagreen;"><strong>Mobile:</strong></h4></label>
                    <input type="text" name="mobile" class="form-control" placeholder="enter mobile number">
                </div>
                
                <button type="submit" class="btn btn-success" align-text="center">Sign Up</button>   

            </form>
    </div>
</div>
<br><br><br>