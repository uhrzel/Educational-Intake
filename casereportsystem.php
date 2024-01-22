<?php
include('includes/header.php');
include('includes/navbar.php');
include('config.php');

$query = "SELECT * FROM education_intake";
$query_run = $connection->query($query); // Using PDO query method

?>
<?php

include('config.php');

$search_query = isset($_GET['search']) ? $_GET['search'] : '';

if (!empty($search_query)) {
  $query = "SELECT * FROM education_intake WHERE intake_id = :intake_id";
  $stmt = $connection->prepare($query);
  $stmt->bindParam(':intake_id', $search_query);
  $stmt->execute();
} else {
  $query = "SELECT * FROM education_intake";
  $stmt = $connection->query($query);
}


?>





<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Educational Intake</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="education-intake-form.php">
        <h1>DepEd Intake Sheet</h1>

        <h2>I. INFORMATION:</h2>

        <h3>A. VICTIM:</h3>
        <div class="form-group">
          <label for="victim_name">Name:</label>
          <input type="text" id="victim_name" name="victim_name" class="form-control" placeholder="Enter Name">
        </div>

        <div class="form-group">
          <label for="victim_date_of_birth">Date of Birth:</label>
          <input type="date" id="victim_date_of_birth" name="victim_date_of_birth" class="form-control">
        </div>

        <div class="form-group">
          <label for="victim_age">Age:</label>
          <input type="text" id="victim_age" name="victim_age" class="form-control" placeholder="Enter Age">
        </div>

        <div class="form-group">
          <label for="victim_sex">Sex:</label>
          <select id="victim_sex" name="victim_sex" class="form-control">
            <option value="" disabled selected>Select sex</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>

        <div class="form-group">
          <label for="victim_grade_section">Gr. /Yr. and Section:</label>
          <input type="text" id="victim_grade_section" name="victim_grade_section" class="form-control" placeholder="Enter Grade/Section">
        </div>

        <div class="form-group">
          <label for="victim_adviser">Adviser:</label>
          <input type="text" id="victim_adviser" name="victim_adviser" class="form-control" placeholder="Enter Adviser">
        </div>

        <h4>Parents:</h4>

        <div class="form-group">
          <label for="mother_name">Mother:</label>
          <input type="text" id="mother_name" name="mother_name" class="form-control" placeholder="Enter Mother's Name">
        </div>

        <div class="form-group">
          <label for="mother_age">Age:</label>
          <input type="text" id="mother_age" name="mother_age" class="form-control" placeholder="Enter Mother's Age">
        </div>

        <div class="form-group">
          <label for="mother_occupation">Occupation:</label>
          <input type="text" id="mother_occupation" name="mother_occupation" class="form-control" placeholder="Enter Mother's Occupation">
        </div>

        <div class="form-group">
          <label for="father_name">Father:</label>
          <input type="text" id="father_name" name="father_name" class="form-control" placeholder="Enter Father's Name">
        </div>

        <div class="form-group">
          <label for="father_age">Age:</label>
          <input type="text" id="father_age" name="father_age" class="form-control" placeholder="Enter Father's Age">
        </div>

        <div class="form-group">
          <label for="father_occupation">Occupation:</label>
          <input type="text" id="father_occupation" name="father_occupation" class="form-control" placeholder="Enter Father's Occupation">
        </div>

        <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" id="address" name="address" class="form-control" placeholder="Enter Address">
        </div>

        <div class="form-group">
          <label for="contact_number">Contact Number :</label>
          <input type="text" id="contact_number" name="contact_number" class="form-control" placeholder="Enter Contact Number">
        </div>

        <h3>B. COMPLAINANT:</h3>
        <div class="form-group">
          <label for="complainant_name">Name:</label>
          <input type="text" id="complainant_name" name="complainant_name" class="form-control" placeholder="Enter Name">
        </div>

        <div class="form-group">
          <label for="complainant_relationship">Relationship to Victim:</label>
          <input type="text" id="complainant_relationship" name="complainant_relationship" class="form-control" placeholder="Enter Relationship">
        </div>

        <div class="form-group">
          <label for="complainant_address">Address:</label>
          <input type="text" id="complainant_address" name="complainant_address" class="form-control" placeholder="Enter Address">
        </div>

        <div class="form-group">
          <label for="complainant_contact_number">Contact Number:</label>
          <input type="text" id="complainant_contact_number" name="complainant_contact_number" class="form-control" placeholder="Enter Contact Number">
        </div>

        <h3>C. RESPONDENT:</h3>
        <div class="form-group">
          <label for="respondent_name">Name:</label>
          <input type="text" id="respondent_name" name="respondent_name" class="form-control" placeholder="Enter Name">
        </div>

        <div class="form-group">
          <label for="respondent_date_of_birth">Date of Birth:</label>
          <input type="date" id="respondent_date_of_birth" name="respondent_date_of_birth" class="form-control">
        </div>

        <div class="form-group">
          <label for="respondent_age">Age:</label>
          <input type="text" id="respondent_age" name="respondent_age" class="form-control" placeholder="Enter Age">
        </div>

        <div class="form-group">
          <label for="respondent_sex">Sex:</label>
          <select id="respondent_sex" name="respondent_sex" class="form-control">
            <option value="" disabled selected>Select sex</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>

        <div class="form-group">
          <label for="respondent_position">Designation/Position:</label>
          <input type="text" id="respondent_position" name="respondent_position" class="form-control" placeholder="Enter Designation/Position">
        </div>

        <div class="form-group">
          <label for="respondent_address">Address:</label>
          <input type="text" id="respondent_address" name="respondent_address" class="form-control" placeholder="Enter Address">
        </div>

        <div class="form-group">
          <label for="respondent_contact_number">Contact Number:</label>
          <input type="text" id="respondent_contact_number" name="respondent_contact_number" class="form-control" placeholder="Enter Contact Number">
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>

    </div>
  </div>
