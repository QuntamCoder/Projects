document.addEventListener("DOMContentLoaded", function () {
    // Function to create and show the styled alert box with buttons
    function showAlertBox(message) {
      // Play sound when the alert appears
     const audio = new Audio('sounds/horror-124161.mp3');

audio.play();

      // Replace 'path/to/soundfile.mp3' with your sound file
      
  
      // Create the alert box container
      const alertBox = document.createElement("div");
      alertBox.classList.add("styled-alert-box"); // Add a class for styling
  
      // Create text element for the message
      const messageText = document.createElement("div");
      messageText.textContent = message;
      messageText.style.paddingBottom = "10px"; // Adjust space between text and buttons
  
      // Create a container for buttons
      const buttonsContainer = document.createElement("div");
      buttonsContainer.style.display = "flex";
      buttonsContainer.style.justifyContent = "center"; // Center-align buttons
  
      // Create "LOGIN" button
      const okButton = document.createElement("button");
      okButton.textContent = "LOGIN";
      okButton.style.padding = "8px 30px";
      okButton.style.backgroundColor = "#004d00";
      okButton.style.color = "#fff";
      okButton.style.border = "none";
      okButton.style.borderRadius = "20px 500px"; // Change border-radius to apply rounded corners
      okButton.style.cursor = "pointer";
      okButton.style.margin = "0 5px";
  
      // CSS for button hover effect
      okButton.style.transition = "background-color 0.3s, color 0.3s";
      okButton.style.webkitTransition = "background-color 0.3s, color 0.3s"; // For compatibility with some browsers
  
      okButton.addEventListener("click", function () {
        // Add click animation effect
        okButton.style.transform = "scale(0.95)";
        setTimeout(() => {
          okButton.style.transform = "scale(1)";
        }, 100); // Adjust the duration of the click animation as needed
      });
  
      // Hover effect with premium quality
      okButton.addEventListener("mouseenter", function () {
        okButton.style.backgroundColor = "#00FFFF"; // Lighter green color on hover
      });
  
      okButton.addEventListener("mouseleave", function () {
        okButton.style.backgroundColor = "#004d00";
      });
  
      document.body.appendChild(okButton);
  
      // Create "SIGNUP" button
      const cancelButton = document.createElement("button");
      cancelButton.textContent = "SIGNUP";
      cancelButton.style.padding = "8px 20px";
      cancelButton.style.backgroundColor = "#36454F";
      cancelButton.style.color = "#fff";
      cancelButton.style.border = "none";
      cancelButton.style.borderRadius = "500px 20px";
      cancelButton.style.cursor = "pointer";
      cancelButton.style.margin = "0 5px";
  
      // CSS for button hover effect
      cancelButton.style.transition = "background-color 0.3s, color 0.3s";
      cancelButton.style.webkitTransition = "background-color 0.3s, color 0.3s";
  
      cancelButton.addEventListener("mouseenter", function () {
        cancelButton.style.backgroundColor = "#00FFFF"; // Lighter red color on hover
      });
  
      cancelButton.addEventListener("mouseleave", function () {
        cancelButton.style.backgroundColor = "#36454F";
      });
  
      document.body.appendChild(cancelButton);
  
      // Append text and buttons to their respective containers
      buttonsContainer.appendChild(okButton);
      buttonsContainer.appendChild(cancelButton);
      alertBox.appendChild(messageText);
      alertBox.appendChild(buttonsContainer);
  
      // Apply styles to the alert box
      alertBox.style.position = "absolute ";
      alertBox.style.top = "20.50%"; // Adjusted to place it 20% up from the center
      alertBox.style.left = "52%";
      alertBox.style.transform = "translate(-50%, -50%)";
      alertBox.style.padding = "16px";
      alertBox.style.backgroundColor = "rgb(0, 0, 0)"; // Change background color
      alertBox.style.color = "#fff"; // Change text color
      alertBox.style.width = "fit-content";
      alertBox.style.textAlign = "center"; // Center-align content
      alertBox.style.zIndex = "9999";
  
      // Make the box curvy, thin, and 35% bigger
      alertBox.style.borderRadius = "20px"; // Adjust the border-radius for a curvy appearance
      alertBox.style.border = "3.50px solid #fff"; // Add a thin border
      alertBox.style.transform = "scale(1.35) translate(-50%, -50%)"; // Increase size by 35%
  
      // Append the alert box to the navbar or a specific element
      const navbar = document.querySelector(".navbar"); // Replace with your navbar class or ID
      navbar.appendChild(alertBox);

      // Close the alert box when "LOGIN" or "SIGNUP" button is clicked
     okButton.addEventListener("click", function () {
      alertBox.style.display = "none";
      // Play sound when the button is clicked
     const audio = new Audio('sounds/horror-124161.mp3');

      audio.play();
      // Perform actions for "LOGIN" button here if needed
      window.location.href = "login.html"; // Redirect to login page
    });
  
    cancelButton.addEventListener("click", function () {
        alertBox.style.display = "none";
        // Play sound when the button is clicked
       const audio = new Audio('sounds/horror-124161.mp3');

        audio.play();
        // Perform actions for "SIGNUP" button here if needed
        window.location.href = "signuppage.html"; // Redirect to signup page
      });
    }
  
    // Get all anchor tags on the page
    const anchorTags = document.querySelectorAll("a");
  
    // Function to handle anchor tag click event
    function anchorClickHandler(event) {
      event.preventDefault(); // Prevent default link behavior
      showAlertBox("LOGIN REQUIRED FOR ACCESSING THE CONTENT");
      // You can replace the message above with any custom message you want to display
      // Optionally, redirect to the login page after showing the alert
      // window.location.href = 'login.html';
    }
  
    // Loop through all anchor tags and attach click event listener
    anchorTags.forEach((anchor) => {
      anchor.addEventListener("click", anchorClickHandler);
    });
  });
  