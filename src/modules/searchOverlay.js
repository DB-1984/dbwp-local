function searchOverlay() {
  document.addEventListener("DOMContentLoaded", function() {
    const searchButton = document.querySelector("#search-button");
    const overlay = document.querySelector(".mk-fullscreen-search-overlay");
    const closeLink = overlay.querySelector("a.mk-fullscreen-close");
    const searchInput = overlay.querySelector("#mk-fullscreen-search-input");

    searchButton.addEventListener("click", function() {
      overlay.classList.add("mk-fullscreen-search-overlay-show");
      searchInput.focus();
    });

    closeLink.addEventListener("click", function() {
      overlay.classList.remove("mk-fullscreen-search-overlay-show");
    });

    document.addEventListener("keyup", function(e) {
      if (
        overlay.classList.contains("mk-fullscreen-search-overlay-show") &&
        e.key === "Escape"
      ) {
        overlay.classList.remove("mk-fullscreen-search-overlay-show");
      }
    });
  });
}

export default searchOverlay;
