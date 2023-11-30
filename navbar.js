const search = document.getElementById('search');
const dropdownContent = document.getElementById('dropdownContent');

search.addEventListener('click', () =>{
    dropdownContent.style.display = dropdownContent.style.display == 'block' ? 'none' : 'block';
});