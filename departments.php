<?php
//connection
        require_once("config/connection.php");
// submit click
        if ( isset($_POST['submit'])){
//variable data capture
            $departmentName = $_POST['departmentName'];
            $description = $_POST['description'];
//database connection, send your query to the database
            $query = mysqli_query($conn, "
                INSERT INTO departments(DepartmentName,Description)
                values('$departmentName','$description')	
            ");

            // success
            if ( $query ){
                //departments, ?success=inserted 
                header("Location: departments.php?success=inserted");
            }else{
                header("Location: departments.php?error=NotInserted");
            }

        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Management System | Departments</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Top Navigation -->
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

        <!-- Sidebar -->
        <aside class="sidebar">
            <h3>MAIN MENU</h3>

            <a href="main.php" class="nav-link">
                Dashboard
            </a>

            <a href="students.html" class="nav-link">
                Students
            </a>

            <a href="teachers.html" class="nav-link">
                Teachers
            </a>

            <a href="departments.php" class="nav-link active">
                Departments
            </a>

            <a href="courses.html" class="nav-link">
                Courses
            </a>

            <a href="enrollment.html" class="nav-link">
                Enrollment
            </a>
        </aside>

        <!-- Main Content -->
        <main class="main-content">

            <div class="page-heading">
                <div>
                    <h1>Departments</h1>
                    <p>Manage university academic departments.</p>
                </div>

                <span class="date-label">Department Management</span>
            </div>

            <!-- Department Form -->
            <section class="content-card">
                <div class="section-heading">
                    <h2>Add New Department</h2>
                    <p>Enter the department information below.</p>
                </div>

                <form action="#" method="POST">

                    <div class="form-group">
                        <label for="departmentName">Department Name</label>
                        <input
                            type="text"
                            id="departmentName"
                            name="departmentName"
                            placeholder="e.g. Computer Science"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea
                            id="description"
                            name="description"
                            rows="4"
                            placeholder="Enter department description"
                        ></textarea>
                    </div>

                    <button type="submit" name='submit' class="btn-primary">
                        Add Department
                    </button>

                </form>
            </section>

            <!-- Department List -->
            <section class="content-card" style="margin-top: 25px;">

                <div class="section-heading">
                    <h2>Department List</h2>
                    <p>View and manage existing departments.</p>
                </div>

                <div class="form-group">
                    <label for="searchDepartment">Search Departments</label>
                    <input
                        type="search"
                        id="searchDepartment"
                        placeholder="Search by department name..."
                    >
                </div>

                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse; text-align: left;">
                        <thead>
                            <tr style="background-color: #f4f7fb;">
                                <th style="padding: 14px; border-bottom: 1px solid #e3e9f1;">ID</th>
                                <th style="padding: 14px; border-bottom: 1px solid #e3e9f1;">Department Name</th>
                                <th style="padding: 14px; border-bottom: 1px solid #e3e9f1;">Description</th>
                                <th style="padding: 14px; border-bottom: 1px solid #e3e9f1;">Actions</th>
                            </tr>
                        </thead>
<?php
    $query = "SELECT * FROM departments";
    $rows = mysqli_query($conn, $query);

    while( $result = mysqli_fetch_assoc($rows)){
?>
                        <tbody>
                            <tr>
                               <td style="padding: 14px; border-bottom: 1px solid #e3e9f1;"><?php echo $result['DepartmentID'];?></td>

                                <td style="padding: 14px; border-bottom: 1px solid #e3e9f1;"><?php echo $result['DepartmentName'];?></td>

                                <td style="padding: 14px; border-bottom: 1px solid #e3e9f1;"><?php echo $result['Description'];?></td>

                                <td style="padding: 14px; border-bottom: 1px solid #e3e9f1;">
                                <a href="departments_edit.php?id=<?php echo $result['DepartmentID']; ?>">Edit</a> |
                                <a href="departments_delete.php?id=<?php echo $result['DepartmentID']; ?>">Delete</a>
                                </td>
                            </tr>
                        </tbody>
    <?php } ;?>
                    </table>
                </div>

            </section>

            <footer class="dashboard-footer">
                University Management System &copy; 2026
            </footer>

        </main>
    </div>

</body>
</html>