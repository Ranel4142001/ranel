<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class=""><img src="admin/img/beach.webp" alt="..." 
          class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Beach Resort Management</h1>
            <p>Admin</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
               
                
                <li><a href="#exampledropdownDropdown" aria-expanded="false"
                 data-toggle="collapse"> <i class="icon-windows"></i>Resort Rooms </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('create_room')}}">Add Rooms</a></li>
                    <li><a href="{{url('view_room')}}">View Rooms</a></li>
                   
                  </ul>
                </li>

                <li>
                  <a href="{{url('bookings')}}"> <i class="icon-home"></i>Bookings </a>
                </li>
                <li>
                  <a href="{{url('view_seaside')}}"> <i class="icon-home"></i>Seaside Scenes </a>
                </li>
                
                
                
                
                
        </ul>
      </nav>