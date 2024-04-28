<section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col">
          <form method="post" action="php/form-booking.php">
            <h4>
              BOOK <span>APPOINTMENT</span>
            </h4>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPatientName">Patient Name </label>
                <input type="text" name="patient_name" class="form-control" id="inputPatientName" placeholder="">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDoctorName">Doctor's Name</label>
                <select name="doctor_name" class="form-control wide" id="inputDoctorName">
                  <?php                                
                      $doctor_names = ['','Mikheil Dokhturishvili', 'Irine Ekimbashova', 'Temuri Tskobileba'];
                      foreach ($doctor_names as $doctor) {
                          echo "<option value=\"$doctor\">$doctor</option>";
                      }
                  ?>
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDepartmentName">Department's Name</label>
                <select name="department_name" class="form-control wide" id="inputDepartmentName">
                <?php                                    
                    $department_names = ['','Cardiology', 'Neurology', 'Pulmonology', 'Other'];
                    foreach ($department_names as $department) {
                        echo "<option value=\"$department\">$department</option>";
                    }
                ?>
                </select>
              </div>
            </div>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPhone">Phone Number</label>
                <input type="number" name="phone_number" class="form-control" id="inputPhone" placeholder="XXXXXXXXXX">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputSymptoms">Symptoms</label>
                <input type="text" name="symptoms" class="form-control" id="inputSymptoms" placeholder="">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDate">Choose Date </label>
                <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                  <input type="text" name="appointment_date" class="form-control" readonly>
                  <span class="input-group-addon date_icon">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="btn-box">
              <button type="submit" class="btn" name="submit">Submit Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>