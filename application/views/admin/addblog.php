<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addblog</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/style.css';?>">
</head>
<body>
    <header>
        <h1>Add Blog</h1>
    </header>
    <main>
        <div class="form-box">
            <form name="blogform" id="blogform" action="<?php echo 'http://localhost/codeigniter/code3/blogby3/index.php/blog/add';?>" method="post">
                <h3>Enter the title</h3>
                <input type="text" name="tittle" value="" class="input" placeholder="Title" required>
                <h3>Enter the content</h3>
                <textarea name="content" value="" id="content" class="input" placeholder="content" required></textarea>
                <h3>Enter the author</h3>
                <input type="text" name="author" value="" class="input" placeholder="author" required>
                <button class="btn">Create</button>
            </form>
        </div>
    </main>
</body>
</html>