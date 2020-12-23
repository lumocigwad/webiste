<?php
session_start();
if(!isset($_SESSION['admin'])){
  header('location: reg.php');
}
include 'header.php';
?>
<style type="text/css">
  .form-control{
    border-radius: 10px;
  }

</style>
        <div class="content-wrapper">
          <?php
      if(isset($_SESSION['success'])){
        echo "
          
            <p>".$_SESSION['success']."</p> 
         
        "; 
        unset($_SESSION['success']);
      }?>
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
      
                <div class="row">
                    <div class="col-sm-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Post Blog</div>
                            </div>
                            <div class="ibox-body">
                                <div class="container">
                               <form class="form-horizontal" method="POST" action="insert_blog.php" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="form-group ">
                    <label for="title" class="col-sm-3 control-label">Title</label>

                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                </div>
                <!--                 <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-12">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
     -->         <div class="form-group">
                  <label for="content" class="col-sm-3 control-label"><b>Content</b></label>
                  <div class="col-sm-12">
                    <textarea id="editor1" name="content" rows="10" cols="80" required></textarea>
                  </div>
                </div>
             
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
            </div>
                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
              
                <style>
                    .visitors-table tbody tr td:last-child {
                        display: flex;
                        align-items: center;
                    }

                    .visitors-table .progress {
                        flex: 1;
                    }

                    .visitors-table .progress-parcent {
                        text-align: right;
                        margin-left: 10px;
                    }
                </style>

            </div>
            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">2018 © <b>AdminCAST</b> - All rights reserved.</div>
                <a class="px-4" href="http://obydullahshishir.com" target="_blank">Obydullah Shishir</a>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>


    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <?php include 'includes/users_modal.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/metisMenu.min.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="js/Chart.min.js" type="text/javascript"></script>
    <script src="js/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/jquery-jvectormap-us-aea-en.js"></script>
    <!-- CORE SCRIPTS-->
    <script src="js/app.min.js"></script>
      
<script src="bower_components/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
    // Datatable
    $('#example1').DataTable()
    //CK Editor
    CKEDITOR.replace('editor1')
  });
</script>
    <!-- PAGE LEVEL SCRIPTS-->
   <!--  <script src="js/dashboard_1_demo.js"></script> -->
     <!-- <script type="text/javascript">
      $(document).ready(function() {
    $('#example').DataTable();
} );
    </script> -->
   <!-- <script type="text/javascript">
      $(document).ready(function() {
    $('#example').DataTable();
} );
    </script> -->
   <!--  <script type="text/javascript">


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
  </script> -->
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