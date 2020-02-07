var playlist=[
    "./Music/mens-ou1.mp3",
    "./Music/decision7.mp3",
    "./Music/decision7.mp3"
]
var audio = document.createElement('audio');
document.body.appendChild(audio);
audio.style.width = '100%';
audio.style.height = 'auto';
audio.controls = true;
audio.volume = 0.2;


function Se(i){
    switch(i){
        case 0:
        audio.src=playlist[i];
        audio.play();
        break;
        case 1:
        audio.src=playlist[i];
        audio.play();
        audio.addEventListener("ended",function(){
        window.location.href='./teaming.html';
        },false);
        break;
        case 2:
        audio.src=playlist[i];
        audio.play();
        break;
    }
}