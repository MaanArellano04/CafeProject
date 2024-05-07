document.addEventListener("DOMContentLoaded", function() {
    var dropdownArrow = document.querySelector(".sidebar-item .lni:last-child");
  
    document.querySelector(".sidebar-link.has-dropdown").addEventListener("click", function() {
      if (dropdownArrow.classList.contains("lni-chevron-down")) {
        dropdownArrow.classList.remove("lni-chevron-down");
        dropdownArrow.classList.add("lni-chevron-up");
      } else {
        dropdownArrow.classList.remove("lni-chevron-up");
        dropdownArrow.classList.add("lni-chevron-down");
      }
    });
  });
  
  document.addEventListener('DOMContentLoaded', function () {
    // Get all sidebar links
    var sidebarLinks = document.querySelectorAll('.sidebar-link');
  
    // Add click event listener to each sidebar link
    sidebarLinks.forEach(function (link) {
      link.addEventListener('click', function (event) {
        // Remove 'active' class from all sidebar links
        sidebarLinks.forEach(function (link) {
          link.classList.remove('active');
        });
  
        // Add 'active' class to the clicked link
        link.classList.add('active');
        
        // If the clicked link is the profile link, also add 'active' class to the dashboard link
        if (link.id === 'profile-link') {
          document.getElementById('dashboard-link').classList.add('active');
        }
      });
    });
  });
  