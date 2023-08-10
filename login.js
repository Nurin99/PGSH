document.addEventListener('DOMContentLoaded', function () {
    const loginButton = document.getElementById('login-button');
    const alreadyStaffButton = document.getElementById('already-staff-button');

    loginButton.addEventListener('click', function () {
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        // Simulate a login check (replace with actual logic)
        if (username === 'sqm_staff' && password === 'sqm1234*') {
            alert('Login successful! Redirecting...');
            // Redirect to another page (replace with actual URL)
            window.location.href = 'home.html';
        } else {
            alert('Invalid username or password. Please try again.');
        }
    });

    alreadyStaffButton.addEventListener('click', function () {
        // Redirect to home page (replace with actual URL)
        window.location.href = 'home.html';
    });
});
