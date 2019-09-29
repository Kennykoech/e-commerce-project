<br><br><br>
<div class="container">
    <div class="col-md-6 col-md-offset-3">
            <h3 style="">Login</h3><br><br>
        
            <form action="<?php echo site_url();?>users/login" method="post">

                <div class="form-group">
                    <label><h4 style="color:seagreen;"><strong>Username:</strong></h4></label>
                    <input type="text" name="username" class="form-control" placeholder="enter username">
                </div>
                
                <div class="form-group">
                    <label><h4 style="color:seagreen;"><strong>Password:</strong></h4></label>
                    <input type="password" name="password" class="form-control" placeholder="enter password">
                </div>
                
                <button type="submit" class="btn btn-success" align-text="center">Login</button>   

            </form>
    </div>
</div>
<br><br><br>