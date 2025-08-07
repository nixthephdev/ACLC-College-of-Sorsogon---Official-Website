# ACLC College of Sorsogon - Official Website

[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://javascript.com/)

A comprehensive web application for ACLC College of Sorsogon, providing information about courses, admissions, news updates, and student services. This platform serves as the digital gateway for prospective and current students to access college information and services.

## 🏫 About ACLC College of Sorsogon

ACLC College of Sorsogon, formerly known as AMA Computer Learning Center of Sorsogon, has been providing trusted quality IT-based education in Sorsogon for more than 25 years. Starting as a vocational institution in June 1998 with 298 students, it has evolved into a Higher Education Institution offering both degree and vocational-technical programs.

## ✨ Features

### 🎓 Academic Information
- **Course Offerings**: Detailed information about College, Senior High School, and Ladderized Programs
- **Admissions System**: Comprehensive admission requirements and processes
- **Pre-Registration**: Online pre-registration form for prospective students

### 📰 Content Management
- **News & Updates**: Dynamic news and events management system
- **Carousel Management**: Homepage banner and image carousel system
- **About Us**: Institutional information and organizational chart

### 🤖 Interactive Features
- **AI Chatbot**: Intelligent chatbot for student inquiries and support
- **Contact System**: Contact forms and location information
- **Social Media Integration**: Facebook page integration

### 👨‍💼 Administrative Panel
- **Dashboard**: Overview of system statistics and metrics
- **User Management**: Admin user accounts and permissions
- **Content Editor**: WYSIWYG editors for managing website content
- **Submissions Management**: Handle pre-registration and contact form submissions
- **Email Management**: Newsletter and communication system

## 🛠️ Technology Stack

### Backend
- **PHP 7.4+**: Server-side scripting
- **MySQL**: Database management
- **XAMPP**: Local development environment

### Frontend
- **HTML5 & CSS3**: Structure and styling
- **Bootstrap 4**: Responsive framework
- **JavaScript & jQuery**: Interactive functionality
- **AOS (Animate On Scroll)**: Scroll animations
- **Owl Carousel**: Image carousels and sliders

### Additional Libraries
- **Font Awesome**: Icons
- **Flaticon**: Custom icons
- **Magnific Popup**: Lightbox functionality
- **jQuery UI**: Enhanced user interface components

## 📋 System Requirements

- **Web Server**: Apache 2.4+
- **PHP**: 7.4 or higher
- **MySQL**: 5.7 or higher
- **Browser**: Modern browsers (Chrome, Firefox, Safari, Edge)

## 🚀 Installation

### Prerequisites
1. Install [XAMPP](https://www.apachefriends.org/index.html) or similar local server environment
2. Ensure PHP and MySQL are running

### Setup Instructions

1. **Clone the repository**
   ```bash
   git clone https://github.com/nixthephdev/aclc-college-website.git
   cd aclc-college-website
   ```

2. **Database Setup**
   - Start Apache and MySQL in XAMPP Control Panel
   - Open phpMyAdmin (http://localhost/phpmyadmin)
   - Create a new database named `aclcdb`
   - Import the database structure from `includes/aclcdb-25.sql`

3. **Configuration**
   - Update database connection settings in `includes/database.php` if needed:
   ```php
   $conn = mysqli_connect("localhost", "root", "", "aclcdb");
   ```

4. **File Permissions**
   - Ensure write permissions for upload directories:
     - `admin/carousel_config/carousel_images/`
     - `admin/newsupdates_config/newsupdates_thumbnail/`
     - `admin/aboutus_config/aboutus_chart/`

5. **Access the Application**
   - Frontend: `http://localhost/aclc/`
   - Admin Panel: `http://localhost/aclc/admin/`

## 📱 Usage

### For Visitors
1. **Browse Courses**: View available programs in College, Senior High, and Ladderized categories
2. **Pre-Registration**: Fill out the online pre-registration form
3. **News & Updates**: Stay informed about college events and announcements
4. **Contact**: Use the contact form or chatbot for inquiries

### For Administrators
1. **Login**: Access the admin panel with your credentials
2. **Dashboard**: Monitor system statistics and recent activities
3. **Content Management**: Update course information, news, and website content
4. **User Management**: Manage admin accounts and permissions
5. **Submissions**: Review and process pre-registration applications

## 🗂️ Project Structure

```
aclc/
├── admin/                          # Administrative panel
│   ├── assets/                     # Admin assets (CSS, JS, images)
│   ├── includes/                   # Admin configuration files
│   ├── *_config/                   # Feature-specific configurations
│   └── *.php                       # Admin pages
├── css/                            # Stylesheets
├── js/                             # JavaScript files
├── images/                         # Image assets
├── includes/                       # Core configuration files
├── fonts/                          # Font files
├── scss/                           # SASS source files
├── notes/                          # Development notes
├── up/                             # Upload utilities
└── *.php                           # Main application pages
```

## 🔧 Key Components

### Database Tables
- `newsupdates`: News and events management
- `courses`: Course information and offerings
- `carousel_contents`: Homepage carousel images
- `user`: Administrative users
- `submissions`: Contact form submissions
- `prereg`: Pre-registration applications

### Main Pages
- `index.php`: Homepage with course overview
- `courses-*.php`: Course information pages
- `*-admissions.php`: Admission requirements
- `pre-registration.php`: Student pre-registration
- `contact.php`: Contact information and form
- `talkbot.php`: AI chatbot interface

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 Development Notes

- The project uses session-based authentication for admin access
- All user inputs are sanitized to prevent SQL injection
- Responsive design ensures compatibility across devices
- The chatbot system uses keyword matching for automated responses
- File uploads are handled securely with proper validation

## 🐛 Known Issues

- Ensure proper file permissions for upload directories
- Database connection settings may need adjustment based on server configuration
- Some features require JavaScript to be enabled

## 📞 Support & Contact

- **Developer**: [nixthephdev](https://github.com/nixthephdev)
- **Institution**: ACLC College of Sorsogon
- **Facebook**: [ACLC College Sorsogon Campus](https://www.facebook.com/aclccollegesorsogon)

## 📄 License

This project is developed for ACLC College of Sorsogon. All rights reserved.

---

**ACLC College of Sorsogon** - *Trusted quality IT-based education in Sorsogon for more than 25 years.*

## 🔄 Version History

- **v1.0**: Initial release with core functionality
- **v1.1**: Added chatbot integration
- **v1.2**: Enhanced admin panel features
- **v1.3**: Improved responsive design and user experience

## 🎯 Future Enhancements

- [ ] Online payment integration for fees
- [ ] Student portal with grade viewing
- [ ] Mobile application development
- [ ] Advanced analytics and reporting
- [ ] Multi-language support
- [ ] Enhanced security features

---

*For technical support or inquiries about this project, please contact the development team or visit the official ACLC College of Sorsogon website.*
