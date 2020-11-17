window.onload = function() {
  var list = document.getElementsByClassName("sidebar");
  var ulList = list[0].children[0].children;
  
  for (var i = 0; i < ulList.length; i++) {
    ulList[i].addEventListener("click", function(e) {
      e.stopPropagation();
      console.log("target", e.target);
        if (typeof e.target.children[0] !== "undefined") {
          var show = e.target.children[0].style.display;
          if (show == "none") {
            e.target.children[0].style.display = "block";
          } else {
            e.target.children[0].style.display = "none";
          }
        }
    });
  }};


