<?php 
include './header.php';
require_once './db/projects.php';
?>

     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">

          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="card card-info mx-auto" style="width:70%;">
              <div class="card-header" style="background-color: #1B815F;">
                <h3 class="card-title">New Project</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="post" action="add_project.php" enctype="multipart/form-data">
                <div class="card-body">

                <div class="form-group row">
                    <label for="proj_name" class="col-sm-4 col-form-label">Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="proj_name" name="proj_name" placeholder="Project Name" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="txt_file" class="col-sm-4 col-form-label">Upload File</label>
                      <div class="col-sm-8">
                        <input type="file" class="form-control" id="txt_file" name="txt_file">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-12">
                      <div id="pdf-preview" style="border: 1px solid #ccc; padding: 10px; height: 500px;">
                        <embed id="pdf_embed" src="" width="100%" height="100%" />
                      </div>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info float-right" style="background-color: #1B815F;" name="subbtn">Create</button>
                  <a href="./home.php" class="btn btn-default">Cancel</a>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php 

  if(isset($_POST["subbtn"])){

    $fileName = basename($_FILES['txt_file']['name']);
    move_uploaded_file($_FILES['txt_file']['tmp_name'], "files/inputs/".$fileName);
    addProject($_POST["proj_name"], $_SESSION["userid"], $fileName);
    echo '<script>window.location="home.php";</script>';
  }

?>

<script>
        document.getElementById('txt_file').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file && file.type === 'application/pdf') {
                const fileURL = URL.createObjectURL(file);
                document.getElementById('pdf_embed').src = fileURL;
            } else {
                alert('Please select a valid PDF file.');
            }
        });
</script>

<?php include './footer.php'?>


