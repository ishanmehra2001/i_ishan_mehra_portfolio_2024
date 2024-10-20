const hamburger = document.getElementById("hamburger");


function toggleMobileMenu() {
  console.log("Toggling mobile menu");
  const mobileMenu = document.getElementById("mobile-menu");
  mobileMenu.classList.toggle("active");
}

hamburger.addEventListener("click", toggleMobileMenu);



