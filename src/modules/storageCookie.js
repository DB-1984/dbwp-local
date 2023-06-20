function showPopup() {
  document.addEventListener("DOMContentLoaded", function() {
    var status = localStorage.getItem('Status');
  
    if (status !== 'Visited') {
      var popup = document.getElementById('popup-container');
      popup.style.display = 'flex';
  
      var closeBtn = document.getElementById('close-btn');
      closeBtn.addEventListener('click', function() {
        popup.style.display = 'none';
      });
  
      // Set the status in local storage
      localStorage.setItem('Status', 'Visited');
    }
  });
  }

  export default showPopup;
  