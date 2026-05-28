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
                  <tr class="text-center">
                    <th>#</th>
                    <th>Student Number</th>
                    <th>Diagnosis</th>
                    <th>Date Time</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                    $history = getVisitHistory();
                    if($history):
                      $n = 1;
                      foreach($history as $h):
                    ?>
                    <tr data-bs-toggle="modal" data-bs-target="#hello<?= $h['visit_id'] ?>" style="cursor:pointer;">
                      <td class="text-end"><?= $n++ . ".)" ?></td>
                      <td class="text-center"><?= $h['student_number'] ?></td>
                      <td><?= $h['diagnosis'] ?></td>
                      <td class="text-center"><?= date("F d, Y - g:i A", strtotime($h['created_at']))?></td>
                    </tr>
                    <div class="modal fade" id="hello<?= $h['visit_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-body p-5">
                            <div class="text-center mb-4">
                                <h4 class="mb-1"><?= ucwords($h['last_name'] . ", " . $h['first_name'] . " " . $h['middle_name'][0] . ".") ?></h4>
                                <small><?= date("F d, Y - g:i A", strtotime($h['created_at'])); ?></small>
                            </div>
                            <hr>
                            <div class="mb-4 row">
                              <div class="col-md-6 text-center">
                                <div class="mb-3">
                                    <strong>Complaint:</strong>
                                    <p class="mb-0"><?= $h['complaint']; ?></p>
                                </div>

                                <div class="mb-3">
                                    <strong>Diagnosis:</strong>
                                    <p class="mb-0"><?= $h['diagnosis']; ?></p>
                                </div>
                              </div>
                              <div class="col-md-6 text-center border-start">
                                <div class="mb-3">
                                    <strong>Medicine:</strong>
                                    <p class="mb-0"><?= $h['medicine_name'] . " " . $h['dosage'] ?></p>
                                </div>

                                <div class="mb-3">
                                    <strong>Duration:</strong>
                                    <p class="mb-0"><?= $h['duration']; ?></p>
                                </div>
                              </div>
                            </div>
                            <hr>
                            <div class="mx-4">
                                <strong>Instructions:</strong>
                                <p class="mx-4"><?= $h['instructions']; ?></p>
                            </div>
                            <div class="mx-4">
                                <strong>Notes:</strong>
                                <p class="mx-4"><?= $h['notes']; ?></p>
                            </div>
                            <div class="text-end mt-4">
                                <strong>Nurse:</strong>
                                <p class="mb-0"><?= $h['fulll_name']; ?></p>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
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