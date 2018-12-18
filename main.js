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