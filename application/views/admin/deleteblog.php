<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deleteblog</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/style.css';?>">
</head>
<body>
    <header>
        <h1>Delete Blog</h1>
    </header>
    <main>
        <div class="form-box">
            <form name="blogform" id="blogform" action="<?php echo 'http://localhost/codeigniter/code3/blogby3/index.php/blog/delete';?>" method="post">
                <h3>Enter the Id that needs to be deleted</h3>
                <input type="text" name="ID" value="" class="input" placeholder="ID" required>
                <div class="button-box">
                    <a href="<?php echo 'http://[::1]/codeigniter/code3/blogby3/index.php?/blog/'?>" class="btn" id="cancel" >Cancel</a>
                    <button class="btn">Delete</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>