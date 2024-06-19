<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blogview</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/blogDetail/css/style.css';?>">
</head>
<body>
    <!-- navbaar with adminPanel and other funtions -->
    <header>
        <div class="logo"></div>
        <input class="search-input" placeholder="Search your interest">
                <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
        <a href="">Contact us</a>
        <a href="http://[::1]/codeigniter/code3/blogby3/index.php?/Login/adminPanel">Admin Panel</a>
    </header>

    <!-- main content -->
    <main>
        <!-- ----title box------ -->
        <div class="title-box">
            <div class="title"><?php echo $blog['tittle']?></div>
            <div class="date"><?php echo $blog['date']?></div>
        </div>

        <!-- -------content box------ -->
        <div class="content">
            <?php echo $blog['content']?>
        </div>
    </main>

    <!-- author information -->
    <footer>
        <div class="author">Created By : <?php echo $blog['author']?></div>
    </footer>
</body>
</html>