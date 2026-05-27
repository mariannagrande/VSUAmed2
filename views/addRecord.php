    <?php include 'inc/header.php' ?>
    <!-------------------------------------------------------------------------------------------------->

    <div class="wrapper">
      <!-- Sidebar -->
        <?php include 'inc/sidebar.php'; ?>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          
          <!-- LOGO -->
            <?php include 'inc/logo.php' ?>
          <!-- End LOGO -->

          <!-- Navbar Header -->
            <?php include 'inc/navbar.php' ?>
          <!-- End Navbar -->
        
        </div>

        <!---------------------------------Content------------------------------------->

        <div class="container">
          <div class="page-inner">
            <div class="card p-4 col-md-9 mx-auto">
              <form action="../pages/record.php" method="POST" id="addRecord">
                <div class="card-header">
                  <div class="card-title">New Medical Record</div>
                </div>
                <div class="card-body row">
                  <div class="form-group col-md-6">
                    <label for="comp">Student Number:</label>
                    <input type="text" class="form-control" placeholder="e.g. 2025-24" name="stud_number" required/>
                  </div>
                  <input name="staff" type="hidden" value="<?= !empty($_SESSION['id']) ?>">
                  <div class="col-md-6 text-danger text-center mt-5"><small>*/ Double check Student Number. If fails, try to manually add the student</small></div>
                  <div class="form-group col-md-6">
                    <label for="comp">Compliant:</label>
                    <input type="text" class="form-control" name="complaint" placeholder="e.g. Headache, Chest Pain" required/>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="diag">Diagnosis:</label>
                    <input type="text" class="form-control" name="diag" placeholder="e.g. Fever" required/>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="med">Medicine:</label>
                    <input type="medicine" name="med" class="form-control" placeholder="e.g. Biogesic" required/>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="dosage">Dosage:</label>
                    <input type="text" name="dose" class="form-control" placeholder="e.g. 100mg" required/>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="dosage">Duration:</label>
                    <input type="text" name="dur" class="form-control" placeholder="e.g. 1 day" required/>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="comment">Instructions:</label>
                    <textarea class="form-control" id="comment" name="ins" required>
                    </textarea>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="comment">Note:</label>
                    <textarea class="form-control" id="comment" name="note" required>
                    </textarea>
                  </div>
                </div>
                <div class="card-footer">
                  <input type="submit" name="addRecord" class="btn btn-success float-end m-0">
                </div>
              </form>
            </div>
          </div>
        </div>

        <!---------------------------------End Content------------------------------------->

      </div>
    <!-------------------------------------------------------------------------------------------------->
    <?php include 'inc/footer.php' ?>