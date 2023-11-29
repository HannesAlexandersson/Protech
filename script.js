// drop down menu logic
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}

$(function(){
  var scroll = $(document).scrollTop();
  var navHeight = $('.nav-bar').outerHeight();

  $(window).scroll(function(){
    var scrolled = $(document).scrollTop();
    if(scrolled > navHeight){
      $('.nav-bar').addClass('animate');
    }
    else{
      $('.nav-bar').removeClass('animate');
    }
})