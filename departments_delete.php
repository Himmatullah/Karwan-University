<?php
require_once("config/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Management System | Delete Department</title>
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
                    <h1>Delete Department</h1>
                    <p>Review the department before deleting it.</p>
                </div>
                <span class="date-label">Department Management</span>
            </div>

            <section class="content-card">
                <div class="section-heading">
                    <h2>Confirm Deletion</h2>
                    <p>This action will permanently delete the department.</p>
                </div>

                <div class="form-group">
                    <label>Department Name</label>
                    <p>
                    </p>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <p style="white-space: pre-wrap;"></p>
                </div>

                <form action="delete.php?id=<?php echo $id; ?>" method="POST">
                    <button
                        type="submit"
                        name="submit"
                        class="btn-primary"
                        style="background-color: #dc2626; border-color: #dc2626;"
                    >
                        Yes, Delete Department
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