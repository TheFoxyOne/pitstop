// Listener for Custom Upload File Buttons
const file1Btn = document.getElementById('file1');
const file2Btn = document.getElementById('file2');
const file3Btn = document.getElementById('file3');
const file4Btn = document.getElementById('file4');

const file1Chosen = document.getElementById('file1-chosen');
const file2Chosen = document.getElementById('file2-chosen');
const file3Chosen = document.getElementById('file3-chosen');
const file4Chosen = document.getElementById('file4-chosen');

file1Btn.addEventListener('change', function(){
    file1Chosen.textContent = this.files[0].name
})
file2Btn.addEventListener('change', function(){
    file2Chosen.textContent = this.files[0].name
})
file3Btn.addEventListener('change', function(){
    file3Chosen.textContent = this.files[0].name
})
file4Btn.addEventListener('change', function(){
    file4Chosen.textContent = this.files[0].name
})

// Trader Contact Form Select Stop Value
function selectStop(id, value){
    // Elements Selection
    const hiddenSelectStopElement = document.getElementById('traderSelectStop');
    const SelectStop1Button = document.getElementById('traderStop1Button');
    const SelectStop2Button = document.getElementById('traderStop2Button');
    const SelectStop3Button = document.getElementById('traderStop3Button');
    const clickedButton = document.getElementById(`${id}`);
    
    hiddenSelectStopElement.value = value;

    SelectStop1Button.className = SelectStop1Button.className.replace(" selected", "");
    SelectStop2Button.className = SelectStop2Button.className.replace(" selected", "");
    SelectStop3Button.className = SelectStop3Button.className.replace(" selected", "");

    clickedButton.className += " selected";
}

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