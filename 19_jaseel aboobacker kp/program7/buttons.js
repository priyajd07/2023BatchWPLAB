const btn = document.getElementById('btn');

btn.addEventListener('click', function onClick(event) {
var cr =Math.floor(Math.random()*16777215).toString(16);
  document.body.style.backgroundColor = "#"+cr;


});
