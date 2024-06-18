<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs Website</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/blodview/css/style.css';?>">
</head>
<body>
    <header>
        <div class="logo"></div>
        <input class="search-input" placeholder="Search your interest">
                <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
        <a href="">Contact us</a>
        <a href="http://[::1]/codeigniter/code3/blogby3/index.php?/Login/adminPanel">Admin Panel</a>
    </header>
    <main>
        <div class="heading">Explore Technology By Reading Intresting Blogs....</div>
        <div class="blog-container">
            <?php if(!empty($blogs)){
                foreach ($blogs as $blog){?>
                    <div class="blog-box">
                        <div class="tittle"><?php echo $blog['tittle']?></div>
                        <div class="view">
                            <button onClick="blogDetail(<?php echo $blog['blog_id']?>);" class="read">Read</button>
                        </div>
                    </div>
            <?php
                }
            }?>
        </div>
    </main>
    <footer>
        <h2>Website designed By Oshika Sharma</h2>
        <h4>9982664415</h4>
        <h4>oshika004@gmail.com</h4>
        <h4>linkedin.com/in/oshika-sharma-a1120529a</h4>
    </footer>

    <script src="<?php echo base_url().'assets/blodview/js/script.js';?>"></script>
</body>
</html>

<scr