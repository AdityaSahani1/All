// Dark / Light Mode
var modeIcon = document.getElementById("modeIcon");

    modeIcon.onclick = function() {
        document.body.classList.toggle("dark-theme");
        if(document.body.classList.contains("dark-theme")){
            modeIcon.src = "images/day.png";
        }
        else{
            modeIcon.src = "images/night.png";
        }
    }

// New Topic
