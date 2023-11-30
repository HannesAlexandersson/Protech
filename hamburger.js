const hamburger = document.getElementById('hamburgerMenu');
const dropdown = document.getElementById('dropdownMenu');

hamburger.addEventListener('click', () =>{
    dropdown.style.display = dropdown.style.display == 'block' ? 'none' : 'block';
});