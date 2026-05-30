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
          <div class="page-inner p-5">
            



            <!----------------------------Edit Here------------------------------------>

              
              <div class="row">
                <div class="col-md-8 <?= isset($_GET['pagess']) ? 'd-none' : '' ?>">
                  <div class="card p-5">
                    <div class="card-header">
                      <?php
                        if(isset($_GET['program']) && isset($_GET['yr'])):
                        include '../pages/getStudents.php';
                        ?>
                    
                        <table
                          id="basic-datatables"
                          class="display table table-striped table-hover"
                          >
                          <thead>
                            <tr>
                              <th>Section</th>
                              <th>Name</th>
                            </tr>
                          </thead>

                          <?php
                            $pr = $_GET['program'];
                            $yr = $_GET['yr'];
                            $students = getStudentsByYearProgram($pr, $yr);
                            if(!empty($students)):
                              foreach($students as $stud):
                            ?>
                            <tbody>
                              <tr onclick="window.location='?program=<?= $pr ?>&&yr=<?= $yr ?>&&student=<?= $stud['student_id'] ?>'" style="cursor:pointer;">
                                <td><?= strtoupper($stud['section_name']) ?></td>
                                <td><?= ucwords($stud['last_name'] . ", " . $stud['first_name'] . " " . $stud['middle_name']) ?></td>
                              </tr>
                            </tbody>
                          <?php endforeach; endif; ?>

                        </table>

                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="<?= isset($_GET['pagess']) == 'addProgram' ? 'col-md-8' : 'col-md-4' ?>">
                  <div class="card p-5">
                      <?php
                        if(!empty($_GET['student'])):
                          $id = $_GET['student'];
                          $stud = getStudent($id);
                        ?>

                          <div class="row justify-content-center">
                            <h4 class="text-center">
                                Mini-Medical Record
                            </h4>
                            <hr>
                            <h6>Student Information</h6>
                            <p>
                                <strong style="font-size: 13px;">Student No:</strong> <u><?= $stud['student_number'] ?></u> <br>
                                <strong style="font-size: 13px;">Name:</strong> <u><?= ucwords($stud['last_name'] . ", " . $stud['first_name'] . " " . $stud['middle_name']) ?></u> <br>
                                <strong style="font-size: 13px;">Birthday:</strong> <u><?= date("F d, Y ", strtotime($stud['birth_date'])) ?></u> <br>
                                <strong style="font-size: 13px;">Sex:</strong> <u><?= strtoupper($stud['sex']) ?></u> <br>
                                <strong style="font-size: 13px;">Contact #:</strong> <u><?= $stud['contact_number'] ?></u> <br>
                                <strong style="font-size: 13px;">Email:</strong> <u><?= $stud['stud_email'] ?></u> <br>
                            </p>
                            <hr>
                            <h6>Recent Visits</h6>
                            <?php
                              $visit = getStudentVisits($id);
                              if($visit):
                                foreach($visit as $vs): ?>
                              <small class="px-5">
                                  <?= ucwords($vs['diagnosis']) ?> <br>
                                  <?= date("F d, Y - g:i A", strtotime($vs['created_at'])) ?>
                              </small>
                            <?php endforeach; else: echo "
                                    <small>
                                        No Data Found.
                                    </small>";
                                  endif; ?>
                          </div>

                      <?php elseif(isset($_GET['pagess']) == "addProgram"): ?>
                        <form action="../pages/program.php" method="POST">
                          <div class="card-header">
                            <div class="card-title">ADD PROGRAM</div>
                          </div>
                          <div class="card-body">
                            <div class="form-group">
                              <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"
                                  >Program Name: </span
                                >
                                <input
                                  type="text"
                                  name="prog_name"
                                  class="form-control"
                                  placeholder="e.g. Bachelor of Science in Information Technology"
                                  aria-describedby="basic-addon1"
                                  required
                                />
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"
                                  >Program Code: </span
                                >
                                <input
                                  type="text"
                                  name="code"
                                  class="form-control"
                                  placeholder="e.g. BSIT"
                                  required
                                  aria-describedby="basic-addon1"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="card-footer p-3">
                            <input type="submit" name="addProgram" class="btn btn-success float-end mb-3">
                          </div>
                        </form>
                        <p class="text-center" style="font-family: 'Roboto', sans-serif; font-size: 12px">Create a new program to organize student records effectively.</p>
                        <p class="text-center" style="font-family: 'Roboto', sans-serif; font-size: 12px">“Add program details to continue managing academic records.”</p>
                      <?php else: ?>
                        <p class="text-center mt-3" style="font-family: 'Roboto', sans-serif;">
                          “Medicine is not only about treating illness but also about caring 
                          for people with compassion, accuracy, and responsibility. Every 
                          medical record represents a person’s health journey and serves as 
                          an important guide in providing proper care and treatment. 
                          Maintaining organized and reliable health information helps 
                          healthcare professionals make better decisions, improve patient 
                          safety, and ensure quality healthcare for everyone.”
                        </p>
                        <p class="text-end" style="font-family: 'Roboto', sans-serif;">— William Osler</p>
                      <?php endif; ?>
                  </div>
                </div>
              </div>
            

            <!--------------------------End Edit Here---------------------------------->
      



          </div>
        </div>

        <!---------------------------------End Content------------------------------------->

      </div>

    <!-------------------------------------------------------------------------------------------------->
    <?php include 'inc/footer.php' ?>