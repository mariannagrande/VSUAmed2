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

            <div class="card p-5">
              <table
                id="basic-datatables"
                class="display table table-striped table-hover"
                >
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Student Number</th>
                    <th>Diagnoses</th>
                    <th>Date</th>
                  </tr>
                </thead>

                <?php
                  ?>
                  <tbody>
                    <tr onclick="window.location='?program=<?//= $pr ?>&&yr=<?//= $yr ?>&&student=<?//= $stud['student_id'] ?>'" style="cursor:pointer;">
                      <td><?//= strtoupper($stud['section_name']) ?></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                <?//php endforeach; endif; ?>

              </table>
            </div>
            
          </div>
        </div>

        <!---------------------------------End Content------------------------------------->

      </div>
    <!-------------------------------------------------------------------------------------------------->
    <?php include 'inc/footer.php' ?>