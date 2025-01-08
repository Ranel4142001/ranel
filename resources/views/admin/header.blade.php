<!DOCTYPE html> 

<html>
<head> 
  <style type="text/css">
    /* Style for the entire header */
    .header {
      position: relative;
      width: 100%;
    }

    /* Admin Dashboard position */
    .brand-text.brand-big {
      position: absolute;
      top: 23px; /* Align it to the top */
      left: 20px; /* Align it to the left with standard margin */
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 15px; /* Add margin below the Admin Dashboard */
    }

    /* Admin Logout position */
    .logout {
      position: absolute;
      top: 10px; /* Align it to the top */
      right: 20px; /* Align it to the right corner */
      font-size: 16px;
      margin-bottom: 15px; /* Add margin below the Logout section */
    }

    /* Sidebar toggle button - adjust its position */
    .sidebar-toggle {
      position: absolute;
      top: 20px;
      left: 250px; /* Move the button 50px to the left */
      font-size: 18px;
      margin-bottom: 15px; /* Add margin below the arrow button */
    }

    /* Optional: Adjust for mobile responsiveness */
    @media (max-width: 767px) {
      .brand-text.brand-big {
        font-size: 16px;
      }
      .logout {
        font-size: 14px;
      }
    }
  </style>
</head>

<body>
  <header class="header">   
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbar-header">
          <!-- Navbar Header -->
          <a href="" class="">
            <div class="brand-text brand-big visible text-uppercase">
              <strong class="text-primary">Admin</strong><strong>Dashboard</strong>
            </div>
          </a>
          <!-- Sidebar Toggle Btn -->
          <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
        </div>
        
        <div class="right-menu list-inline no-margin-bottom">
          <!-- Log out -->
          <div class="list-inline-item logout">
            <x-app-layout></x-app-layout>
          </div>
        </div>
      </div>
    </nav>
  </header>
</body>
</html>
