 <?php 
 include 'includes/conn.php';
 ?>
 
<div>
      </div>
<div class="row">
        <div class="col-lg-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
            </div>
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
    
    <!-- <script type="text/javascript">
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
</script> -->
<!-- </body>
</html> -->
