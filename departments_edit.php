<?php
     require_once ("./config/connection.php");
     
     // Get the department ID from the URL
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if (!$id || $id < 1) {
            header("Location: departments.php");
            exit;
        }

        $query = mysqli_query($conn, "SELECT * FROM departments where DepartmentsID=$id");

        $result = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Management System | Edit Department</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="topbar">
        <div class="brand">
            <div class="brand-icon">U</div>
            <div>
                <h2>University Portal</h2>
                <p>Management System</p>
            </div>
        </div>

        <div class="user-section">
            <span>Administrator</span>
            <a href="index.php" class="logout-btn">Logout</a>
        </div>
    </header>

    <div class="layout">

        <aside class="sidebar">
            <h3>MAIN MENU</h3>
            <a href="main.php" class="nav-link">Dashboard</a>
            <a href="students.html" class="nav-link">Students</a>
            <a href="teachers.html" class="nav-link">Teachers</a>
            <a href="departments.php" class="nav-link active">Departments</a>
            <a href="courses.html" class="nav-link">Courses</a>
            <a href="enrollment.html" class="nav-link">Enrollment</a>
        </aside>

        <main class="main-content">

            <div class="page-heading">
                <div>
                    <h1>Edit Department</h1>
                    <p>Update the academic department information.</p>
                </div>
                <span class="date-label">Department Management</span>
            </div>

            <section class="content-card">
                <div class="section-heading">
                    <h2>Department Information</h2>
                    <p>Modify the information below and save your changes.</p>
                </div>
                <form action="edit.php?id=<?php echo $id; ?>" method="POST">

                    <div class="form-group">
                        <label for="departmentName">Department Name</label>
                        <input
                            type="text"
                            id="departmentName"
                            name="departmentName"
                            value="<?php echo $result['description']; ?>"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea
                            id="description"
                            name="description"
                            rows="4"
                        ></textarea>
                    </div>

                    <button type="submit" name="submit" class="btn-primary">
                        Update Department
                    </button>
                </form>
            </section>

            <footer class="dashboard-footer">
                University Management System &copy; 2026
            </footer>

        </main>
    </div>

</body>
</html>