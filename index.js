function validateForm() {
     // test name
     var name = document.getElementById('name').value;
     if (name.length < 3) {
         alert("Name must be at least 3 characters long.");
         return false;
     }
 
     // test email
     var email = document.getElementById('email').value;
     var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Simple validation pattern
     if (!emailPattern.test(email)) {
         alert("Please enter a valid email address.");
         return false;
     }
 
     // test tel
     var phone = document.getElementById('phone').value;
     var phonePattern = /^\+?([0-9]{1,3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4,5})$/;
     if (!phonePattern.test(phone)) {
         alert("Please enter a valid phone number.");
         return false;
     }
 
     // test destination
     var destination = document.getElementById('destination').value;
     if (destination === "none") {
         alert("Please select a destination.");
        return false;
 }
    // test check-in and check-out dates
    var checkInDate = document.getElementById('check-in').value;
    var checkOutDate = document.getElementById('check-out').value;
    if (checkInDate === '') {
        alert("Please enter a check-in date.");
        return false;
    }
    if (checkOutDate === '') {
        alert("Please enter a check-out date.");
        return false;
    }
    if (new Date(checkOutDate) <= new Date(checkInDate)) {
        alert("Check-out date must be after the check-in date.");
        return false;
    }
 
 return true;
}
