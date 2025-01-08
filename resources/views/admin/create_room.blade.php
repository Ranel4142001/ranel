<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
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

      /* Center-align the header */
      .page-header h1 {
          font-size: 30px;
          font-weight: bold;
          margin-left: 20px;
          text-align: center;
      }

      .container-fluid {
          max-width: 600px;
          margin: 0 auto; /* Center the form container */
      }

      .div_deg {
          margin-bottom: 15px;
          display: flex;
          align-items: center;
      }

      .div_deg label {
          width: 150px;
          font-weight: bold;
          color: white; /* Make label text color white */
      }

      .div_deg input,
      .div_deg select,
      .div_deg textarea {
          flex: 1;
          padding: 8px;
          font-size: 14px;
          border-radius: 5px;
      }

      .div_deg input, .div_deg select {
          background-color: #444;  /* Dark background color for inputs and selects */
          color: white;  /* White text color */
          border: 1px solid #555; /* Border color */
      }

      .div_deg textarea {
          background-color: #444;  /* Dark background for textarea */
          color: white;  /* White text color */
          resize: vertical;
      }

      .btn {
          display: block;
          width: 100%;
          padding: 10px;
          font-size: 16px;
          background-color: #007bff; /* Button background color */
          color: white;  /* White text color for the button */
          border: none;
          border-radius: 5px;
          margin-top: 10px;
      }

      .btn:hover {
          background-color: #0056b3;  /* Darker shade on hover */
      }

    </style>
  </head>
  <body>
    @include('admin.header')

    <!-- Sidebar -->
    @include('admin.sidebar')


    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1 style="font-size: 30px; font-weight: bold; margin-left: 145px;">Add Rooms</h1> 

                <form action="{{url('add_room')}}" method="Post" enctype="multipart/form-data">
                    @csrf
                    <div class="div_deg">
                        <label>Room Title</label>
                        <input type="text" name="title">
                    </div>
                    <div class="div_deg">
                        <label>Description</label>
                        <textarea name="description"></textarea>
                    </div>
                    <div class="div_deg">
                        <label>Price</label>
                        <input type="number" name="price">
                    </div>

                    <div class="div_deg">
                        <label>Room Type</label>
                        <select name="type">
                            <option value="regular">Regular</option>
                            <option value="premium">Premium</option>
                            <option value="deluxe">Deluxe</option>
                        </select>
                    </div>

                    <div class="div_deg">
                        <label>Wifi</label>
                        <select name="wifi">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="div_deg">
                        <label>Upload Image</label>
                        <input type="file" name="image">
                    </div>

                    <div class="div_deg">
                        <input class="btn btn-primary" type="submit" value="Add Room">
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('admin.footer')
  </body>
</html>
      