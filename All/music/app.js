////////playlist group 
//////const PlaylistCard = document.querySelector('.playlist-group');

///PlaylistCard.addEventListener('click', () =>{
		////		alert('Masih Tahap Awal, Harap Tunggu Update an!!');
/// })
/////////////// navigation /////////

const navbar = document.querySelector('.navbar');
const navbtn = document.querySelector('.toggle');

navbtn.onclick = function (){
				navbar.classList.toggle('active');
				navbtn.classList.toggle('active');
}

const musicPlayerSection = document.querySelector('.music-player-section');
let clickCount = 1;

musicPlayerSection.addEventListener('click', () =>{
  if(clickCount >= 2){
    musicPlayerSection.classList.add('active');
    clickCount = 1;
    return 1;
  }
  clickCount ++;
  setTimeout(() =>{
    clickCount = 2;
  },50);
});
///// back to music ///
const backbtn = document.querySelector('.music-player-section .back-btn');

backbtn.addEventListener('click', () =>{
  musicPlayerSection.classList.remove('active');
  	Volumebtn.classList.remove('active');
			VolumeSlider.classList.remove('active');
});
////////// acces to playlist ///
const playlist = document.querySelector('.playlist');
const navbtnPlaylist =document.querySelector('.music-player-section  .nav-btn');

navbtnPlaylist.addEventListener('click',() =>{
  playlist.classList.add('active');
});
////// back to playlist ////
const backButtonPlaylist = document.querySelector('.playlist .back-btn');
backButtonPlaylist.addEventListener('click', () =>{
  playlist.classList.remove('active');
});

///////// seekbar /////
let currentMusic = 0;

const Music = document.getElementById('audio-source');
const SeekBar = document.querySelector('.seek-bar');
const songName = document.querySelector('.song-name');
const ArtistName = document.querySelector('.artist-name');
const coverImage = document.querySelector('.cover');
const currentTime = document.querySelector('.current-time');
const durationTime = document.querySelector('.duration-time');

///// all btn ////
const Forwardbtn = document.querySelector('.bi-skip-forward-circle');

const Backwardbtn = document.querySelector('.bi-skip-backward-circle');

const Pausedbtn = document.querySelector('.bi-pause-circle');

const Playbtn = document.querySelector('.bi-play-circle');

const Volumebtn = document.querySelector('.bi-volume-up');

const Repeatbtn = document.querySelector('.bi-arrow-counterclockwise');

const VolumeSlider = document.querySelector('.volume-slider');

const queue = [...document.querySelectorAll('.queue')];

////// playbtn event click 
Playbtn.addEventListener('click', () => {
Music.play();
  Playbtn.classList.remove('active');
  Pausedbtn.classList.add('active');
});

Pausedbtn.addEventListener('click', () => {
Music.pause();
  Pausedbtn.classList.remove('active');
  Playbtn.classList.add('active');
});

////// play music setting
const setMusic = (i) => {
  SeekBar.value = 0;
  let song = songs[i];
  currentMusic = i;
  
  Music.src = song.path;
  
  songName.innerHTML = song.name;
  ArtistName.innerHTML = song.artist;
  coverImage.src = song.cover;
  
  setTimeout(() => {
    SeekBar.max = Music.duration;
    durationTime.innerHTML = formatTime(Music.duration);
  },300);
  currentTime.innerHTML = '00 : 00';
  
  queue.forEach(item => item.classList.remove('active'));
  queue[currentMusic].classList.add('active');
}
setMusic(0);

//////// format duration on 00 : 00
const formatTime = (time) => {
  let min = Math.floor(time / 60);
  if(min < 10){
    min = `0` + min;
  }
  
  let sec = Math.floor(time % 60);
  if(sec < 10){
    sec = `0` + sec;
  }
  return `${min} : ${sec}`;
}

//////// seekbar events//
setInterval(() =>{
				SeekBar.value = Music.currentTime;
				currentTime.innerHTML = formatTime(Music.currentTime);
				if (Math.floor(Music.currentTime) == Math.floor(SeekBar.max)) {
							if (Repeatbtn.className.includes('active')) {
									setMusic(currentMusic);
									Playbtn.click();
							} else {
											Forwardbtn.click();
							}
				}
},500);

SeekBar.addEventListener('change', () =>{
				Music.currentTime = SeekBar.value;
})

/// forward events
Forwardbtn.addEventListener('click',() =>{
				if(currentMusic >= songs.length - 1){
								currentMusic = 0;
				}else{
								currentMusic++;
				}
				setMusic(currentMusic);
				Playbtn.click();
})

Backwardbtn.addEventListener('click',() =>{
				if(currentMusic <= 0){
								currentMusic = songs.length - 1;
				}else{
								currentMusic--;
				}
				setMusic(currentMusic);
				Playbtn.click();
})

////// repeat events
Repeatbtn.addEventListener('click', ()=>{
				Repeatbtn.classList.toggle('active');
})

///// volume events
Volumebtn.addEventListener('click', () =>{
				Volumebtn.classList.toggle('active');
				VolumeSlider.classList.toggle('active');
})

VolumeSlider.addEventListener('input', () =>{
				Music.volume = VolumeSlider.value;
})

///// queue
queue.forEach((item, i) => {
				item.addEventListener('click', () =>{
								setMusic(i);
								Playbtn.click();
				});
});

//////// function playlist-card


const Playlist1 = document.querySelector('.playlist1');

Playlist1.addEventListener('click', () =>{
				Music.play();
  Playbtn.classList.remove('active');
  Pausedbtn.classList.add('active');
  musicPlayerSection.classList.add('active');
  setMusic(0);
  Playbtn.click();
});

const Playlist2 = document.querySelector('.playlist2');

Playlist2.addEventListener('click', ()=>{
				Music.play();
  Playbtn.classList.remove('active');
  Pausedbtn.classList.add('active');
  musicPlayerSection.classList.add('active');
  setMusic(1);
  Playbtn.click();
});

const Playlist3 = document.querySelector('.playlist3');

Playlist3.addEventListener('click', ()=>{
				Music.play();
  Playbtn.classList.remove('active');
  Pausedbtn.classList.add('active');
  musicPlayerSection.classList.add('active');
  setMusic(2);
  Playbtn.click();
});

const Playlist4 = document.querySelector('.playlist4');

Playlist4.addEventListener('click', ()=>{
				Music.play();
  Playbtn.classList.remove('active');
  Pausedbtn.classList.add('active');
  musicPlayerSection.classList.add('active');
  setMusic(3);
  Playbtn.click();
});

const Playlist5 = document.querySelector('.playlist5');

Playlist5.addEventListener('click', ()=>{
				Music.play();
  Playbtn.classList.remove('active');
  Pausedbtn.classList.add('active');
  musicPlayerSection.classList.add('active');
  setMusic(4);
  Playbtn.click();
});