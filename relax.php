<?php include "inc/header.php"?>
    <div class="full">
      <img src="img/background-relax.gif" alt="" />
    </div>

    <div class="player">
      <div class="song-1">
        <marquee width="75%" scrollamount="4">🎵Late Night Melancholy🎵</marquee>
      </div>
      <div class="song-2 d-none">
        <marquee width="75%" scrollamount="4">🎵Naruto-Nostalgia OST🎵</marquee>
      </div>


      <div class="button-container_change">

      <button class="chgbtn"><img src="img/change2.png"></button>
      <button class="chgbtn"><img src="img/change1.png"></button>
      </div>
      

    </div>

    <audio controls autoplay id="aud" loop>
      <source src="img/song1.mp3" type="audio/mp3" />
    
    </audio>

    <audio controls autoplay id="aud2" loop>
      <source src="img/song2.webm" type="audio/webm" />
    
    </audio>
    <?php include "inc/footer.php"; ?>
    <script>
      "use strict";
      let audio = document.getElementById("aud");
      let song1= document.querySelector(".song-1");
      let song2= document.querySelector(".song-2");
  let audio2= document.getElementById("aud2");
  let changeBtn= document.querySelectorAll(".chgbtn");
  audio.volume = 0.2;
  audio2.volume= 0.2;
audio2.muted= true;
changeBtn.forEach(function(chgbtn){
chgbtn.addEventListener("click",function(){

  if(song1.classList.contains("d-none")){
    changeLogic(song1,song2,audio,audio2);
  }else{
    changeLogic(song2,song1,audio2,audio);
  }

})



})
function changeLogic(s1,s2,audio,audio2){
  audio.currentTime= 0;
  s1.classList.remove("d-none");
  audio.muted= false;
  // audio.play()
  s2.classList.add("d-none");
  audio2.muted= true;
  // audio2.pause();
  audio2.currentTime=0;

}

      
    </script>
  </body>
</html>
