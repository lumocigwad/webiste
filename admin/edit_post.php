 <?php include 'conn.php';
session_start();
 ?>
 
<!-- <?php
  // $where = '';
  // if(isset($_GET['category'])){
  //   $catid = $_GET['category'];
  //   $where = 'WHERE category_id ='.$catid;
  // }

?>  -->
<!-- <?php //include 'includes/header.php'; ?>
html
 -->
 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
 <!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
 -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
  <link rel="apple-touch-icon" sizes="180x180" href="http://onyxdev.net/files/assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="http://onyxdev.net/files/assets/images/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="http://onyxdev.net/files/assets/images/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="http://onyxdev.net/files/assets/images/favicons/manifest.json">
    <link rel="mask-icon" href="http://onyxdev.net/files/assets/images/favicons/safari-pinned-tab.svg" color="#34b2a7">
    <link rel="shortcut icon" href="http://onyxdev.net/files/assets/images/favicons/favicon.ico">
    <meta name="msapplication-config" content="http://onyxdev.net/files/assets/images/favicons/browserconfig.xml">
    <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600,700|Open+Sans" rel="stylesheet">
  <link id="dropzone-css" href="assets/css/dropzone.css" rel="stylesheet">
  <!-- Main CSS -->
  <link id="onyx-css" href="style.css" rel="stylesheet">
 </head>
 <body>
 <div class="container">
<br>
<br>
<br>
<br>
<br>
 <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
<div class="row">
        <div class="col-lg-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
            </div>
            <br>
            <br>
            <div class="box-body">
              <table id="example" class="table table-bordered">
                <thead>
                  <th>Photo</th>
                  <th>Email</th>
                  <th>Name</th>
                  <th>Phone No</th>
                  <th>Status</th>
                  <th>Title</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM team ");
                      $stmt->execute();
                      foreach($stmt as $row){
                        $image = (!empty($row['photo'])) ? '../images/'.$row['photo'] : '../images/profile.jpg';
                        $status = ($row['status']) ? '<span class="badge badge-success" style="font-size:15px ;">active</span>' : '<span class="badge badge-danger" style="font-size:15px ;">inactive</span>';
                        $active = (!$row['status']) ? '<span class="pull-right"><a href="#activate" class="status" data-toggle="modal" data-id="'.$row['id'].'"><i class="fa fa-check-square-o"></i></a></span>' : '<span class="pull-right"><a href="#deactivate" class="status" data-toggle="modal" data-id="'.$row['id'].'"><i class="fa fa-times" style="color:red;"></i></a></span>';
                       
                        echo "
                          <tr>
                            <td>
                              <img src='".$image."' height='30px' width='30px'>
                              <span class='pull-right'><a href='#edit_photo' class='photo' data-toggle='modal' data-id='".$row['id']."'><i class='fa fa-edit'></i></a></span>
                            </td>
                            <td>".$row['email']."</td>
                            <td>".$row['firstname'].' '.$row['lastname']."</td>
                            <td>".$row['phone']."</td>
                            <td>
                              ".$status."
                              ".$active."
                            </td>
                            <td>".$row['title']."</td>
                            <td>
                              <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Edit</button>
                              </td>
                          </tr>
                        ";
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
     <button class="btn btn-lg btn-primary sweet-primary">Primary</button>
       <span class="pull-right"><a href="#activate" class="status" data-toggle="modal" data-id="'.$row['id'].'"><i class="fa fa-check-square-o"></i></a></span>
       <div>
       <span class="badge badge-success badge" style="font-size:15px ">not verified</span></div>
    </div>
    <?php include 'includes/users_modal.php'; ?>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
    <!-- Dropzone JS -->
  <script src="assets/js/dropzone.min.js"></script>

  <!-- Main JS file -->
  <script src="assets/js/scripts.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
    <script type="text/javascript">


    $('.sweet-primary').click(function(){
        swal({
          title: "Are you sure?",
          text: "You want to move this button!!",
          type: "info",
          showCancelButton: true,
          confirmButtonClass: 'btn-primary',
          confirmButtonText: 'Primary'
        });
    });
  </script>
<script>
$(function(){

  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.photo', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.status', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'user_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.userid').val(response.id);
      $('#edit_email').val(response.email);
      $('#edit_firstname').val(response.firstname);
      $('#edit_lastname').val(response.lastname);
      $('#edit_title').val(response.title);
       $('#edit_description').val(response.description);
      $('#edit_phone').val(response.phone);
      $('.fullname').html(response.firstname+' '+response.lastname);
    }
  });
}
</script>
</body>
</html>
