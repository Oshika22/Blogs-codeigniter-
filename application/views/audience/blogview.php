<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs Website</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/blodview/css/style.css';?>">
</head>
<body>
    <!-- navbaar with adminPanel and other funtions -->
    <header>
        <div class="logo"></div>
        <input class="search-input" placeholder="Search your interest">
                <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
        <a class="navlink" href="">Contact us</a>
        <a class="navlink" href="http://[::1]/codeigniter/code3/blogby3/index.php?/Login/adminPanel">Admin Panel</a>
    </header>

    <!-- containing all blog list and button to view -->
    <main>
        <div class="heading">Explore Technology By Reading Intresting Blogs...<div class="blink">.</div><div class="runner">.</div></div>
        <div class="blog-container">
            <?php if(!empty($blogs)){
                foreach ($blogs as $blog){?>
                    <div class="blog-box">
                        <div class="tittle"><?php echo $blog['tittle']?></div>
                        <div class="view">
                            <button class="read"> <a href="<?php echo 'http://[::1]/codeigniter/code3/blogby3/index.php?/Login/blogDetail/'.$blog['blog_id'];?>">Read</a></button>
                        </div>
                    </div>
            <?php
                }
            }?>
        </div>
    </main>

    <!-- general information -->
    <footer>
        <h2>Website designed By Oshika Sharma</h2>
        <h4>9982664415</h4>
        <h4>oshika004@gmail.com</h4>
        <h4>linkedin.com/in/oshika-sharma-a1120529a</h4>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo base_url().'assets/blodview/js/script.js';?>"></script>
</body>
</html>