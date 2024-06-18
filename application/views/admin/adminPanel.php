<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/adminPanel/css/style.css';?>">
    
</style>
</head>
<body>
    <!-- login form -->
    <div id="login-box">
        <h1>Login</h1>
        <div id="form-cont">
            <?php $errorMsg= $this->session->userdata('errormsg');?>
            <div class="alert">
            <?php if(!empty($errorMsg)){
                    echo $errorMsg;
                }
            ?>
            </div>
            <form action="<?php echo "http://localhost/codeigniter/code3/blogby3/index.php/Login/adminPanel";?>" method="post" name="loginForm" class="form">
                <input type="text" name="username" class="input" id="username" placeholder="username" required>
                <?php echo form_error('username');?>
                <input type="password" name="password" class="input" id="rno" placeholder="password" required>
                <?php echo form_error('password');?>
                <button name="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>