<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) 
?>

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

/* Style for the directory table */
.directory-table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

.directory-table th, .directory-table td {
  border: 1px solid #ccc;
  padding: 10px;
  text-align: left;
}

</style>
</head>
<body>

<?php
// Sample staff data
$staffData = [
  ['SAMIRA', 'Chief Nursing Officer', 'samira@kpjpgsh.com', '0176248367'],
  // Add more staff data here...
];

function search($staffData) {
  if (isset($_POST['searchInput'])) {
    $searchValue = strtolower($_POST['searchInput']);
    
    echo '<h2>Search Results</h2>';
    echo '<table class="directory-table">';
    foreach ($staffData as $staff) {
      if (strpos(strtolower($staff[0]), $searchValue) !== false ||
          strpos(strtolower($staff[1]), $searchValue) !== false ||
          strpos(strtolower($staff[2]), $searchValue) !== false ||
          strpos(strtolower($staff[3]), $searchValue) !== false) {
        echo '<tr>';
        echo '<td>' . $staff[0] . '</td>';
        echo '<td>' . $staff[1] . '</td>';
        echo '<td>' . $staff[2] . '</td>';
        echo '<td>' . $staff[3] . '</td>';
        echo '</tr>';
      }
    }
    echo '</table>';
  }
}
?>

  <div class="header">
    <div class="search-bar">
      <input type="text" id="searchInput" placeholder="Search...">
      <button type="button" onclick="search()">&#128269;</button>
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
      <a href="home.php">HOME</a>
    </div>
  
    <!-- Shared Folder link with dropdown -->
    <div class="nav-item">
      <a href="sharedfolder.php">IP ADDRESS</a>
    </div>
  
      <!-- Staff Directory link with dropdown -->
  <div class="nav-item right">
    <a href="#" onclick="toggleDropdown('staff-directory-dropdown', event)">STAFF DIRECTORY ▼</a>
  <div class="dropdown" id="staff-directory-dropdown">
    <a href="insurancedirectory.php">INSURANCE Staff</a>
    <a href="nursingdirectory.php">MEDICAL/NURSE Staff</a>
    <a href="financedirectory.php">FINANCE Staff</a>
    <a href="bmsdirectory.php">BMS Staff</a>
    <a href="encoremeddirectory.php">ENCOREMED Staff</a>
    </div>
  </div>

    <!-- Encoremed link -->
    <div class="nav-item">
      <a href="encoremed.php">ENCOREMED</a>
    </div>
  </div>

  <div class="main">
    <h2>Medical/Nurse Staff Directory</h2>
    <table class="directory-table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Position</th>
          <th>Email</th>
          <th>Contact</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>SAMIRA</td>
          <td>Chief Nursing Officer</td>
          <td>samira@kpjpgsh.com</td>
          <td>0176248367</td>
        </tr>
        <tr>
            <td>SITI HASMIRA</td>
            <td>UM-ICU</td>
            <td>sitihasmira@kpjpgsh.com</td>
            <td>0196752854</td>
          </tr>
        <tr>
          <td>AMIRAH</td>
          <td>UM-Diamond</td>
          <td>amirah@kpjpgsh.com</td>
          <td>0182675204</td>
        </tr>
        <tr>
            <td>SALEHA</td>
            <td>UM-Wcu</td>
            <td>saleha@kpjpgsh.com</td>
            <td>01127896201</td>
          </tr>
          <tr>
            <td>SYAZWANI</td>
            <td>UM-Amber</td>
            <td>syazwani@kpjpgsh.com</td>
            <td>0193680647</td>
          </tr>
          <tr>
            <td>FARIDAH</td>
            <td>AUM-OT</td>
            <td>faridah@kpjpgsh.com</td>
            <td>01129325766</td>
          </tr>
          <tr>
            <td>AIN FATIHAH</td>
            <td>UM-Sapphire</td>
            <td>ainfatihah@kpjpgsh.com</td>
            <td>0176259987</td>
          </tr>
          <tr>
            <td>ROZILA</td>
            <td>Education</td>
            <td>rozila@kpjpgsh.com</td>
            <td>0132571092</td>
          </tr>
          <tr>
            <td>RACHEL</td>
            <td>Home Nursing</td>
            <td>rachel@kpjpgsh.com</td>
            <td>0193451201</td>
          </tr>
      </tbody>
    </table>
  </div>

<div class="footer">
  <h2>Footer</h2>
</div>
</body>
</html>
