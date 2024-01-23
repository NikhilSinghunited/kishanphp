<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
<!--     
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-bsmktzKU2FDLrYovr9R0NGuKGlWUHeigJ1tWRvFa4aSHjzhy8ftgJor1SzSd0Jw2" crossorigin="anonymous"></script> -->

  <!-- Custom CSS -->
    <!-- <link rel="stylesheet" href="css/styles.css"> -->
    <style>
        body {
  margin: 0;
  padding: 0;
  background-color: #1d2634;
  color: #9e9ea4;
  font-family: 'Montserrat', sans-serif;
}

.material-icons-outlined {
  vertical-align: middle;
  line-height: 1px;
  font-size: 35px;
}

.grid-container {
  display: grid;
  grid-template-columns: 260px 1fr 1fr 1fr;
  grid-template-rows: 0.2fr 3fr;
  grid-template-areas:
    'sidebar header header header'
    'sidebar main main main';
  height: 100vh;
}

/* ---------- HEADER ---------- */
.header {
  grid-area: header;
  height: 70px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 30px 0 30px;
  box-shadow: 0 6px 7px -3px rgba(0, 0, 0, 0.35);
}

.menu-icon {
  display: none;
}

/* ---------- SIDEBAR ---------- */

#sidebar {
  grid-area: sidebar;
  height: 100%;
  background-color: #263043;
  overflow-y: auto;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
}

.sidebar-title {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 30px 30px 30px 30px;
  margin-bottom: 30px;
}

.sidebar-title > span {
  display: none;
}

.sidebar-brand {
  margin-top: 15px;
  font-size: 20px;
  font-weight: 700;
}

.sidebar-list {
  padding: 0;
  margin-top: 15px;
  list-style-type: none;
}

.sidebar-list-item {
  padding: 20px 20px 20px 20px;
  font-size: 18px;
}

.sidebar-list-item:hover {
  background-color: rgba(255, 255, 255, 0.2);
  cursor: pointer;
}

.sidebar-list-item > a {
  text-decoration: none;
  color: #9e9ea4;
}

.sidebar-responsive {
  display: inline !important;
  position: absolute;
  /*
    the z-index of the ApexCharts is 11
    we want the z-index of the sidebar higher so that
    the charts are not showing over the sidebar 
    on small screens
  */
  z-index: 12 !important;
}

/* ---------- MAIN ---------- */

.main-container {
  grid-area: main;
  overflow-y: auto;
  padding: 20px 20px;
  color: rgba(255, 255, 255, 0.95);
}

.main-title {
  display: flex;
  /* gap:30px; */
  justify-content: space-between;
}

.main-cards {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  gap: 20px;
  margin: 20px 0;
}

.card {
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  padding: 25px;
  border-radius: 5px;
}

.card:first-child {
  background-color: #2962ff;
}

.card:nth-child(2) {
  background-color: #ff6d00;
}

.card:nth-child(3) {
  background-color: #2e7d32;
}

.card:nth-child(4) {
  background-color: #d50000;
}

.card-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.card-inner > .material-icons-outlined {
  font-size: 45px;
}

.charts {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
  margin-top: 60px;
}

.charts-card {
  background-color: #263043;
  margin-bottom: 20px;
  padding: 25px;
  box-sizing: border-box;
  -webkit-column-break-inside: avoid;
  border-radius: 5px;
  box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
}

.chart-title {
  display: flex;
  align-items: center;
  justify-content: center;
}

/* ---------- MEDIA QUERIES ---------- */

/* Medium <= 992px */

@media screen and (max-width: 992px) {
  .grid-container {
    grid-template-columns: 1fr;
    grid-template-rows: 0.2fr 3fr;
    grid-template-areas:
      'header'
      'main';
  }

  #sidebar {
    display: none;
  }

  .menu-icon {
    display: inline;
  }

  .sidebar-title > span {
    display: inline;
  }
}

/* Small <= 768px */

@media screen and (max-width: 768px) {
  .main-cards {
    grid-template-columns: 1fr;
    gap: 10px;
    margin-bottom: 0;
  }

  .charts {
    grid-template-columns: 1fr;
    margin-top: 30px;
  }
}

