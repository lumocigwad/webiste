 <?php 
 include 'includes/conn.php';
 ?>
 
<div>
<div class="row">
        <div class="col-lg-12">
          <div class="box">
            <div class="box-body">
              <table id="example" class="table table-bordered">
                <thead>
                  <th>Title</th>
                  <th>Views</th>
                  <th>Status</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM posts ");
                      $stmt->execute();
                      foreach($stmt as $row){
                        // $image = (!empty($row['photo'])) ? '../images/'.$row['photo'] : '../images/profile.jpg';
                        $status = ($row['published']) ? '<span class="badge badge-success" style="font-size:15px ;">Published</span>' : '<span class="badge badge-danger" style="font-size:15px ;">Unpublished</span>';
                        $active = (!$row['published']) ? '<span class="pull-right"><a href="#publish" class="status" data-toggle="modal" data-id="'.$row['id'].'"><i class="fa fa-check-square-o"></i></a></span>' : '<span class="pull-right"><a href="#unpublish" class="status" data-toggle="modal" data-id="'.$row['id'].'"><i class="fa fa-times" style="color:red;"></i></a></span>';
                       
                        echo "
                          <tr>
                            <td>".$row['title']."</td>
                            <td>".$row['views']."</td>
                            <td>
                              ".$status."
                              ".$active."
                            </td>
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
