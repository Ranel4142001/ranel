<!DOCTYPE html>
<html>
<head>
  @include('admin.css')
  <style type="text/css">
    /* Basic styling for the table */
    .table_deg {
      width: 100%;
      margin: 40px auto;
      border-collapse: collapse;
      font-family: Arial, sans-serif;
      background-color: #f9f9f9; /* Soft background color */
    }
       /* Page content container styling */
.page-content {
    background-color: #2d2d2d; /* Background color */
    padding: 20px;  /* Add padding around content */
    min-height: calc(100vh - 40px); /* Ensure the content section fills the height minus padding */
    display: flex; /* Use flexbox to layout child elements */
    flex-direction: column; /* Ensure content is arranged vertically */
    justify-content: flex-start; /* Align content to the top */
    box-sizing: border-box; /* Ensure padding is included in height calculation */
    margin-bottom: 40px;
}

    /* Styling for table headers */
    .th_deg {
      background-color: #e0e0e0; /* Lighter gray for header */
      color: #333; /* Darker text for contrast */
      padding: 12px;
      text-align: center;
      font-size: 16px;
    }

    /* Styling for table rows */
    tr {
      background-color: #fafafa; /* Slightly different soft color */
      transition: background-color 0.3s ease;
    }

    tr:hover {
      background-color: #eaeaea; /* Subtle hover effect */
    }

    /* Styling for table cells */
    td {
      padding: 12px;
      text-align: center;
      font-size: 14px;
      color: #555; /* Slightly darker text color for readability */
    }

    /* Styling for images */
    td img {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 5px;
    }

    /* Buttons */
    .btn {
      padding: 8px 15px;
      font-size: 14px;
      border-radius: 5px;
      text-decoration: none;
    }

    /* Delete button */
    .btn-danger {
      background-color: #f44336;
      color: white;
      border: none;
    }

    .btn-danger:hover {
      background-color: #e53935;
    }

    /* Update button */
    .btn-warning {
      background-color: #ff9800;
      color: white;
      border: none;
    }

    .btn-warning:hover {
      background-color: #fb8c00;
    }

    /* Optional: Add some responsive design */
    @media (max-width: 767px) {
      .table_deg {
        width: 100%;
        font-size: 12px;
      }

      .th_deg,
      .td {
        padding: 8px;
      }
    }
  </style>
</head>
<body>
  @include('admin.header')
  <!--sidebar -->
  @include('admin.sidebar')
  <!-- Sidebar Navigation end-->
  
  <div class="page-content">
    <div class="page-header">
      <div class="container-fluid">

        <table class="table_deg">
          <thead>
            <tr>
              <th class="th_deg">Room Title</th>
              <th class="th_deg">Description</th>
              <th class="th_deg">Price</th>
              <th class="th_deg">Room Type</th>
              <th class="th_deg">Wifi</th>
              <th class="th_deg">Image</th>
              <th class="th_deg">Delete</th>
              <th class="th_deg">Update</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $data)
              <tr>
                <td>{{$data->room_title}}</td>
                <td>{!!Str::limit($data->description, 200)!!}</td>
                <td>₱{{$data->price}}</td>
                <td>{{$data->room_type}}</td>
                <td>{{$data->wifi}}</td>
                <td><img src="room/{{$data->image}}" alt="Room Image"></td>
                <td>
                  <a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="{{url('delete_room', $data->id)}}">Delete</a>
                </td>
                <td>
                  <a class="btn btn-warning" href="{{url('update_room', $data->id)}}">Update</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>

      </div>
    </div>
  </div>

  @include('admin.footer')
</body>
</html>
