//js/scripts.js
console.log('Script is loaded');

//welcome user
document.addEventListener('DOMContentLoaded', function() {
   
    const usernamePlaceholder = document.getElementById('usernamePlaceholder');
    const isLoggedIn = false; 
    if (isLoggedIn) {
        usernamePlaceholder.textContent = 'Welcome, User';
    }
});

//Full size images on product description
function showFullSizeImage(imageSrc) {
    document.getElementById('fullSizeImg').src = imageSrc;
}

//Checkout --Causing several issues with cypress testing

/*document.getElementById('checkoutForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(this);

    fetch('/MKTime2/process_checkout.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(text => {
        if (text.trim() === 'success') {
            var confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
            confirmationModal.show();
        } else {
            alert('There was a problem processing your payment. Please try again.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('There was a problem processing your payment. Please try again.');
    });
});
*/
