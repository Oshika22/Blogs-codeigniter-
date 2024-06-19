<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/style.css';?>">
</head>
<body>
    <header>
        <h1 id="dash">DASHBOARD</h1>
    </header>
    <!-- buttons to signout, add, edit and delete  -->
    <div id="functions-container">
        <button class="function-box" id="back-blog">Sign-out</button>
        <button class="function-box" id="add-blog">Add Blog</button>
        <button class="function-box" id="edit-blog">Edit Blog</button>
        <button class="function-box" id="delete-blog">Delete Blog</button>   
    </div>    

    <!-- display bloglist -->
    <div class="blog-table">
        <table>
            <tr>
                <th id="idColumn">Id</th>
                <th id="tittleColumn">Title</th>
                <th id="contentColumn">Content</th>
                <th id="authorColumn">Author</th>
                <th id="dateColumn">Date</th>
            </tr>
            <?php 
            if(!empty($blogs)){
                foreach ($blogs as $blog){?>
            <tr>
                <td><?php echo $blog['blog_id']?></td>
                <td><?php echo $blog['tittle']?></td>
                <td><?php echo $blog['content']?></td>
                <td><?php echo $blog['author']?></td>
                <td><?php echo $blog['date']?></td>
            </tr>
            <?php
                }
            }
            else{?>
            <tr>
                <td colspan = 5>No data found</td>
            </tr>
            <?php
            }?>
        </table>
    </div>

    <!-- including GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="<?php echo base_url().'assets/admin/js/script.js';?>"></script>
</body>
</html>