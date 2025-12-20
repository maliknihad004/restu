<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Restaurant Recommendation</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <style>
    body { background-color: #f8f9fa; }
    .navbar-brand strong { color: #0d6efd; }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="#">
      <strong>Restaurant Finder </strong>
    </a>
  </div>
</nav>

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
          Find the Best Restaurant 🍽️
        </div>

        <div class="card-body">

          <form method="POST" class="d-flex">
            <input
              type="text"
              name="meal"
              class="form-control me-2"
              placeholder="Enter your favorite meal"
              required
            />
            <button type="submit" class="btn btn-primary">Search</button>
          </form>

          <hr />

          <?php

          if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['meal'])) {

            $meal = trim($_POST['meal']);

            $stmt = $conn->prepare("SELECT best_restaurant FROM restaurant WHERE meal = ?");
            
            if (!$stmt) {
              echo "<div class='alert alert-danger'><strong>Error preparing statement:</strong> " . htmlspecialchars($conn->error) . "</div>";
              exit;
            }

            $stmt->bind_param("s", $meal);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              echo "<p><strong>Recommended Restaurant:</strong> " . htmlspecialchars($row['best_restaurant']) . "</p>";
            } else {
              echo "<div class='alert alert-info'>No recommendation found for <strong>" . htmlspecialchars($meal) . "</strong>.</div>";
            }

            $stmt->close();
          }
          ?>

        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
