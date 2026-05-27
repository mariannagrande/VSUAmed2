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
                    <th>Diagnosis</th>
                    <th>Date</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                    $history = getVisitHistory();
                    if($history):
                      $n = 1;
                      foreach($history as $h):
                    ?>
                    <tr>
                      <td><?= $n++ . ".)" ?></td>
                      <td class="text-center"><?= $h['student_number'] ?></td>
                      <td><?= $h['diagnosis'] ?></td>
                      <td><?= date("F d, Y - g:i A", strtotime($h['created_at']))?></td>
                    </tr>
                  <?php endforeach; endif; ?>
                </tbody>

              </table>
            </div>
            
          </div>
        </div>

        <!---------------------------------End Content------------------------------------->

      </div>
    <!-------------------------------------------------------------------------------------------------->
    <?php include 'inc/footer.php' ?>