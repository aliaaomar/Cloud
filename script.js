document.addEventListener('DOMContentLoaded', function() {
  // Get the form element
  const form = document.querySelector('form');
  // Add event listener for form submission
  form.addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent the default form submission
    // Get the input values
    const name = form.querySelector('input[type="text"]').value;
    const email = form.querySelector('input[type="email"]').value;
    const message= form.querySelector('textarea').value;
    // Perform form validation
    if (name && email && message) {
      // Display a success message
      alert('Form submitted successfully!');
      // Clear the form inputs
      form.reset();
    } else {
      // Display an error message
      alert('Please fill in all fields.');
    }
  });

  // Perform an animation on an element
  const element = document.querySelector('.animate');
  element.addEventListener('click', function() {
    element.classList.add('animate-effect');
    // Remove the animation class after the animation ends
    setTimeout(function() {
      element.classList.remove('animate-effect');
    }, 1000);
  });

  // Toggle a menu on button click
  const menuButton = document.querySelector('.menu-button');
  const menu = document.querySelector('.menu');
  menuButton.addEventListener('click', function() {
    menu.classList.toggle('menu-open');
  });
});
