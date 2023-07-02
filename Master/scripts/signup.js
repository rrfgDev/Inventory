// Sign up form
const signupForm = document.getElementById('signup-form');

// Handle sign up form submission
signupForm.addEventListener('submit', function(event) {
  event.preventDefault();

  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;
  const confirmPassword = document.getElementById('confirm-password').value;

  if (password !== confirmPassword) {
    alert("Passwords do not match");
    return;
  }

  // Create user with email and password
  firebase.auth().createUserWithEmailAndPassword(email, password)
    .then((userCredential) => {
      // User registration successful
      alert("Registration successful!");
      // You can redirect the user to a welcome page here
    })
    .catch((error) => {
      // Handle errors during user registration
      const errorCode = error.code;
      const errorMessage = error.message;
      alert(`Registration failed: ${errorMessage}`);
      console.log(errorCode, errorMessage);
    });
});
