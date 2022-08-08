function Active(){
  const fontColor = document.querySelectorAll(".container .rutine");
  const clrChangeBtn = document.querySelector(".button-container a");

  clrChangeBtn.addEventListener("click", () => {
    for (var i = 0; i < fontColor.length; i++) {
      fontColor[i].classList.toggle("active");
    }
    clrChangeBtn.classList.toggle("active");
  });
}Active();
