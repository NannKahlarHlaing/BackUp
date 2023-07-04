<?php 
include 'dbconfig.php';

if (isset($_POST['add_item'])) {
  $item_name = $_POST['item_name'];
  $category_id = $_POST['category_id'];
  $item_price = $_POST['item_price'];
  $item_desc = $_POST['item_desc'];
  $item_qty = $_POST['item_qty'];

  $item_image = $_FILES['item_image'];
  // var_dump($item_image);
  $destination = "upload/" . $item_image['name'];
  $fileName = $item_image['tmp_name'];

  move_uploaded_file($fileName, $destination);

  $obj->insertItemData($item_name, $destination, $category_id, $item_price, $item_desc, $item_qty);
}

if (isset($_POST['update_item'])) {
  $item_id = $_POST['item_id'];
  $item_name = $_POST['item_name'];
  $item_price = $_POST['item_price'];
  $item_desc = $_POST['item_desc'];
  $item_qty = $_POST['item_qty'];

  $obj->updateItemData($item_id, $item_name, $item_price, $item_desc, $item_qty);
}

if (isset($_POST['delete_item'])) {
  $item_id = $_POST['item_id'];

  $obj->deleteItemData($item_id);
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

  <title>My Store - Items</title>

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
          <li class="breadcrumb-item active">Items</li>
          <a href="#add" data-toggle='modal' class="btn btn-primary ml-auto">Add</a>
        </ol>

        <!-- Page Content -->
        <h1>Items List</h1>
        <hr>

        <table class="table">
          <thead>
            <tr>
              <th>No.</th>
              <th>Items Name</th>
              <th>Category</th>
              <th>Price</th>
              <th>Description</th>
              <th>Quantity</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>

            <?php 

            $tableData = $obj->getTableData('items');
            $rowCount = 1;

            foreach ($tableData as $row) {
              $item_name = $row['item_name'];
              echo "<tr>
              <td>$rowCount</td>
              <td>$item_name</td>
              <td>$row[category_id]</td>
              <td>$row[item_price]</td>
              <td>$row[item_desc]</td>
              <td>$row[item_qty]</td>
              <td><a href='#edit' data-toggle='modal' data-id='$row[item_id]' data-name='$item_name' data-price='$row[item_price]' data-desc='$row[item_desc]' data-qty='$row[item_qty]' class='btn btn-warning edit'>Edit</a></td>
              <td><a href='#delete' data-toggle='modal' data-id='$row[item_id]' class='btn btn-danger delete'>Delete</a></td>
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
        <form action="" method="post" enctype="multipart/form-data" class="form-group">
          <div class="modal-body">
            <label for="item_name">Item Name :</label>
            <input type="text" name="item_name" placeholder="Add Item" class="form-control">
            <label for="item_image">Item Image :</label>
            <input type="file" name="item_image" class="form-control-file">
            <label for="category_id">Category :</label>
            <select name="category_id" id="" class="form-control">
              
              <?php 
                $tableData = $obj->getTableData('categories');
                foreach ($tableData as $row):
               ?>
               <option value="<?php echo $row['category_id'] ?>"><?php echo $row['category_name'] ?></option>

             <?php endforeach; ?>

            </select>
            <label for="item_price">Price :</label>
            <input type="number" name="item_price" placeholder="Add Price" class="form-control">
            <label for="item_desc">Description</label>
            <textarea name="item_desc" id="" cols="30" rows="3" class="form-control"></textarea>
            <label for="item_qty">Quantity</label>
            <input type="number" name="item_qty" placeholder="Add Quantity" class="form-control">
          </div>
          <div class="modal-footer">
            <input type="submit" name="add_item" value="Save">
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
          <h4>Edit Items</h4>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="" method="post" class="form-group">
          <div class="modal-body">
            <input type="hidden" id="item_id" name="item_id">
            <label for="item_name">Item Name :</label>
            <input type="text" name="item_name" class="form-control" id="item_name">
            <label for="item_price">Price</label>
            <input type="number" name="item_price" class="form-control" id="item_price">
            <label for="item_desc">Description</label>
            <textarea name="item_desc" cols="30" rows="5" class="form-control" id="item_desc"></textarea>
            <label for="item_qty">Quantity</label>
            <input type="number" name="item_qty" class="form-control" id="item_qty">
          </div>
          <div class="modal-footer">
            <input type="submit" name="update_item" value="Update" class="btn btn-primary">
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
          <h4>Delete Item</h4>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="" method="post" class="form-group">
          <div class="modal-body">
            <input type="hidden" id="item_id_to_delete" name="item_id">
            <p>Are you sure to delete this item ?</p>
          </div>
          <div class="modal-footer">
            <input type="submit" name="delete_item" value="Delete" class="btn btn-primary">
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

    $('.edit').click(function() {
      var item_id = $(this).data('id');
      var item_name = $(this).data('name');
      var item_price = $(this).data('price');
      var item_desc = $(this).data('desc');
      console.log(item_desc);
      var item_qty = $(this).data('qty');

      $('#item_id').val(item_id);
      $('#item_name').val(item_name);
      $('#item_price').val(item_price);
      $('#item_desc').val(item_desc);
      $('#item_qty').val(item_qty);
    });

    $('.delete').click(function() {
      var item_id = $(this).data('id');

      $('#item_id_to_delete').val(item_id);
    });
  </script>

</body>

</html>
