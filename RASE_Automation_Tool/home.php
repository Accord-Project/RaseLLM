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

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          Project Name
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                <?php 
                    $rs = showProjects($_SESSION["userid"]);
                    while($row = $rs->fetch_assoc()){
                ?>
                  <tr>
                      <td>
                            <?php echo $row["id"]; ?>
                      </td>
                      <td>
                          <a>
                              <?php echo $row["name"]; ?>
                          </a>
                          <br/>
                          <small>
                          <?php echo $row["creation_date"]; ?>
                          </small>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-<?php if($row["status"]=="Ready")
                          echo 'success'; else echo 'warning' ?>" style="width: 70px;"><?php echo $row["status"]; ?></span>
                      </td>
                      <td class="project-actions text-right">
                        
                          <a class="btn btn-primary btn-sm" href="view_project.php?projectid=<?php echo $row["id"]; ?>" style="background-color: #1B815F;">
                              <i class="fas fa-folder">
                              </i>
                              <?php if($row["status"]=="Ready") echo 'View'; else echo 'Wait..' ?>
                          </a>
                          <a class="btn btn-danger btn-sm" href="delete_project_confirm.php?projectid=<?php echo $row["id"]; ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                       <?php } ?> 
                 
              </tbody>
          </table>

          <!-- /.col -->
          <div class="row d-flex justify-content-end">
            <div class="col-sm-1" style="padding: 10px;">
                <a href="add_project.php" class="btn btn-primary rounded-button" style="background-color: #1B815F;">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
          </div>

        </div>
        <!-- /.card-body -->
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include './footer.php'?>
