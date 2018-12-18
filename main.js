function hideComments() {
    var comm = document.getElementsByClassName("comments")[0];
    var btn = document.getElementsByClassName("btn default")[0];
    if (comm.style.display === "none") {
        comm.style.display = "block";
        btn.innerHTML = "Hide comments";
        

    } else {
      comm.style.display = "none";
      btn.innerHTML = "Show comments";

    }
  }


    function validateForm() {
        var x = document.forms["commentForm"]["author"].value;
        var y = document.forms["commentForm"]["text"].value;
        var z = document.getElementById("warning");


        if (x == "" || y=="") {
        z.className = "alert alert-warning";
        z.innerHTML = "Obavezno popuniti sva polja!";
        return false;
        }
  }
  

