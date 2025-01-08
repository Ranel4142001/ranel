<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.css')
  <style type="text/css">
    /* Global Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Body Styling */
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f9f9f9; /* Soft background */
      color: #333;
    }

       /* Page content container styling */
.page-content {
    background-color: #2d2d2d; /* Background color */
    padding: 30px;  /* Add padding around content */
    min-height: calc(100vh - 40px); /* Ensure the content section fills the height minus padding */
    display: flex; /* Use flexbox to layout child elements */
    flex-direction: column; /* Ensure content is arranged vertically */
    justify-content: flex-start; /* Align content to the top */
    box-sizing: border-box; /* Ensure padding is included in height calculation */

}

    /* Container for Table (for horizontal scrolling) */
    .table-container {
      overflow-x: auto;
      margin: 40px auto;
      max-width: 100%;
    }

    /* Table Styling */
    .table_deg {
      width: 100%;
      border-collapse: collapse;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      background-color: #ffffff; /* White background for table */
      border-radius: 8px;
      overflow: hidden;
    }

    /* Header Styling */
    .th_deg {
      background-color: #f0f0f0; /* Light gray header background */
      color: #333;
      padding: 10px 15px;
      text-align: left;
      font-size: 14px;
      font-weight: bold;
    }

    /* Table Row Styling */
    tr:nth-child(even) {
      background-color: #fafafa; /* Light gray rows */
    }

    td {
      padding: 12px 15px;
      text-align: left;
      font-size: 14px;
      border-top: 1px solid #ddd;
    }

    td img {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 5px;
    }

    /* Status Text Styling */
    .status-approved {
      color: #2ecc71;
      font-weight: bold;
    }

    .status-rejected {
      color: #e74c3c;
      font-weight: bold;
    }

    .status-waiting {
      color: #f39c12;
      font-weight: bold;
    }

    /* Button Styling */
    .btn {
      padding: 8px 12px;
      border-radius: 4px;
      text-decoration: none;
      font-size: 14px;
      display: inline-block;
      margin: 2px;
    }

    .btn-danger {
      background-color: #e74c3c;
      color: white;
      border: none;
    }

    .btn-danger:hover {
      background-color: #c0392b;
    }

    .btn-success {
      background-color: #2ecc71;
      color: white;
      border: none;
    }

    .btn-success:hover {
      background-color: #27ae60;
    }

    .btn-warning {
      background-color: #f39c12;
      color: white;
      border: none;
    }

    .btn-warning:hover {
      background-color: #e67e22;
    }

    /* Optional: Responsive Design */
    @media (max-width: 767px) {
      .table_deg {
        font-size: 12px;
      }

      .th_deg, td {
        padding: 8px 10px;
      }
    }
  </style>
</head>
<body>
  @include('admin.header')

  <!-- Sidebar -->
  @include('admin.sidebar')
  <!-- Sidebar Navigation end-->

  <div class="page-content">
    <div class="page-header">
      <div class="container-fluid">
        <!-- Table Container with Horizontal Scroll -->
        <div class="table-container">
          <table class="table_deg">
            <thead>
              <tr>
                <th class="th_deg">Room ID</th>
                <th class="th_deg">Customer Name</th>
                <th class="th_deg">Email</th>
                <th class="th_deg">Phone</th>
                <th class="th_deg">Arrival Date</th>
                <th class="th_deg">Leaving Date</th>
                <th class="th_deg">Status</th>
                <th class="th_deg">Room Title</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Image</th>
                <th class="th_deg">Delete</th>
                <th class="th_deg">Update Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $data)
              <tr>
                <td>{{$data->room_id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->start_date}}</td>
                <td>{{$data->end_date}}</td>
                <td>
                  @if($data->status == 'approve')
                  <span class="status-approved">Approved</span>
                  @elseif($data->status == 'reject')
                  <span class="status-rejected">Rejected</span>
                  @elseif($data->status == 'waiting')
                  <span class="status-waiting">Waiting</span>
                  @endif
                </td>
                <td>{{$data->room_title}}</td>
                <td>{{$data->price}}</td>
                <td>
                  <img src="/room/{{$data->image}}" alt="Room Image">
                </td>
                <td>
                  <a onclick="return confirm('Continue to delete?');" class="btn btn-danger" href="{{url('delete_booking', $data->id)}}">Delete</a>
                </td>
                <td>
                  <a class="btn btn-success" href="{{url('approve_book', $data->id)}}">Approve</a>
                  <a class="btn btn-warning" href="{{url('reject_book', $data->id)}}">Reject</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- End of Table Container -->

      </div>
    </div>
  </div>

  @include('admin.footer')
</body>
</html>
