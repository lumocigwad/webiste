<!-- Add -->
<div>
<div class="modal  fade" width ="100%" id="addnew">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><b>Add New User</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              
            </div>
              <form class="form-horizontal" method="POST" action="register.php" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Title</label>

                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">First Name</label>

                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Last Name</label>

                    <div class="col-sm-12">
                      <input type="lastname" class="form-control" id="lastname" name="lastname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-12">
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">Phone No</label>

                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                </div>
                

                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-12">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
               <!--  <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Description</label>

                    <div class="col-sm-12">
                      <textarea class="form-control" id="description" name="description" required rows="5"></textarea> 
                    </div>
                </div> -->
                <p><b>Description</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor" name="description" rows="10" cols="80" required></textarea>
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

<!-- Edit -->
<div class="modal fade" id="edit" width="100%">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title"><b>Edit User</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                  <span aria-hidden="true">&times;</span></button>
              
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="team_edit.php">
                <input type="hidden" class="userid" name="id">
                 <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Title</label>

                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="edit_title" name="title" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">First Name</label>

                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="edit_firstname" name="firstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">Last Name</label>

                    <div class="col-sm-12">
                      <input type="lastname" class="form-control" id="edit_lastname" name="lastname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-12">
                      <input type="email" class="form-control" id="edit_email" name="email" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">Phone No</label>

                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="edit_phone" name="phone" required>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="description" class="col-sm-3 control-label">Description</label>

                    <div class="col-sm-12">
                      <textarea class="form-control" id="edit_description" name="description" required rows="5"></textarea> 
                    </div>
                </div>
             
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_delete.php">
                <input type="hidden" class="userid" name="id">
                <div class="text-center">
                    <p>DELETE USER</p>
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
             
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="photo_update.php" enctype="multipart/form-data">
                <input type="hidden" class="userid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div> 


<!-- Activate -->
<div class="modal fade" id="activate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Activating...</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="activate.php">
                <input type="hidden" class="userid" name="id">
                <div class="text-center">
                    <h4>Are you sure you want to activate</h4>
                    <h2 class="bold fullname" style="color:green;"></h2>
                     <h4>Account!</h4>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> No</button>
              <button type="submit" class="btn btn-success btn-flat" name="activate"><i class="fa fa-check"></i> Yes</button>
              </form>
            </div>
        </div>
    </div>
</div> 
<!-- Deactivate -->
<div class="modal fade" id="deactivate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title"><b>Deactivating...</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
             
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="deactivate.php">
                <input type="hidden" class="userid" name="id">
                <div class="text-center">
                   <h4>Are you sure you want to Deactivate</h4>
                    <h2 class="bold fullname" style="color: red;"></h2>
                    <h4>Account!</h4>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> No</button>
              <button type="submit" class="btn btn-success btn-flat" name="deactivate"><i class="fa fa-check"></i> Yes</button>
              </form>
            </div>
        </div>
    </div>
</div> 

<!-- B  L  O  G  S  E  C  T  I  O  N -->
<!-- Edit -->
<div class="modal fade" id="edit_blog" width="100%">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title"><b>Edit Blog</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                  <span aria-hidden="true">&times;</span></button>
              
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="blog_edit.php">
                <input type="hidden" class="userid" name="id">
                 <div class="form-group">
                    <label for="title" class="col-sm-3 control-label">Title</label>

                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="edit_title1" name="title" required>
                    </div>
                </div>
                <div class="form-group">
                  <label for="content" class="col-sm-3 control-label">Content</label>
                  <div class="col-sm-12">
                      <textarea class="form-control" id="edit_content" name="content" required rows="5"></textarea> 
                    </div>
                  </div>
             
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

     <!-- Publish-->
<div class="modal fade" id="publish">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Publishing...</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
            
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="publish.php">
                <input type="hidden" class="userid" name="id">
                <div class="text-center">
                    <h4>Are you sure you want to publish</h4>
                    <h2 class="bold fullname" style="color:green;"></h2>
                     <h4>Blog?</h4>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> No</button>
              <button type="submit" class="btn btn-success btn-flat" name="activate"><i class="fa fa-check"></i> Yes</button>
              </form>
            </div>
        </div>
    </div>
</div> 
<!-- unpublish -->
<div class="modal fade" id="unpublish">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title"><b>Unpublishing...</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
             
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="unpublish.php">
                <input type="hidden" class="userid" name="id">
                <div class="text-center">
                   <h4>Are you sure you want to Unpublish</h4>
                    <h2 class="bold fullname" style="color: red;"></h2>
                    <h4>Blog?</h4>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> No</button>
              <button type="submit" class="btn btn-success btn-flat" name="deactivate"><i class="fa fa-check"></i> Yes</button>
              </form>
            </div>
        </div>
    </div>
</div> 