</div>

<div class="container-fluid">
  <div class=" card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">All Data
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
          Add Education Intake
        </button>
      </h6>
    </div>

    <div class="card-body">
      <form method="get">
        <div class="form-group">
          <label for="search">Search by ID:</label>
          <input type="text" id="search" name="search" class="form-control" value="<?php echo $search_query; ?>" placeholder="Enter ID">
          <button type="submit" class="btn btn-primary mt-2">Search</button>
        </div>
      </form>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Victim Name</th>
                <th>Date of Birth</th>
                <th>Victim Age</th>
                <th>Victim Sex</th>
                <th>Mother Name</th>
                <th>Mother Age</th>
                <th>Father Name</th>
                <th>Father Age</th>
                <th>Compliant Name</th>
                <th>Compliant Contact Number</th>
                <th>Respondent Name</th>
                <th>Respondent Contact Number</th>
                <th>EDIT</th>
                <th>DELETE</th>
              </tr>
            </thead>
            <tbody id="searchResults">
              <?php
              $query = "SELECT * FROM education_intake";
              $query_run = $connection->query($query); // Using PDO query method

              if ($query_run) {
                while ($row = $query_run->fetch(PDO::FETCH_ASSOC)) {
              ?>
                  <tr>
                    <td class="intake-id"><?php echo $row['intake_id']; ?></td>
                    <td><?php echo $row['victim_name'] ?></td>
                    <td><?php echo $row['victim_date_of_birth']; ?></td>
                    <td><?php echo $row['victim_age']; ?></td>
                    <td><?php echo $row['victim_sex']; ?></td>
                    <td><?php echo $row['mother_name']; ?></td>
                    <td><?php echo $row['mother_age']; ?></td>
                    <td><?php echo $row['father_name']; ?></td>
                    <td><?php echo $row['father_age']; ?></td>
                    <td><?php echo $row['complainant_name']; ?></td>
                    <td><?php echo $row['complainant_contact_number']; ?></td>
                    <td><?php echo $row['respondent_name']; ?></td>
                    <td><?php echo $row['respondent_contact_number']; ?></td>

                    <td>
                      <button type="button" class="btn btn-success edit-btn" data-toggle="modal" data-target="#editButton<?php echo $row['intake_id']; ?>" data-id="<?php echo $row['intake_id']; ?>" data-victim-name="<?php echo $row['victim_name']; ?>" data-dob="<?php echo $row['victim_date_of_birth']; ?>" data-age="<?php echo $row['victim_age']; ?>" data-gender="<?php echo $row['victim_sex']; ?>" data-gs="<?php echo $row['victim_grade_section']; ?>" data-victim-adviser="<?php echo $row['victim_adviser']; ?>" data-mother-name="<?php echo $row['mother_name']; ?>" data-mother-age="<?php echo $row['mother_age']; ?>" data-mother-occupation="<?php echo $row['mother_occupation']; ?>" data-father-name="<?php echo $row['father_name']; ?>" data-father-age="<?php echo $row['father_age']; ?>" data-father-occupation="<?php echo $row['father_occupation']; ?>" data-address="<?php echo $row['address']; ?>" data-contact-number="<?php echo $row['contact_number']; ?>" data-comp-name="<?php echo $row['complainant_name']; ?>" data-comp-relationship="<?php echo $row['complainant_relationship']; ?>" data-comp-address="<?php echo $row['complainant_address']; ?>" data-comp-contact-number="<?php echo $row['complainant_contact_number']; ?>" data-respondent-name="<?php echo $row['respondent_name']; ?>" data-res-dob="<?php echo $row['respondent_date_of_birth']; ?>" data-res-age="<?php echo $row['respondent_age']; ?>" data-res-gender="<?php echo $row['respondent_sex']; ?>" data-respondent-position="<?php echo $row['respondent_position']; ?>" data-respondent-address="<?php echo $row['respondent_address']; ?>" data-res-contact-number="<?php echo $row['respondent_contact_number']; ?>">
                        EDIT
                      </button>

                    </td>
                    <td>
                      <button type="button" class="btn btn-danger delete-btn" data-toggle="modal" data-target="#deleteModal<?php echo $row['intake_id']; ?>">
                        DELETE
                      </button>
                    </td>

                  </tr>

                  <div class="modal fade" id="editButton<?php echo $row['intake_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="editModalLabel">Edit Education Intake Data</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="edit.php" method="post">
                          <div class="modal-body">

                            <h1>Department of Education Intake Sheet</h1>

                            <h2>I. INFORMATION:</h2>

                            <h3>A. VICTIM:</h3>

                            <div class="form-group">
                              <label for="victim_name">Name:</label>
                              <input type="text" id="victim_name" name="victim_name" class="form-control" value="<?php echo $row['victim_name']; ?>">
                            </div>

                            <div class="form-group">
                              <label for="victim_date_of_birth">Date of Birth:</label>
                              <input type="date" id="victim_date_of_birth" name="victim_date_of_birth" class="form-control" value="<?php echo $row['victim_date_of_birth']; ?>">
                            </div>

                            <div class="form-group">
                              <label for="victim_age">Age:</label>
                              <input type="text" id="victim_age" name="victim_age" class="form-control" value="<?php echo $row['victim_age']; ?>">
                            </div>

                            <div class="form-group">
                              <label for="victim_sex">Sex:</label>
                              <select id="victim_sex" name="victim_sex" class="form-control">
                                <option value="" disabled>Select sex</option>
                                <option value="male" <?php echo ($row['victim_sex'] == 'male') ? 'selected' : ''; ?>>Male</option>
                                <option value="female" <?php echo ($row['victim_sex'] == 'female') ? 'selected' : ''; ?>>Female</option>
                              </select>
                            </div>

                            <div class="form-group">
                              <label for="victim_grade_section">Gr. /Yr. and Section:</label>
                              <input type="text" id="victim_grade_section" name="victim_grade_section" class="form-control" value="<?php echo $row['victim_grade_section']; ?>">
                            </div>

                            <div class="form-group">
                              <label for="victim_adviser">Adviser:</label>
                              <input type="text" id="victim_adviser" name="victim_adviser" class="form-control" value="<?php echo $row['victim_adviser']; ?>">
                            </div>

                            <h4>Parents:</h4>

                            <div class="form-group">
                              <label for="mother_name">Mother:</label>
                              <input type="text" id="mother_name" name="mother_name" class="form-control" value="<?php echo $row['mother_name']; ?>">
                            </div>

                            <div class="form-group">
                              <label for="mother_age">Age:</label>
                              <input type="text" id="mother_age" name="mother_age" class="form-control" value="<?php echo $row['mother_age']; ?>">
                            </div>

                            <div class="form-group">
                              <label for="mother_occupation">Occupation:</label>
                              <input type="text" id="mother_occupation" name="mother_occupation" class="form-control" value="<?php echo $row['mother_occupation']; ?>">
                            </div>

                            <div class="form-group">
                              <label for="father_name">Father:</label>
                              <input type="text" id="father_name" name="father_name" class="form-control" value="<?php echo $row['father_name']; ?>">
                            </div>

                            <div class="form-group">
                              <label for="father_age">Age:</label>
                              <input type="text" id="father_age" name="father_age" class="form-control" value="<?php echo $row['father_age']; ?>">
                            </div>

                            <div class="form-group">
                              <label for="father_occupation">Occupation:</label>
                              <input type="text" id="father_occupation" name="father_occupation" class="form-control" value="<?php echo $row['father_occupation']; ?>">
                            </div>

                            <div class="form-group">
                              <label for="address">Address:</label>
                              <input type="text" id="address" name="address" class="form-control" value="<?php echo $row['address']; ?>">
                            </div>

                            <div class="form-group">
                              <label for="contact_number">Contact Number:</label>
                              <input type="text" id="contact_number" name="contact_number" class="form-control" value="<?php echo $row['contact_number']; ?>">
                            </div>

                            <h3>B. COMPLAINANT:</h3>

                            <div class="form-group">
                              <label for="complainant_name">Name:</label>
                              <input type="text" id="complainant_name" name="complainant_name" class="form-control" value="<?php echo $row['complainant_name']; ?>">
                            </div>

                            <div class="form-group">
                              <label for="complainant_relationship">Relationship to Victim:</label>
                              <input type="text" id="complainant_relationship" name="complainant_relationship" class="form-control" value="<?php echo $row['complainant_relationship']; ?>">
                            </div>

                            <div class="form-group">
                              <label for="complainant_address">Address:</label>
                              <input type="text" id="complainant_address" name="complainant_address" class="form-control" value="<?php echo $row['complainant_address']; ?>">
                            </div>

                            <div class="form-group">
                              <label for="complainant_contact_number">Contact Number:</label>
                              <input type="text" id="complainant_contact_number" name="complainant_contact_number" class="form-control" value="<?php echo $row['complainant_contact_number']; ?>">
                            </div>

                            <h3>C. RESPONDENT:</h3>

                            <div class="form-group">
                              <label for="respondent_name">Name:</label>
                              <input type="text" id="respondent_name" name="respondent_name" class="form-control" value="<?php echo $row['respondent_name']; ?>">
                            </div>

                            <div class="form-group">
                              <label for="respondent_date_of_birth">Date of Birth:</label>
                              <input type="date" id="respondent_date_of_birth" name="respondent_date_of_birth" class="form-control" value="<?php echo $row['respondent_date_of_birth']; ?>">
                            </div>

                            <div class="form-group">
                              <label for="respondent_age">Age:</label>
                              <input type="text" id="respondent_age" name="respondent_age" class="form-control" value="<?php echo $row['respondent_age']; ?>">
                            </div>

                            <div class="form-group">
                              <label for="respondent_sex">Sex:</label>
                              <select id="respondent_sex" name="respondent_sex" class="form-control">
                                <option value="" disabled>Select sex</option>
                                <option value="male" <?php echo ($row['respondent_sex'] == 'male') ? 'selected' : ''; ?>>Male</option>
                                <option value="female" <?php echo ($row['respondent_sex'] == 'female') ? 'selected' : ''; ?>>Female</option>
                              </select>
                            </div>

                            <div class="form-group">
                              <label for="respondent_position">Designation/Position:</label>
                              <input type="text" id="respondent_position" name="respondent_position" class="form-control" value="<?php echo $row['respondent_position']; ?>">
                            </div>

                            <div class="form-group">
                              <label for="respondent_address">Address:</label>
                              <input type="text" id="respondent_address" name="respondent_address" class="form-control" value="<?php echo $row['respondent_address']; ?>">
                            </div>

                            <div class="form-group">
                              <label for="respondent_contact_number">Contact Number:</label>
                              <input type="text" id="respondent_contact_number" name="respondent_contact_number" class="form-control" value="<?php echo $row['respondent_contact_number']; ?>">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <input type="hidden" id="edit_id" name="edit_id" value="<?php echo $row['intake_id']; ?>">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="edit_btn" class="btn btn-primary">Save</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>


                  <div class="modal fade" id="deleteModal<?php echo $row['intake_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="deleteModalLabel">Delete Student Data</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Are you sure you want to delete this student?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <button type="button" class="btn btn-danger confirm-delete" data-intake-id="<?php echo $row['intake_id']; ?>">Delete</button>
                        </div>
                      </div>
                    </div>
                  </div>

              <?php
                }
              } else {
                echo "Error in query: " . $connection->errorInfo()[2];
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <script>
    $(document).ready(function() {
      // Handle confirmation modal
      $('.delete-btn').click(function() {
        var intakeId = $(this).data('intake_id');
        $('.confirm-delete').attr('data-intake-id', studentId);
      });

      // Handle delete confirmation
      $('.confirm-delete').click(function() {
        var intakeId = $(this).data('intake-id');
        $.ajax({
          url: 'delete.php',
          type: 'POST',
          data: {
            delete_btn: true,
            delete_id: intakeId
          },
          success: function() {
            // Reload the page or update the table using JavaScript
            location.reload(); // Reloads the current page
          },
          error: function(error) {
            console.log('Error:', error);
            // Handle error as needed
          }
        });
      });
    });

    // Real-time search functionality
    document.getElementById('search').addEventListener('input', function() {
      const searchTerm = this.value.toLowerCase();
      const tableRows = document.querySelectorAll('#searchResults tr');

      tableRows.forEach(row => {
        const intake_id = row.querySelector('.intake-id').textContent.toLowerCase();


        if (intake_id.includes(searchTerm)) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      });
    });
  </script>



  <?php
  include('includes/scripts.php');
  include('includes/footer.php');
  ?>