<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
      /* Apply a consistent background color for the entire body */
      body {
        background-color: #2d2d2d; /* Dark background for the entire page */
        color: white;  /* White text color for contrast */
        margin: 0;  /* Remove default margin */
        font-family: Arial, sans-serif;  /* Default font */
        
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
    margin-bottom: 15px;
}


      /* Styling for the Seaside Scenes header */
      h1 {
        font-size: 40px;
        font-weight: bolder;
        color: white;
        margin-bottom: 30px; /* Add space below the header */
      }

      /* Style for images */
      .row {
        margin-bottom: 20px;
      }

      .col-md-4 {
        margin-bottom: 20px;
      }

      img {
        height: 200px;
        width: 300px;
        object-fit: cover;
        border-radius: 8px; /* Optional: rounded corners for the images */
      }

      .btn-danger {
        margin-top: 10px; /* Add space above the button */
      }

   /* Form styling */
   form {
    background-color: rgba(85, 85, 85, 0.3);  /* Slightly transparent background for form */
    border-radius: 8px;  /* Rounded corners */
    text-align: center;
    backdrop-filter: blur(80px);  /* Stronger blur effect for a 50% appearance */
    -webkit-backdrop-filter: blur(80px);  /* For Safari support */
    margin-bottom: 0;
}


      input[type="file"] {
        margin-top: 15px;
        padding: 8px;
        border-radius: 4px;
        background-color: #666;  /* Dark background for input */
        color: white;
        border: none;
      }

      .btn-primary {
        margin-top: 0;
        padding: 10px 15px;
        background-color: #007bff;  /* Blue color for the button */
        border: none;
        border-radius: 4px;
      }

      .btn-primary:hover {
        background-color: #0056b3;  /* Darker blue on hover */
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
          <center> 
            <h1>Seaside Scenes</h1>

            <div class="row">
              @foreach($seaside as $seaside)
                <div class="col-md-4">
                  <img src="/seaside/{{$seaside->image}}" alt="Seaside Image">
                  <a class="btn btn-danger" href="{{url('delete_seaside', $seaside->id)}}">Delete Image</a>
                </div>
              @endforeach
            </div>

            <form action="{{url('upload_seaside')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div style="padding: 30px;">
                <label style="color: white; font-weight: bold;">Upload Image</label>
                <input type="file" name="image" required>
                <input class="btn btn-primary" type="submit" value="Add Image">
              </div>
            </form>
          </center>
        </div>
      </div>
    </div>

    @include('admin.footer')
  </body>
</html>
