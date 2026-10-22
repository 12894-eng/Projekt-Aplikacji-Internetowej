var audio = new Audio();
var lista = [
  'angry01','angry02','angry03','angry04',
  'happy01','happy02','happy03','happy04',
  'sad01','sad02','sad03','sad04'
];

function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min) + min);
}

function canPlayWav() {
  var a = new Audio();
  return !!(a.canPlayType && a.canPlayType('audio/wav').replace(/no/, ''));
}

function Meow() {
  if (audio.duration > 0 && !audio.paused) {
    audio.pause();
  }
  var ext = canPlayWav() ? '.wav' : '.mp3';
  audio.src = lista[getRandomInt(0, lista.length)] + ext;
  audio.play();
}

document.addEventListener('DOMContentLoaded', function() {
  var img = document.getElementById('menuImg');
  img.addEventListener('mouseover', function() {
    img.src = 'off.jpg';
  });
  img.addEventListener('mouseout', function() {
    img.src = 'on.jpg';
  });
});