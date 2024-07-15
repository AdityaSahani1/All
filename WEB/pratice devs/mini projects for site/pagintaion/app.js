

let nums = document.querySelectorAll(".num");
let startBtn = document.querySelector(".startBtn");
let endBtn = document.querySelector(".endBtn");
let stepBtn = document.querySelectorAll(".stepBtn");

let initialStep = 0;

endBtn.addEventListener("click", () => {
    // Removing active class from nums
    document.querySelector(".active").classList.remove("active");

    // Adding active class to last num
    // and updating initial step value and btns
    nums[4].classList.add("active");
    initialStep = 4;
    updateBtns();
});

startBtn.addEventListener("click", () => {
    // Removing active class from nums
    document.querySelector(".active").classList.remove("active");

    // Adding active class to first num
    // and updating initial step value and btns
    nums[0].classList.add("active");
    initialStep = 0;
    updateBtns();
});

stepBtn.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        // updating initial step value based on clicked
        //btn id
        initialStep += e.target.id == "next" ? 1 : -1;

        nums.forEach((num, index) => {
            // adding active class if the index of num
            //is equal to initial step
            num.classList.toggle("active", index === initialStep);
            updateBtns();
        });
    });
});

nums.forEach((num, index) => {
    num.addEventListener("click", () => {
        // removing active class from nums
        document.querySelector(".active").classList.remove("active");

        //adding active class to clicked num
        num.classList.add("active");
        initialStep = index;
        updateBtns();
    });
});

function updateBtns() {
    if (initialStep === 4) {
        endBtn.disabled = true;
        startBtn.disabled = false;
        stepBtn[0].disabled = false;
        stepBtn[1].disabled = true;
    }else if (initialStep === 0) {
        endBtn.disabled = false;
        startBtn.disabled = true;
        stepBtn[0].disabled = true;
        stepBtn[1].disabled = false;
    }else {
        endBtn.disabled = false;
        startBtn.disabled = false;
        stepBtn[0].disabled = false;
        stepBtn[1].disabled = false;
    }
}