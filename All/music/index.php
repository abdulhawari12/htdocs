<!DOCTYPE HTML>
<html>
  <head>
    <meta charshet="UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <link rel="stylesheet" href="css/music.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Music App</title>
  <body>
    
    <audio src="" id="audio-source"></audio>
    
    <div class="navbar">
    				<div class="list-item">
    							<ul>
    											
    								<li>
    										<a href="#">
    					<i class="bi bi-question-circle"></i>
    					<span class="list-name">About Us</span>
    										</a>
    								</li>
    								
    								<li>
    										<a href="#">
    					<i class="bi bi-download"></i>
    					<span class="list-name">Downloads</span>
    										</a>
    								</li>
    								
    								<li>
    										<a href="#">
    					<i class="bi bi-grid"></i>
    					<span class="list-name">More Updates</span>
    										</a>
    								</li>
    								
    							</ul>
    				</div>
    </div>
    
  <div class="navbar-nav">
  			<h3>Music App</h3>
  			<div class="toggle">
  						<span></span>
  						<span></span>
  						<span></span>
  			</div>
  </div>
 
     <div class="container-header">
     				<!-- slide -->
    <div class="slider"></div>
      
      <h1>Recently Played</h1>
      <div class="playlist-group">
        
        <div class="playlist-card playlist1">
        		<!---<span class="box-img"><i class="bi bi-play"></i></span>--->
          <img src="img/cover3.jpeg" class="playlist-card-img" alt=""/>
          <p class="playlist-card-name">DJ Desa</p>
        </div>
        
        <div class="playlist-card playlist2">
        				
          <img src="img/cover4.jpeg" class="playlist-card-img" alt=""/>
          <p class="playlist-card-name">Hacker Songs</p>
        </div>
        
        <div class="playlist-card playlist3">
          <img src="img/cover2.jpeg" class="playlist-card-img" alt=""/>
          <p class="playlist-card-name">Ai Khodijah</p>
        </div>
        
        <div class="playlist-card playlist4">
          <img src="img/cover5.jpeg" class="playlist-card-img" alt=""/>
          <p class="playlist-card-name">Reagge Musik</p>
        </div>
        
        <div class="playlist-card playlist5">
          <img src="img/cover1.jpeg" class="playlist-card-img" alt=""/>
          <p class="playlist-card-name">Hip Hop</p>
        </div>
        
      </div>
      
       <section class="list-group">
   				<div class="header-list">
   							<marquee direction="left" scrollmount="10">Coming Soon....</marquee>
   				</div>
   </section>
      
      </div>
      <div class="music-player-section">
        <i  class="bi bi-arrow-left back-btn icon hide"></i>
        <i class="bi bi-list nav-btn icon hide"></i>
         <h1 class="song-name">dj desa</h1>
         <p class="artist-name hide">Artist 1</p>
         <img src="img/cover3.jpeg" class='cover hide'/>
        <div class="container-seek-bar">
          <input type="range" class="seek-bar" value="0"/>
          <p class="current-time hide">00 : 00</p>
          <p class="duration-time hide">00 : 00</p>
        </div>
        <div class="controls">
          <span class="bi bi-arrow-counterclockwise"></span>
          <div class="main">
            <i class="bi bi-skip-backward-circle active"></i>
            <i class="bi bi-play-circle active"></i>
            <i class="bi bi-pause-circle"></i>
            <i class="bi bi-skip-forward-circle active"></i>
            
          </div>
          <input type="range" class="volume-slider" step="0.1" value="1" max="1"/>
          <span class="bi bi-volume-up"></span>
        </div>
      </div>
    
    <section class="playlist">
     <i class="bi bi-arrow-left back-btn icon"></i>
      <h1 class="playlist-title">Playlist</h1>
      
      <div class="queue active">
        <div class="queue-cover">
          <img src="img/cover3.jpeg" alt=""/>
          <i class="bi bi-play-circle"></i>
        </div>
        <p class="name">Dj Desa</p>
      </div>
      
      <div class="queue">
        <div class="queue-cover">
          <img src="img/cover4.jpeg" alt=""/>
          <i class="bi bi-play-circle"></i>
        </div>
        <p class="name">Hacker Songs</p>
      </div>
      
      <div class="queue">
        <div class="queue-cover">
          <img src="img/cover2.jpeg" alt=""/>
          <i class="bi bi-play-circle"></i>
        </div>
        <p class="name">Ai Khodijah - Antassalam</p>
      </div>
      
      <div class="queue">
        <div class="queue-cover">
          <img src="img/cover5.jpeg" alt=""/>
          <i class="bi bi-play-circle"></i>
        </div>
        <p class="name">Puri Retno - Coffe Reagge Stone</p>
      </div>
      
      <div class="queue">
        <div class="queue-cover">
          <img src="img/cover1.jpeg" alt=""/>
          <i class="bi bi-play-circle"></i>
        </div>
        <p class="name">AOI - Untukmu</p>
      </div>
      
    </section>
    
    <script src="data.js"></script>
    <script src="app.js"></script> 
  </body>
</html>
