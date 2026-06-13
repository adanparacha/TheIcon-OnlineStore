// Unified navigation functionality
document.querySelectorAll('nav a').forEach(link => {
  link.addEventListener('click', event => {
    event.preventDefault(); // Prevent default behavior

    const targetId = event.target.getAttribute('href').substring(1); // Extract the target section ID
    const targetSection = document.getElementById(targetId); // Get the target section

    // Ensure the target section exists
    if (targetSection) {
      // Hide all sections
      document.querySelectorAll('section').forEach(section => {
        section.classList.add('hidden');
      });

      // Show the target section
      targetSection.classList.remove('hidden');

      // Scroll smoothly to the target section
      targetSection.scrollIntoView({
        behavior: 'smooth', // Smooth scrolling
        block: 'start', // Align section to the top
      });
    }
  });
});