/* Extra Small <= 576px */

@media screen and (max-width: 576px) {
  .hedaer-left {
    display: none;
  }
}

a{
    text-decoration: none;
    color:#fff;
}



.dropdown {
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #263043;
            min-width: 100px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-item {
            color: #9e9ea4;
            padding: 6px;
            text-decoration: none;
            display: block;
        }
/* 
        .dropdown-item:hover {
            background-color: rgba(255, 255, 255, 0.2);
        } */

        .dropdown-arrow::after {
            content: '\25BC'; /* Unicode character for a downward-pointing triangle */
            margin-left: 15px;
        }
    </style>



</head>

  <body>


  
    <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-left">
          <span class="material-icons-outlined">search</span>
        </div>
        <div class="header-right">
          <span class="material-icons-outlined">notifications</span>
          <span class="material-icons-outlined">email</span>
          <span class="material-icons-outlined">account_circle</span>
        </div>
      </header>
      <!-- End Header -->




      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined">shopping_cart</span> STORE
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
        <li class="sidebar-list-item">
            <div class="dropdown">
                <span class="dropdown-item">WEBSITE 1<span class="dropdown-arrow"></span></span>
                <div class="dropdown-content">
                    <a href="result.html" class="dropdown-item">Add Live Result</a>
                    <a href="start.html" class="dropdown-item">Starter</a>
                    <a href="newc.html" class="dropdown-item">Consolation</a>
                </div>
            </div>
        </li>
        <li class="sidebar-list-item">
            <div class="dropdown">
                <span class="dropdown-item">WEBSITE 2<span class="dropdown-arrow"></span></span>
                <div class="dropdown-content">
                    <a href="#" class="dropdown-item">Add Live Result</a>
                    <a href="#" class="dropdown-item">Starter</a>
                    <a href="#" class="dropdown-item">Consolation</a>
                </div>
            </div>
        </li>

          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
              STARTER
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="" target="_blank">
               CONSOLATION
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
              ADD TO DATABASE
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
            WINNER
            </a>
          </li>
          
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <h2>DASHBOARD</h2>
          
        </div>

        <div class="main-cards">

          <div class="card">
            <div class="card-inner">
              <h3 id="addToDbBtn"><a href="adTodb.php" target="_self">ADD_TO_DB</a></h3>
              <span class="material-icons-outlined">inventory_2</span>
            </div>
            <!-- <h1>249</h1> -->
          </div>

          <div class="card">
            <div class="card-inner">
              <h3>CATEGORIES</h3>
              <span class="material-icons-outlined">category</span>
            </div>
            <!-- <h1>25</h1> -->
          </div>

          <div class="card">
            <div class="card-inner">
              <h3>CUSTOMERS</h3>
              <span class="material-icons-outlined">groups</span>
            </div>
            <!-- <h1>1500</h1> -->
          </div>

          <div class="card">
            <div class="card-inner">
              <h3>ALERTS</h3>
              <span class="material-icons-outlined">notification_important</span>
            </div>
            <!-- <h1>56</h1> -->
          </div>

        </div>

        
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script>
        // SIDEBAR TOGGLE

let sidebarOpen = false;
const sidebar = document.getElementById('sidebar');

function openSidebar() {
  if (!sidebarOpen) {
    sidebar.classList.add('sidebar-responsive');
    sidebarOpen = true;
  }
}

function closeSidebar() {
  if (sidebarOpen) {
    sidebar.classList.remove('sidebar-responsive');
    sidebarOpen = false;
  }
}

// ---------- CHARTS ----------

// BAR CHART
document.getElementById('addToDbBtn').addEventListener('click', function() {
    // You can perform an AJAX request to your PHP script here
    // For simplicity, I'll use the Fetch API
    fetch('addToDb.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ action: 'insertToDatabase' }),
    })
    .then(response => response.json())
    .then(data => {
        // Handle the response from the server
        console.log(data);
    })
    .catch(error => {
        console.error('Error:', error);
    });
});





    </script>
  </body>
</html>