<?php include_once 'includes/templates/headerMainPage.php'?>
    
    <video muted autoplay loop poster="video" id="myVideo">
      <source src="video/casa.mp4" type="video/mp4">
    </video>
    <div class="hero-content">
    
      <h1 class="hero-title">
            Building your future<br>
            <span> together</span>
      </h1>
    </div>

    <section class="container information">
      <div class="information1">
        <h1>The house<br>of your dreams</h1>
        <div class="bar"><br></div>
        <p>We specialised in knowing what our clients want without needing to sleep</p>
        <a href="properties.php">
          <button class="button more"> Check out more</button>
        </a>
      </div>
      <div class="information2">
        <a href="properties.php">
          <img src="img/interior1.jpg" alt="Interior Image 1">
        </a>
      </div>
      <div class="information3">
      <a href="properties.php">
        <img src="img/interior2.jpg" alt="Interior Image 2" src="properties.php">
      </a>
      </div>
    </section>

    <section class="contentVideo">
      <div class="informationVideo">
        <wh><g>Discover</g> a place<br>you'll <g>love</g> to live</wh>
      </div>
      <div class="videoBorder">
        <video id="vid" controls>
          <source src="video/house.mp4" type="video/mp4">
        </video>
      </div>
    </section>

    <section class="contentBlog">
      <div class="people">
        <img src="img/happy.jpg" alt="Happy family">
        <a href="blog.php">
          <button class="button more2">Check out our blog</button>
        </a>
      </div>
      <div class="informationBlog">
        <bi><bt>Still any doubts?</bt> <br><br> Our <bm>blog</bm> is the place <br> where you'll find all the <bm>answers</bm></bi>
        <div class="chatImage">
          <img src="img/chat.png" alt="Chat Icon">
        </div>
      </div>
    </section>

    <?php include_once 'includes/templates/footer.php'?>