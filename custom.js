// Add a click event to the body to handle navigation when clicking outside the image
document.body.addEventListener('click', (event) => {
    // Check if the click was not directly on the image
    const isOutsideImage = event.target.tagName !== 'IMG';

    // If the click was outside the image, navigate back to the previous page in the browser history
    if (isOutsideImage) {
        window.history.back();
    }
});
