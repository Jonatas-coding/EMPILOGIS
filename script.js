/*Header*/

window.addEventListener("scroll", function () {
  let header = document.querySelector("#header");
    header.classList.toggle("rolagem", window.scrollY > 0);
});


/*hamburguer*/

const hamburguer = document.querySelector(".hamburguer");
    const menu = document.querySelector("#nav-menu");

hamburguer.addEventListener("click", () => {
    menu.classList.toggle("active");
  });

  menu.addEventListener("click", () => {
    menu.classList.toggle("active");
  });
