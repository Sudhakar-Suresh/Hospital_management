
# Hospital Management System

A web-based Hospital Management System built primarily using PHP, CSS, and JavaScript. This project aims to automate hospital operations and facilitate interactions among administrators, doctors, and patients.

## Features

- **Role-based Dashboards:** Separate dashboards for administrators, doctors, and patients.
- **User Authentication:** Secure login for admin, doctor, and patient accounts.
- **Doctor Management:** Add, view, and manage doctor profiles.
- **Patient Management:** Add, view, and manage patient records.
- **Appointment Scheduling:** Patients can book appointments; doctors and admins can manage schedules.
- **Prescription Handling:** Doctors can prescribe medications to patients.
- **Account Settings:** Users can manage profiles and delete accounts.
- **Logout Functionality:** Secure session management and logout for all users.

## Technologies Used

- **Backend:** PHP
- **Frontend:** HTML, CSS (animations, main, admin styles), JavaScript
- **Database:** MySQL (imported in PHP scripts)
- **Other:** Font Awesome, Swiper.js

## Installation

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/Sudhakar-Suresh/Hospital_management.git
   ```

2. **Set Up the Database:**
   - Create a MySQL database and import the required tables (see `connection.php` for details).
   - Update database connection settings in `connection.php`.

3. **Run the Application:**
   - Place the project files in your web server's root directory (e.g., `htdocs` for XAMPP).
   - Access `index.php` via your browser.

## Usage

- **Admin:** Can log in, manage doctors and patients, view appointments and schedules.
- **Doctor:** Can access the dashboard, view appointments and sessions, prescribe medication.
- **Patient:** Can book appointments, view doctors, manage profile, and delete account if needed.

Each section (admin, doctor, patient) has its own PHP scripts and UI tailored to its user type. Ensure sessions are active for security; unauthorized access redirects to login.

## License

This project is licensed under the [MIT License](LICENSE).

## Author

- [Sudhakar Suresh](https://github.com/Sudhakar-Suresh)

---
