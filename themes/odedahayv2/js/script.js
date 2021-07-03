

function onClickMenu(){
   document.getElementById("menu").classList.toggle("change");
   document.getElementById("nav").classList.toggle("change");
}


// modal
const close = document.getElementById('close');
const open = document.getElementById('open');
const modal = document.getElementById('modal');


// Show modal
open.addEventListener('click', () => modal.classList.add('show-modal'));

// Hide modal
close.addEventListener('click', () => modal.classList.remove('show-modal'));


// Oops
const closeOops = document.getElementById('close-leisure');
const openOops = document.getElementById('open-leisure');
const modalOops = document.getElementById('modal-leisure');


// Show modal
openOops.addEventListener('click', () => modalOops.classList.add('show-modal'));

// Hide modal
closeOops.addEventListener('click', () => modalOops.classList.remove('show-modal'));


/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
   document.getElementById("myDropdown").classList.toggle("show");
 }
 
 // Close the dropdown if the user clicks outside of it
 window.onclick = function(event) {
   if (!event.target.matches('.dropbtn')) {
     var dropdowns = document.getElementsByClassName("dropdown-content");
     var i;
     for (i = 0; i < dropdowns.length; i++) {
       var openDropdown = dropdowns[i];
       if (openDropdown.classList.contains('show')) {
         openDropdown.classList.remove('show');
       }
     }
   }
 }