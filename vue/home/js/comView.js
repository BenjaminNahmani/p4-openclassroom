
  let showBtn =  document.querySelector(".btn-comOn");
  showBtn.addEventListener('click', e => {
    const btn = e.currentTarget;

    $(btn.dataset.commentairesId).toggle();

    console.log(btn);
  })


  // var clickOnButton =
  // var hideCom = document.getElementById("view_comment");
  //
  // hideCom.addEventListener("click", () => {
  //   console.log(clickOnButton.style);
  //   if (clickOnButton.style.display === "none") {
  //     clickOnButton.style.display = "block";
  //   } else {
  //     clickOnButton.style.display = "none";
  //   }
  // });

// Le même code ne fonctionne pas en mode Class ..

/* class ComView{

  comOn() {
    var clickOnButton = document.getElementById("com_card");
    var hideCom = document.getElementById("view_comment");

    hideCom.addEventListener('click', () =>{
      console.log(clickOnButton.style);
      if (clickOnButton.style.display === "none") {
        clickOnButton.style.display = "block";
      } else {
        clickOnButton.style.display = "none";
      }
    });
  }
} */
