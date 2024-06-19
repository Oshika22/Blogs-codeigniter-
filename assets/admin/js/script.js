let addBlog = document.querySelector("#add-blog");
let editBlog = document.querySelector("#edit-blog");
let deleteBlog = document.querySelector("#delete-blog");
let backBlog = document.querySelector("#back-blog");

addBlog.addEventListener("click", () =>{
    window.open("http://localhost/codeigniter/code3/blogby3/index.php/blog/add");
})
editBlog.addEventListener("click", () =>{
    window.open("http://localhost/codeigniter/code3/blogby3/index.php/blog/edit");
})
deleteBlog.addEventListener("click", () =>{
    window.open("http://localhost/codeigniter/code3/blogby3/index.php/blog/delete");
})
backBlog.addEventListener("click", () =>{
    window.open("http://localhost/codeigniter/code3/blogby3/index.php/Login");
})


gsap.from("header h1",{
    scale: 2,
    delay: 2,
    scrollTrigger:{
        trigger:"header h1",
        scroller:"body",
        marker:true,
        start:"top 10%",
        scrub:true,
    }
})