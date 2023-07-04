<?php
session_start();

if (isset($_SESSION['loginStatus'])):
?>

<?php
  
include 'dbconfig.php';

if (isset($_POST['add_category'])) {
  $category_name = $_POST['category_name'];

  $obj->insertCategoryData($category_name);

}

if (isset($_POST['update_category'])) {
  $category_id = $_POST['category_id'];
  $category_name = $_POST['category_name'];

  $obj->updateCategoryData($category_id, $category_name);
}

if (isset($_POST['delete_category'])) {
  $category_id = $_POST['category_id'];

  $obj->deleteCategoryData($category_id);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>My Store - Categories</title>

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <?php include 'navbar.php'; ?>

  <div id="wrapper">

    <!-- Sidebar -->

    <?php include 'sidebar.php'; ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="categories.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Categories</li>
          <a href="#add" data-toggle='modal' class="btn btn-primary ml-auto">Add</a>
        </ol>

        <!-- Page Content -->
        <h1>Categories List</h1>
        <hr>

        <table class="table">
          <thead>
            <tr>
              <th>No.</th>
              <th>Category Name</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>

            <?php 

            $tableData = $obj->getTableData('categories');
            $rowCount = 1;

            foreach ($tableData as $row) {
              $category_name = $row['category_name'];
              echo "<tr>
              <td>$rowCount</td>
              <td>$row[category_name]</td>
              <td><a href='#edit' data-toggle='modal' data-id='$row[category_id]' data-name='$row[category_name]' class='btn btn-warning edit'>Edit</a></td>
              <td><a href='#delete' data-toggle='modal' data-id='$row[category_id]' class='btn btn-danger delete'>Delete</a></td>
              </tr>";

              $rowCount++;
            }

            ?>

          </tbody>
        </table>
        <!-- <p>This is a great starting point for new custom pages.</p> -->

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->

      <?php include 'footer.php'; ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Logout Modal End -->

  <!-- Add Modal Start -->
  <div class="modal fade" id="add">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4>Add Category</h4>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="" method="post" class="form-group">
          <div class="modal-body">
            <label for="category_name">Category Name :</label>
            <input type="text" name="category_name" placeholder="Add Category" class="form-control">
          </div>
          <div class="modal-footer">
            <input type="submit" name="add_category" value="Save">
            <input type="reset" name="cancel" value="Cancel">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Add Modal End -->

  <!-- Edit Modal Start -->
  <div class="modal fade" id="edit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4>Edit Category</h4>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="" method="post" class="form-group">
          <div class="modal-body">
            <input type="hidden" id="category_id" name="category_id">
            <label for="category_name">Category Name :</label>
            <input type="text" name="category_name" placeholder="Add Category" class="form-control" id="category_name">
          </div>
          <div class="modal-footer">
            <input type="submit" name="update_category" value="Update" class="btn btn-primary">
            <input type="reset" name="cancel" value="Cancel" class="btn btn-secondary">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Edit Modal End -->

  <!-- Delete Modal Start -->
  <div class="modal fade" id="delete">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4>Delete Category</h4>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="" method="post" class="form-group">
          <div class="modal-body">
            <input type="hidden" id="category_id_to_delete" name="category_id">
            <p>Are you sure to delete this category ?</p>
          </div>
          <div class="modal-footer">
            <input type="submit" name="delete_category" value="Delete" class="btn btn-primary">
            <input type="reset" name="cancel" value="Cancel" class="btn btn-secondary">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Delete Modal End -->

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <script type="text/javascript">

    $('.edit').click(function(){
      var category_id = $(this).data('id');
      var category_name = $(this).data('name');

      $('#category_id').val(category_id);
      $('#category_name').val(category_name);

    });

    $('.delete').click(function() {
      var category_id = $(this).data('id');
      // console.log(category_id);
      $('#category_id_to_delete').val(category_id);
    });
  </script>

</body>

</html>

<?php endif; ?>
<?php 
  if(!isset($_SESSION['loginStatus'])) {
  header('location: index.php');
} ?>
