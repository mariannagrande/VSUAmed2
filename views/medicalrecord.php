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
                <div class="col-md-8">
                  <div class="card">
                    <div class="card-header">
                      this part the display will switch depending on the page name
                      if page is addProgram then display the add program card, but if not then display the sections, yr, and students
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header">
                      if the page is for addingProgram then the page will display this card. if not, no display
                    </div>
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