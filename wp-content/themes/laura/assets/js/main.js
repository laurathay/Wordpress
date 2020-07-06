window.onload = () => {
  var siteHeader = document.querySelector(".site-header");
  var siteContent = document.querySelector(".site-header");
  var siteFooter = document.querySelector(".site-header");
  var searchToggle = document.querySelector(".search-toggle");
  var searchPopup = document.querySelector(".search-popup");
  let isVisible = false;

  searchPopup.style.top = `${siteHeader.clientHeight}px`;

  function searchHandler() {
    isVisible = !isVisible;
    if(isVisible) {
      searchPopup.classList.add("visible");
    } else {
      searchPopup.classList.remove("visible");
    }
  }

  searchToggle.addEventListener("click", searchHandler);
}
