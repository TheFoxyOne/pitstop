// Add Event Listener for FAQS Buttons
var collBtns = document.getElementsByClassName("footer_faqs_collapse_button");
var i;

for (i = 0; i < collBtns.length; i++) {
  collBtns[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
      content.style.margin = '0 auto';
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
      content.style.margin = '0 auto 5rem auto';
    } 
  });
}