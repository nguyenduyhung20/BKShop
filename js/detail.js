function changeIntoProductInfo() {
  var longText = document.getElementById("ProductInfo").textContent;
  var element = document.getElementById("content");
  element.textContent = longText;
  
  var displayElement = document.getElementById("display-content");
  displayElement.innerHTML = element.textContent;
}

function changeIntoSpec() {
    var longText = document.getElementById("Spec").textContent;
    var element = document.getElementById("content");
    element.textContent = longText;
    
    // var displayElement = document.getElementById("display-content");
    // displayElement.innerHTML = element.textContent;
}

function changeIntoEva() {
    var longText = document.getElementById("Eva").textContent;
    var element = document.getElementById("content");
    element.textContent = longText;
    
    // var displayElement = document.getElementById("display-content");
    // displayElement.innerHTML = element.textContent;
}
function toggleText(id) {
    var content = document.getElementById("content");
    var longText = document.getElementById(id);
  
    if (content.style.display === "none") {
      content.style.display = "block";
      longText.style.display = "block";
    } else {
      content.style.display = "none";
      longText.style.display = "none";
    }
  }
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