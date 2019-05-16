<?php include_once('includes/header.php') ?>



  
    <div class="container">
    
        <div class="row justify-content-center mt-5" id="music">  
            <div class="col-12 col-md-6 col-lg-8"mt-5">
           <p> Music is a form of entertainment that puts sounds together in a way that people like, find interesting or dance to.Making music is the process of putting sounds and tones in an order, often combining them to create a unified composition. People who make music creatively organize sounds for a desired result, like a Beethoven symphony or one of Duke Ellington's jazz songs.
                
            </div>
            <div class="col-12 col-md-6 col-lg-4" id="ab">
                <h2><b>ABOUT US</b></h2>
                <img src="assets/img/fund.jpg" alt="music" width="300" height="300">
            </div>
        </div>
    </div>
    <div class="container">
  <h2>Upcoming Events</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="assets/img/music.jpg" target="_blank">
          <img src="assets/img/music.jpg" alt="Lights" style="width:100%">
          <div class="caption">
          <p> December 1, 2018 .<br>Dance and music are most re-creational thing.All people enjoy whien they see dance and listen music.Different forms of dance is going to be performed by different artist in this event.
          visit here for refreshment.<a href="#"> More</p>
        
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="assets/img/art.jpg" target="_blank">
          <img src="assets/img/art.jpg" alt="Nature" style="width:100%">
          <div class="caption">
          <p>December 8 ,2018 .<br>The expression or application of human creative skill and imagination, typically in a visual form such as painting or sculpture, producing works to be appreciated primarily for their beauty or emotional power.<a href="#"> More</a></p>
           
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="assets/img/sanam.png" target="_blank">
          <img src="assets/img/sanam.png" alt="Fjords" style="width:100%">
          <div class="caption">
          <p>December 15,2018 .<br>Sanam is an Indian pop rock band based in Mumbai consisting of Sanam Puri (lead vocals), Samar Puri (lead guitar), Venky S or Venkat Subramaniyam (bass guitar) and Keshav Dhanraj (Drums).<a href="band.html"> More</a></p>
        
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

<hr/>
    <hr/>
         <div class="container">
          <div class="row" id="Info">
        <div class="col-4 col-md-4 col-lg-4">
          <h2><b><u>Information </u></b></h2>
          <p>Futher information you can get in my sites.All of my information you can get there.If you have futher enquiry about it,you can mail us.</p>
      </div>

   <div class="col-4 col-md-4 col-lg-4">
        
    <h2><b><u>Contact Info</u></b></h2>
          
    <p> <i class="fa fa-map-marker" style="font-size:20px;color:lightblue"></i>Thamel,Kathmandu Nepal.<br>
     <i class="fa fa-phone-square" style="font-size:20px;color:lightblue"></i>01-45558899.<br>
    <i class="fa fa-envelope-square" style="font-size:20px;color:lightblue"></i>MusicEvent@gmail.com</p>
   </div>
   
        <div class="col-4 col-md-4 col-lg-4" id="follow">
          <h3><b><u>Follow US On</u></b></h3>
        
<a href=" https://facebook.com" target="_blank"><i class="fa fa-facebook-square" style="font-size:40px;color:blue"></i></a>
<a href=" https://youtube.com" target="_blank"><i class="fa fa-youtube-play" style="font-size:40px;color:red"></i></a>
<a href=" https://instagram.com" target="_blank"><i class="fa fa-instagram" style="font-size:40px;color:red"></i></a>
<a href=" https://skype.com" target="_blank"><i class="fa fa-skype" style="font-size:40px;color:blue"></i></a>
<a href=" https://skype.com" target="_blank"><i class="fa fa-twitter-square" style="font-size:40px;color:red"></i></a>
       </div>
        </div>
      </div>
       <hr/>
       
       <div class="col-12 col-md-12 col-lg-12">
        <div id="map"></div>
  <script>
      function initMap() {
        var uluru = {lat: 27.692209, lng:85.3152484};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
     var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
  <script async src= "https://maps.googleapis.com/maps/api/js?key=AIzaSyA9CNm9fgz9s9zNazFiLencQjtLDldN9qs&callback=initMap">
   </script>
   </div>
  



<?php include_once('includes/footer.php') ?>
