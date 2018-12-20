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

    if (x == "" || y == "") {
        
    z.className = "alert alert-warning";
    z.innerHTML = "You must fill in all of the fields!";
    return false;
    }
}

function validateForm1() {

    var x = document.forms["createForm"]["title"].value;
    var y = document.forms["createForm"]["author"].value;
    var z = document.forms["createForm"]["post-content"].value;
    var w = document.getElementById("post-warning");

    if (x == "" || y == "" || z == "") {

        w.className = "alert alert-warning";
        w.innerHTML = "You must fill in all of the fields!";
        return false;
    }
}


function check(){
    var a = document.getElementById('ch');
    var r = confirm("Do you really want to delete this post?");
    if (r === true) {
        a.value = "true";
    }

    if(r === false) {
        a.value = "false";
    }
}