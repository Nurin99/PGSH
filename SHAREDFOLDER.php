<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{
  box-sizing: border-box;
}
body {
  font-family: "Arial", sans-serif;
  margin: 0;
  background-color: #f0f0f0;
}


.header {
  padding: 10px;
  text-align: left;
  background: #3498db;
  color: white;
}

.header-title {
  font-size: 40px;
  color: white;
}
/* Style for the header description */

.header-description {
  font-size: 24px;
  color: #e74c3c;}

/* Style the top navigation bar */
.navbar {
  background-color: #2c3e50; /* Set the background color of the navbar */
  display: flex;
  align-items: center;
  padding: 10px;
  margin-left: auto; /* Move the navigation bar to the left */
}

/* Style for the navigation bar links */
.navbar a {
  color: #fff; /* Set the text color of the links */
  text-decoration: none;
  padding: 10px 15px;
  transition: background-color 0.3s; /* Add a smooth transition effect for the background color */
}

/* Set the navbar links to display block */
.navbar {
  /* Add display: block to .nav-item */
  display: block;
}

/* Right-aligned link */
/*.navbar a.right {
  /* Remove margin-left: auto; */


/* Change color on hover */
.navbar a:hover {
  background-color: #34495e; /* Change the background color on hover */
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sit next to each other */
/*.row {
  display: flex;
  justify-content: space-between;
}
/* Sidebar/left column */
.side {
  /*flex: 0.3; /* Set the width of the sidebar column to 30% of the row width */
  background-color: #f9f9f9; /* Set the background color of the sidebar column */
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow for a cleaner look */
}

/* Style for the main column */
.main {
  flex: 1; /* Take up the full width of the page */
  background-color: #fff;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #34495e;
  color: #fff;
}
/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
/* Adjust dropdown position */
.navbar .nav-item {
  position: relative;
}

/* Hide dropdowns by default */
.dropdown {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #9f9494;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 10;
}
/* Display the dropdown when the parent link is hovered or focused */
.nav-item:hover .dropdown,
.dropdown:focus-within {
  display: block;}

/* Vertical alignment for dropdown links */
.dropdown a {
  display: block;
  padding: 10px;
  text-decoration: none;
  color: black;
}

/* Change color on hover */
.dropdown a:hover {
  background-color: #ad9e9e;
  color: black;
}

/* Set the navbar links to display horizontally */
.navbar {
  display: flex;
  flex-wrap: wrap;
}
/* Update the position to appear below the nav-item */
.dropdown {
  left: 0;
  top: 100%;
  margin-top: 0; /* Add this line to override any other margin settings */
}

/* Style for the search bar */
.search-bar {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 10px;
  background-color: #2c3e50; /* Set the background color of the search bar */
}


/* Style for the search input */
.search-bar input[type="text"] {
  padding: 10px;
  width: 70%;
  border: none;
  border-radius: 5px;
  background-color: #f0f0f0; /* Set the background color of the search input */
}


/* Style for the search button */
.search-bar button {
  padding: 10px;
  margin-left: 10px;
  border: none;
  background-color: #3498db; /* Set the background color of the search button */
  color: #fff; /* Set the text color of the search button */
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s; /* Add a smooth transition effect for the background color */
}

/* Change background color on hover */
.search-bar button:hover {
  background-color: #2980b9; /* Change the background color of the search button on hover */
}

/* Responsive layout - when the screen is less than 700px wide */
@media screen and (max-width: 700px) {
  .search-bar {
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
  }
  .search-bar input[type="text"] {
    width: 100%;
    margin-bottom: 10px;
  }
}

/* Additional media query for screens smaller than 400px */
@media screen and (max-width: 400px) {
  .search-bar {
    flex-direction: column;
  }
}
.centered-image {
  display: block;
  margin: 0 auto;
}
/* Styling for the appointment table */
.appointment-table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

.appointment-table th, .appointment-table td {
  border: 1px solid #ccc;
  padding: 10px;
  text-align: center;
}

.appointment-table th {
  background-color: #f0f0f0;
}



</style>
</head>
<body>
<?php
  function toggleDropdown($dropdownId) {
  $dropdown = document.getElementById($dropdownId);
  $style = $dropdown.style;
  $style->display = $style->display === 'none' ? 'block' : 'none';
  event.stopPropagation(); // Stop the click event from propagating
}

function search() {
  // Get the input value
  $searchValue = $_POST['searchInput'];

  // Perform your search operation here (e.g., redirect to search results page or show results on the same page).
  echo 'Search for: ' . $searchValue;
  // Add your search logic here...

  // For demonstration purposes, let's clear the input after the search button is clicked
  $_POST['searchInput'] = '';
}
?>

  <div class="header">
    <div class="search-bar">
      <input type="text" id="searchInput" placeholder="Search...">
      <button type="button" onclick="search()">Search</button>
    </div>
<div class="header">
  <img src="https://media.kpjhealth.com.my/media/hospital/hosp-25/setting/1634883989_d272167c1fcbb4c82fcb.png" style="height:60px;">
    <h1 class="header-title">PGSH Information</h1>
    <p class="header-description">Care For Life </p>
  </div>
  
</div>
<div class="container">
  <!-- Navigation Bar -->
  <div class="navbar">
    <!-- Home link -->
    <div class="nav-item">
      <a href="HOME.php">HOME</a>
    </div>
  
    <!-- About link -->
    <div class="nav-item">
      <a href="ABOUT.php">ABOUT</a>
    </div>
  
     <!-- Department link with dropdown -->
  <div class="nav-item">
    <a href="#" onclick="toggleDropdown('department-dropdown')">DEPARTMENT ▼</a>
    <div class="dropdown" id="department-dropdown">
      <a href="department-insurance.html">INSURANCE</a>
      <a href="department-medical-nurse.html">MEDICAL/NURSE</a>
      <a href="department-finance.html">FINANCE</a>
      <a href="department-bms.html">BMS</a>
      <a href="department-encoremed.html">ENCOREMED</a>
    </div>
  </div>

  
    <!-- Shared Folder link with dropdown -->
    <div class="nav-item">
      <a href="SHAREDFOLDER.php">SHARED FOLDER</a>
    </div>
  
    <!-- Staff Directory link with dropdown -->
  <div class="nav-item right">
    <a href="#" onclick="toggleDropdown('staff-directory-dropdown', event)">STAFF DIRECTORY ▼</a>
  <div class="dropdown" id="staff-directory-dropdown">
    <a href="INSURANCEDIRECTORY.php">INSURANCE Staff</a>
    <a href="NURSINGDIRECTORY.php">MEDICAL/NURSE Staff</a>
    <a href="FINANCEDIRECTORY.php">FINANCE Staff</a>
    <a href="BMSDIRECTORY.php">BMS Staff</a>
    <a href="ENCOREMEDDIRECTORY.php">ENCOREMED Staff</a>
    </div>
  </div>

    <!-- Encoremed link -->
    <div class="nav-item">
      <a href="ENCOREMED.php">ENCOREMED</a>
    </div>
  </div>

 <div class="main">
 <!-- New section for Shared Folder -->
 <div class="shared-folder-section">
  <h3>Shared Folder Information</h3>
  <p>Printer IP Address: 192.168.1.100</p>
</div>
</div>
  </div>

<div class="footer">
  <h2>Footer</h2>
</div>
</body>
</html>