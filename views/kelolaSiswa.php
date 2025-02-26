<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Add New Student</title>
  <!-- Bootstrap CSS from CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Optional: add a border between columns */
    .form-section {
      border-right: 1px solid #dee2e6;
    }
    .form-section:last-child {
      border-right: none;
    }
  </style>
</head>
<body class="d-flex justify-content-center align-items-center" style="height: 100vh;">
  <div class="container mt-2">
    <h2 class="mb-4 text-center">Add New Student</h2>
    <form method="POST" action="../controller/insert.php">
        <div class="row">
            <div class="col-md-6 form-section">
                <h4>Personal Info</h4>
                <div class="mb-3">
                    <label for="firstName" class="form-label">NIM</label>
                    <input type="number" class="form-control" id="nim" name="nim" placeholder="001" required>
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="namaMahasiswa" name="namaMahasiswa" placeholder="John" required>
                </div>
                <div class="mb-3">
                    <label for="dob" class="form-label">Jurusan</label>
                    <input type="number" class="form-control" id="jurusan" name="jurusan" required>
                </div>
            </div>
        </div>
      <div class="mt-4 text-end">
        <button type="submit" class="btn btn-success">Add Student</button>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JavaScript for UI and Form Validation -->
  <script>
    // Basic client-side form validation
    document.getElementById('addStudentForm').addEventListener('submit', function(event) {
      let valid = true;
      const fields = document.querySelectorAll('#addStudentForm input, #addStudentForm select, #addStudentForm textarea');

      fields.forEach(field => {
        // If the field is empty, mark it as invalid
        if (!field.value.trim()) {
          field.classList.add('is-invalid');
          valid = false;
        } else {
          field.classList.remove('is-invalid');
        }
      });

      if (!valid) {
        event.preventDefault();
        alert('Please fill in all required fields.');
      }
    });
  </script>
</body>
</html>
