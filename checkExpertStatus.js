  // Function to fetch the active status using AJAX
  function checkActiveExpertStatus() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "check_entry_expert.php", true);
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        var activeStr = xhr.responseText.trim(); // Remove whitespace

        // Check if response text is "bool(true)" or "bool(false)"
        var active = activeStr === "bool(true)";

        // Update button name based on active status
        var button = document.getElementById("submitButtonExpert");
        if (active) {
          button.innerHTML = "Submit"; // Change button name
          button.classList.remove("buttonRed");
          button.classList.add("buttonGreen");
          button.disabled = false;
        } else {
          button.innerHTML = "Disabled"; // Change button name
          button.classList.remove("buttonGreen");
          button.classList.add("buttonRed");
          button.disabled = true;
        }
      }
    };
    xhr.send();
  }

  // Call the function initially
  checkActiveExpertStatus();

  // Set interval to call the function every 30 second
  setInterval(checkActiveExpertStatus, 30000);