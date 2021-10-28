console.log("Welcome to Spotify");

// Initialize the Variables
let songIndex = 0;
let audioElement = new Audio('Assets/songs/Bomdiggy.mp3');
let masterPlay = document.getElementById('masterPlay');
let myProgressBar = document.getElementById('myProgressBar');
let gif = document.getElementById('gif');
let masterSongName = document.getElementById('masterSongName');
// let songItems = Array.from(document.getElementsByClassName('songItem'));

let songs = [
    {songName: "Bom Diggy", filePath: "Assets/songs/Bomdiggy.mp3", coverPath: "covers/1.jpg"},
    {songName: "Moto", filePath: "Assets/songs/Moto.mp3", coverPath: "covers/2.jpg"},
    {songName: "Daru Badnaam", filePath: "Assets/songs/Darubadnaam.mp3", coverPath: "covers/3.jpg"},
    {songName: "High Rated gabru", filePath: "Assets/songs/Highrated.mp3", coverPath: "covers/4.jpg"},
    {songName: "Lagdi Lahore Di", filePath: "Assets/songs/Lagdilaahore.mp3", coverPath: "covers/5.jpg"},
    {songName: "Girl Like Me", filePath: "Assets/songs/Girllike.mp3", coverPath: "covers/6.jpg"},
    {songName: "Ishare Tere", filePath: "Assets/songs/Isharetere.mp3", coverPath: "covers/7.jpg"},
    {songName: "Nachle Na", filePath: "Assets/songs/Nachlena.mp3", coverPath: "covers/8.jpg"},
    {songName: "Naja", filePath: "Assets/songs/Naja.mp3", coverPath: "covers/9.jpg"},
    {songName: "Hulara", filePath: "Assets/songs/Hulara.mp3", coverPath: "covers/10.jpg"},
    {songName: "Photo", filePath: "Assets/songs/Photo.mp3", coverPath: "covers/10.jpg"},
    {songName: "Suit", filePath: "Assets/songs/Suit.mp3", coverPath: "covers/10.jpg"},
    {songName: "Jaani Tera Na", filePath: "Assets/songs/Jaanitera.mp3", coverPath: "covers/10.jpg"},
    {songName: "Tera Ghata", filePath: "Assets/songs/Teraghata.mp3", coverPath: "covers/10.jpg"},
    {songName: "Nashe Si Chadh Gayi", filePath: "Assets/songs/Nashesi.mp3", coverPath: "covers/10.jpg"},
]

// songItems.forEach((element, i)=>{ 
//     element.getElementsByTagName("img")[0].src = songs[i].coverPath; 
//     element.getElementsByClassName("songName")[0].innerText = songs[i].songName; 
// })
 

// Handle play/pause click
masterPlay.addEventListener('click', ()=>{
    if(audioElement.paused || audioElement.currentTime<=0){
        audioElement.play();
        masterPlay.classList.remove('fa-play-circle');
        masterPlay.classList.add('fa-pause-circle');
        gif.style.opacity = 1;
    }
    else{
        
        audioElement.pause();
        masterPlay.classList.remove('fa-pause-circle');
        masterPlay.classList.add('fa-play-circle');
        gif.style.opacity = 0;
    }
})
// Listen to Events
audioElement.addEventListener('timeupdate', ()=>{ 
    // Update Seekbar
    progress = parseInt((audioElement.currentTime/audioElement.duration)* 100); 
    myProgressBar.value = progress;
})

myProgressBar.addEventListener('change', ()=>{
    audioElement.currentTime = myProgressBar.value * audioElement.duration/100;
})

// const makeAllPlays = ()=>{
//     Array.from(document.getElementsByClassName('songItemPlay')).forEach((element)=>{
//         element.classList.remove('fa-pause-circle');
//         element.classList.add('fa-play-circle');
//     })
// }

// Array.from(document.getElementsByClassName('songItemPlay')).forEach((element)=>{
//     element.addEventListener('click', (e)=>{ 
//         makeAllPlays();
//         songIndex = parseInt(e.target.id);
//         e.target.classList.remove('fa-play-circle');
//         e.target.classList.add('fa-pause-circle');
//         audioElement.src = `Assets/songs/${songIndex+1}.mp3`;
//         masterSongName.innerText = songs[songIndex].songName;
//         audioElement.currentTime = 0;
//         audioElement.play();
//         gif.style.opacity = 1;
//         masterPlay.classList.remove('fa-play-circle');
//         masterPlay.classList.add('fa-pause-circle');
//     })
// })

document.getElementById('next').addEventListener('click', ()=>{
    if(songIndex>=14){
        songIndex = 0
    }
    else{
        songIndex += 1;
    }
    // audioElement.src = `Assets/songs/${songIndex+1}.mp3`;
    audioElement.src = `${songs[songIndex+1]['filePath']}`;
    masterSongName.innerText = songs[songIndex].songName;
    audioElement.currentTime = 0;
    audioElement.play();
    masterPlay.classList.remove('fa-play-circle');
    masterPlay.classList.add('fa-pause-circle');

})

document.getElementById('previous').addEventListener('click', ()=>{
    if(songIndex<=0){
        songIndex = 0
    }
    else{
        songIndex -= 1;
    }
    // audioElement.src = `Assets/songs/${songIndex+1}.mp3`;
    audioElement.src = `${songs[songIndex+1]['filePath']}`;
    masterSongName.innerText = songs[songIndex].songName;
    audioElement.currentTime = 0;
    audioElement.play();
    masterPlay.classList.remove('fa-play-circle');
    masterPlay.classList.add('fa-pause-circle');
})