Connect – Institute Management System

Project: Connect
Institution: Institute of Engineering & Management, Kolkata
Type: Web-based Student-Faculty-Admin Management System
Status: MVP Completed

Table of Contents

Project Overview

Features

System Roles

Database Structure

Installation

Usage

File Structure

Future Enhancements

License

Project Overview

Connect is a comprehensive web-based platform designed for the Institute of Engineering & Management, Kolkata to manage students, faculty, admins, attendance, marks, events, collaborations, doubts, notifications, reports, permissions, and database tools.

This MVP allows seamless interaction between students, faculty, and admin, ensuring efficient academic and administrative workflows.

Features
Student

View personal attendance and marks.

Participate in collaborations and post doubts.

Access notifications and event details.

Download data reports.

Faculty

Mark attendance and add/edit marks.

Post collaborations and answer student doubts.

Manage events.

View analytics and generate CSV reports.

Access notifications.

Admin

User management for students, faculty, and other admins.

Content moderation for resources and posts.

Event management and control.

Generate reports (attendance, marks, doubts, activity logs).

Permissions management for role-based access.

Database tools: backup, restore, and maintenance.

System Roles
Role	Description
Student	Access personal data, submit doubts, view collaborations/events.
Faculty	Manage attendance, marks, events, collaborations, and doubts.
Admin	Full system control including users, content, events, reports, permissions, and database tools.
Database Structure

The system uses MySQL. Key tables include:

students – student information

faculty – faculty information

admins – admin accounts

attendance – student attendance records

marks – exam marks and scores

events – campus events

event_registrations – student participation

resources – uploaded materials

doubts – student doubts

collaboration – collaboration posts

notifications – messages for users

feedback – event feedback

Installation

Requirements

XAMPP / LAMP / WAMP stack

PHP 8.x

MySQL 8.x

Modern browser

Setup

Clone or download the repository into htdocs (XAMPP) or your server root.

Import connect_db.sql into MySQL.

Update database connection details in includes/db.php.

Access the system via http://localhost/connect/.

Default Accounts

Admin: superadmin@connect.com / password123
(Modify in database as needed)

Usage

Login

Admins: Access admin_login.php

Faculty: Access faculty_login.php

Students: Access student_login.php

Dashboards

Each role has a dedicated dashboard with respective features.

Reports & Analytics

Admin and faculty can download CSV reports and view charts for individual students.

Data Management

Admins can backup or restore the database using database tools.

Inline edit/delete functionality available for marks, attendance, doubts, and user management.

File Structure
connect/
│
├── admin/
│   ├── dashboard.php
│   ├── user_management.php
│   ├── content_moderation.php
│   ├── reports.php
│   ├── event_control.php
│   ├── permissions.php
│   └── db_tools.php
│
├── faculty/
│   ├── dashboard.php
│   ├── attendance.php
│   ├── marks.php
│   ├── events.php
│   └── collaboration_doubts.php
│
├── student/
│   ├── dashboard.php
│   ├── attendance.php
│   ├── marks.php
│   ├── events.php
│   └── collaboration.php
│
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── db.php
│
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
│
└── index.php