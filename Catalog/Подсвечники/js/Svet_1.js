const Opisanie = document.getElementById('Opisanie');
const State = document.getElementById('State');

const Opisanie_d = document.getElementById('Opisanie_d');
const State_d = document.getElementById('State_d');

const image_1 = document.getElementById('image_1');
const image_1_1 = document.getElementById('image_1_1');


image_2.addEventListener  ('click', function() {
image_1.style.display = "block";
image_1_1.style.display = "none";
});

image_3.addEventListener  ('click', function() {
image_1_1.style.display = "block";
image_1.style.display = "none";
});


Opisanie.addEventListener  ('click', function() {

Opisanie_d.style.display = "block";
State_d.style.display = "none";

});

State.addEventListener  ('click', function() {

Opisanie_d.style.display = "none";
State_d.style.display = "block";
});

