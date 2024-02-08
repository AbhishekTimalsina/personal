<script>
    let opBtn= document.querySelector("img[open]");
let xContain= document.querySelector(".x-container");
let nContain= document.querySelector(".nav-container");




xContain.addEventListener("click",function(){


    nContain.classList.toggle("open");
    xContain.classList.toggle("close");
})

// if(window.innerWidth<=650){
//     opBtn.classList.remove("d-none");

// }

window.addEventListener("scroll",function(){
    console.log("scrolling")
    nContain.classList.remove("open");
    xContain.classList.remove("close");
})

</script>