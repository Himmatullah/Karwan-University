
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Management System | Dashboard</title>
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
            <a href="login.html" class="logout-btn">Logout</a>
        </div>
    </header>

    <div class="layout">

        <aside class="sidebar">
            <h3>MAIN MENU</h3>

            <a href="dashboard.html" class="nav-link active">
                Dashboard
            </a>

            <a href="students.html" class="nav-link">
                Students
            </a>

            <a href="teachers.html" class="nav-link">
                Teachers
            </a>

            <a href="departments.php" class="nav-link">
                Departments
            </a>

            <a href="courses.html" class="nav-link">
                Courses
            </a>

            <a href="enrollment.html" class="nav-link">
                Enrollment
            </a>
        </aside>

        <main class="main-content">

            <div class="page-heading">
                <div>
                    <h1>Dashboard</h1>
                    <p>Welcome to the University Management System.</p>
                </div>

                <span class="date-label">Academic Administration</span>
            </div>

            <section class="stats-grid">

                <div class="stat-card">
                    <div class="stat-icon students-icon">S</div>
                    <p>Total Students</p>
                    <h2>0</h2>
                    <span>Registered students</span>
                </div>

                <div class="stat-card">
                    <div class="stat-icon teachers-icon">T</div>
                    <p>Total Teachers</p>
                    <h2>0</h2>
                    <span>Registered teachers</span>
                </div>

                <div class="stat-card">
                    <div class="stat-icon courses-icon">C</div>
                    <p>Total Courses</p>
                    <h2>0</h2>
                    <span>Available courses</span>
                </div>

                <div class="stat-card">
                    <div class="stat-icon departments-icon">D</div>
                    <p>Departments</p>
                    <h2>0</h2>
                    <span>Academic departments</span>
                </div>

            </section>

            <section class="content-card">
                <div class="section-heading">
                    <div>
                        <h2>Quick Actions</h2>
                        <p>Choose a module to manage university records.</p>
                    </div>
                </div>

                <div class="actions-grid">
                    <a href="students.html" class="action-card">
                        <span class="action-icon">+</span>
                        <h3>Manage Students</h3>
                        <p>Register and maintain student records.</p>
                    </a>

                    <a href="teachers.html" class="action-card">
                        <span class="action-icon">+</span>
                        <h3>Manage Teachers</h3>
                        <p>Maintain teacher information.</p>
                    </a>

                    <a href="departments.html" class="action-card">
                        <span class="action-icon">+</span>
                        <h3>Manage Departments</h3>
                        <p>Organize academic departments.</p>
                    </a>

                    <a href="courses.html" class="action-card">
                        <span class="action-icon">+</span>
                        <h3>Manage Courses</h3>
                        <p>Maintain courses and credit hours.</p>
                    </a>

                    <a href="enrollment.html" class="action-card">
                        <span class="action-icon">+</span>
                        <h3>Manage Enrollment</h3>
                        <p>Enroll students in courses.</p>
                    </a>
                </div>
            </section>

            <footer class="dashboard-footer">
                University Management System &copy; 2026
            </footer>

        </main>
    </div>

</body>
</html>