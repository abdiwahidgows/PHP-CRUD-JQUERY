<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OPERATIONS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome -->
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <h1 class="fs-2 text-center">Users info</h1>
            <button class="btn btn-success " id="AddNew">Add new Form</button>
            <table class="table" >
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Class</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>


        <div class="modal" tabindex="-1" id="studentModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">User Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form id="studentForm">

      <div class="form-group m-2">
        <input type="text" name="id" id="id" class="form-control" placeholder="Enter Student ID">
      </div>
      <div class="form-group m-2">
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Student Name">
      </div>
      <div class="form-group m-2">
        <input type="text" name="class" id="class" class="form-control" placeholder="Enter Student Class">
      </div>



      <!-- the footer of modal -->
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>

    </div>
      
    </div>
  </div>
</div>
    </div>
</div>








    
    <!-- js-bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- js-bootstrap -->
    
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- end jquery -->

    <!-- js strt -->
     <script src="script.js"></script>
    <!-- js  -->
</body>
</html>