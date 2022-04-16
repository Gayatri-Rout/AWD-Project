function toggleFunction() {
    var x = document.getElementById("dialContain");
    var y = document.getElementById("triggerBtn");
    if (x.style.display === "none" ) {
        x.style.display = "block";
        y.style.display = "none";
      } else {
        y.style.display = "none";
      }
    }