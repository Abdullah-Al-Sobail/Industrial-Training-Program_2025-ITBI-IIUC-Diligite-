# **FULL PROJECT PLAN – Multi-Vendor E-commerce Platform (Core PHP)**

---

## **1. Project Overview**

**Title:** Multi-Vendor E-commerce Platform
**Technologies:** PHP (core), MySQL, HTML, CSS, JS, Bootstrap
**Team Size:** 40 students
**Objective:** Simulate a real software company workflow, producing a **production-ready website**.

**Modules:**

1. Authentication & User Management
2. Vendor Management
3. Customer Module
4. Order & Payment System
5. Admin Panel & Analytics
6. Frontend/UI
7. Security & Code Quality
8. QA & Testing
9. Database Management
10. Deployment & Documentation

---

## **2. Detailed Team & Student Task Distribution**

### **Team 1: Authentication & User Management (6 Students)**

| Student | Task / Feature                              | File / Module                    |
| ------- | ------------------------------------------- | -------------------------------- |
| 1       | Customer registration form, validate input  | `auth/register.php`              |
| 2       | Login page, session creation, role check    | `auth/login.php`                 |
| 3       | Logout functionality                        | `auth/logout.php`                |
| 4       | Password reset (dummy OTP/email simulation) | `auth/reset_password.php`        |
| 5       | Profile update page                         | `auth/profile.php`               |
| 6       | Authentication controller functions         | `controllers/AuthController.php` |

---

### **Team 2: Vendor Management (7 Students)**

| Student | Task / Feature                 | File / Module                      |
| ------- | ------------------------------ | ---------------------------------- |
| 7       | Vendor dashboard UI            | `vendor/dashboard.php`             |
| 8       | Add product page, image upload | `vendor/add_product.php`           |
| 9       | Edit product details           | `vendor/edit_product.php`          |
| 10      | Delete products & manage stock | `vendor/delete_product.php`        |
| 11      | Manage product categories      | `vendor/manage_categories.php`     |
| 12      | Vendor sales report page       | `vendor/sales_report.php`          |
| 13      | Vendor controller functions    | `controllers/VendorController.php` |

---

### **Team 3: Customer Module (6 Students)**

| Student | Task / Feature                      | File / Module                        |
| ------- | ----------------------------------- | ------------------------------------ |
| 14      | Product catalog page                | `customer/shop.php`                  |
| 15      | Product details page                | `customer/product_detail.php`        |
| 16      | Cart page – add/remove/update items | `customer/cart.php`                  |
| 17      | Checkout page (create order)        | `customer/checkout.php`              |
| 18      | Order history page                  | `customer/orders.php`                |
| 19      | Customer controller functions       | `controllers/CustomerController.php` |

---

### **Team 4: Order & Payment System (6 Students)**

| Student | Task / Feature                                    | File / Module                     |
| ------- | ------------------------------------------------- | --------------------------------- |
| 20      | Create order & order_items insertion              | `order/create_order.php`          |
| 21      | Update order status (pending → shipped/delivered) | `order/update_status.php`         |
| 22      | View order details                                | `order/view_order.php`            |
| 23      | Payment simulation (COD/online)                   | `order/payment.php`               |
| 24      | Invoice generation page                           | `order/invoice.php`               |
| 25      | Order controller functions                        | `controllers/OrderController.php` |

---

### **Team 5: Admin Panel & Analytics (6 Students)**

| Student | Task / Feature                  | File / Module                     |
| ------- | ------------------------------- | --------------------------------- |
| 26      | Admin dashboard UI with stats   | `admin/dashboard.php`             |
| 27      | Approve/reject vendors          | `admin/manage_vendors.php`        |
| 28      | Manage customers & roles        | `admin/manage_customers.php`      |
| 29      | Manage categories globally      | `admin/manage_categories.php`     |
| 30      | View all orders & change status | `admin/manage_orders.php`         |
| 31      | Admin controller functions      | `controllers/AdminController.php` |

---

### **Team 6: Frontend/UI Team (6 Students)**

| Student | Task / Feature                     | File / Module                                             |
| ------- | ---------------------------------- | --------------------------------------------------------- |
| 32      | Home page design & carousel        | `views/home.php`                                          |
| 33      | Product listing UI & search filter | `views/products.php`                                      |
| 34      | Product details page styling       | `views/product_detail.php`                                |
| 35      | Cart & checkout UI design          | `views/cart_checkout.php`                                 |
| 36      | Vendor & Admin dashboard styling   | `views/vendor_dashboard.php`, `views/admin_dashboard.php` |
| 37      | Custom CSS & JS files              | `assets/css/style.css`, `assets/js/main.js`               |

---

### **Team 7: Security & Code Quality (4 Students)**

| Student | Task / Feature                               | File / Module                           |
| ------- | -------------------------------------------- | --------------------------------------- |
| 38      | Input sanitization & validation functions    | `functions.php`                         |
| 39      | SQL injection prevention with PDO            | `functions.php` + controller methods    |
| 40      | XSS prevention & session security            | `functions.php` + login/session modules |
| -       | Password hashing & secure session management | `functions.php` + `AuthController.php`  |

> **Note:** Security team reviews all modules, not just files listed.

---

### **Team 8: QA & Testing (4 Students)**

| Student | Task / Feature                                  | File / Module    |
| ------- | ----------------------------------------------- | ---------------- |
| QA1     | Manual testing: login, registration, order flow | All modules      |
| QA2     | Test vendor management & product CRUD           | Vendor modules   |
| QA3     | Test customer features & cart flow              | Customer modules |
| QA4     | Cross-browser/device testing, document bugs     | All modules      |

---

### **Team 9: Database Management (3 Students)**

| Student | Task / Feature                            | File / Module |
| ------- | ----------------------------------------- | ------------- |
| DB1     | Database schema design & ER diagram       | MySQL         |
| DB2     | Write queries: joins, aggregates, reports | MySQL         |
| DB3     | Optimize tables & queries for performance | MySQL         |

---

### **Team 10: Deployment & Documentation (2 Students)**

| Student | Task / Feature                                        | File / Module   |
| ------- | ----------------------------------------------------- | --------------- |
| DevOps1 | Hosting setup & deployment (XAMPP / cPanel)           | Project root    |
| DevOps2 | Project documentation: README, developer & user guide | README.md, Wiki |

---

## **3. Folder Structure (Framework-Free, Clean)**

```
/project-root
    /assets
        /css/style.css
        /js/main.js
        /images/
    /config
        db.php
    /models
        User.php
        Vendor.php
        Product.php
        Order.php
    /controllers
        AuthController.php
        VendorController.php
        CustomerController.php
        OrderController.php
        AdminController.php
    /views
        /auth
            login.php
            register.php
            logout.php
            profile.php
            reset_password.php
        /vendor
            dashboard.php
            add_product.php
            edit_product.php
            delete_product.php
            manage_categories.php
            sales_report.php
        /customer
            shop.php
            product_detail.php
            cart.php
            checkout.php
            orders.php
        /order
            create_order.php
            update_status.php
            view_order.php
            payment.php
            invoice.php
        /admin
            dashboard.php
            manage_vendors.php
            manage_customers.php
            manage_categories.php
            manage_orders.php
        home.php
        products.php
        product_detail.php
        cart_checkout.php
    functions.php
    index.php
    README.md
```

---


# **Company Workflow**

```
                        ┌───────────┐
                        │   main    │  ← Production-ready, stable version
                        └────┬──────┘
                             │
             ┌───────────────┼────────────────┬─────────────────┐
             │               │                │                 │
      ┌──────┴──────┐  ┌─────┴───────┐  ┌─────┴───────┐   ┌─────┴───────┐
      │  auth       │  │  vendor      │  │ customer     │   │ order-payment│
      │(Team Branch)│  │(Team Branch) │  │(Team Branch) │   │(Team Branch) │
      └─────┬───────┘  └─────┬───────┘  └─────┬───────┘   └─────┬───────┘
            │                │                 │                 │
    ┌───────┴────────┐ ┌─────┴────────┐ ┌─────┴────────┐  ┌─────┴────────┐
    │auth/john-login │ │vendor/ali-add│ │customer/maria│  │order/ali-pay │
    │auth/maria-reg  │ │vendor/sara-edit│ │customer/cart│  │order/sara-inv│
    │auth/sara-profile│ │vendor/john-stock│ │customer/orders│ │order/john-track│
    └───────────────┘ └───────────────┘ └───────────────┘  └───────────────┘

             ┌───────────────┬─────────────────┐
             │               │                 │
      ┌──────┴──────┐  ┌─────┴───────┐  ┌─────┴───────┐
      │  admin      │  │ frontend/UI  │  │ hotfix       │
      │(Team Branch)│  │(Team Branch) │  │(Urgent fixes)│
      └─────┬───────┘  └─────┬───────┘  └─────────────┘
            │                │
    ┌───────┴────────┐ ┌─────┴────────┐
    │admin/maria-dash│ │frontend/home │
    │admin/ali-mng-v │ │frontend/shop │
    │admin/john-ord  │ │frontend/cart │
    └───────────────┘ └───────────────┘
```

---

## **Explanation**

1. **Main Branch (`main`)**

   * Production-ready code
   * Only stable, fully tested modules merged here

2. **Team Branches**

   * `auth`, `vendor`, `customer`, `order-payment`, `admin`, `frontend`
   * Managed by **team leads**

3. **Student Feature Branches**

   * Created **from their team branch**
   * Naming convention: `team/student-feature`

     * Example: `vendor/ali-add-product`
   * Each branch is independent → prevents conflicts

4. **Pull Requests & Merging**

   * Student → PR → Team branch
   * Tech Lead → Review → Merge
   * QA → Test team branch → Merge into `main`

5. **Hotfix Branches**

   * Urgent fixes directly from `main`
   * After PR → merge back into `main`

6. **Sprint Release**

   * Tag `main` branch after QA approval: `v1.0`, `v1.1`, …



---
# **Role Assignment**

### **Executive & Management**

| Student | Position             |                                   |
| ------- | -------------------- | -------------------------------------------------------- |
Project Manager (PM) | [Abdullah Al Sobail](https://github.com/Abdullah-Al-Sobail)  → Software Engineer 
DevOps Lead | [Ariful Islam](https://github.com/Ariful-Islam-official)  → devOps Engineer 
### **Engineering Leadership**

| Student | Position                                         | Responsibilities                                  |
| ------- | ------------------------------------------------ | ------------------------------------------------- |
| 3       | Tech Lead (Software Engineer – Backend)          | Guides PHP/MySQL structure, reviews backend PRs   |
| 4       | Tech Lead (Software Engineer – Frontend)         | Guides UI/UX, reviews frontend PRs                |

### **Development Teams**

**Backend Team – Software Engineers**

* [Najifa Jannat](https://github.com/Konichiwaa)  → Software Engineer – Backend
* [Sanjana Akter Shila Moni]( https://github.com/esanjana-de)  → Software Engineer – Backend
* [Nayeema Siddiqua Mawa](https://github.com/siddiquamawa21-debug)  → Software Engineer – Backend
* [Nusrat Jahan Sultana Diba](https://github.com/NJSDiba)  → Software Engineer – Backend
* [Nusrat Binte Nishi](https://github.com/NUSRATNI)  → Software Engineer – Backend
* [Yasha Fatema](https://share.google/7WuOmT2PIJIyvUnHT)  → Software Engineer – Backend
* [Rozy Sultana](https://github.com/Rose-080)  → Software Engineer – Backend
* [Tahiyatut Tasnima ](https://github.com/Tahiyat07)  → Software Engineer – Backend
* [Jannatul Mawah Tasmi ](https://github.com/Tasmi2001)  → Software Engineer – Backend
* [Mahiah Kulsum  ](https://github.com/MahiyaK)  → Software Engineer – Backend
* [Fatima Ibrahim Chowdhury](https://github.com/Givemeabreac)  → Software Engineer – Backend
* [Maimuna Akter Shawon](https://github.com/Maimuna-shaon)  → Software Engineer – Backend


**Frontend Team – Software Engineers**
* [Soalehin Priya](https://github.com/Soalehin)  → Software Engineer – Frontend
* [Shebria Binthey Hossain Arina](https://github.com/Shebria)  → Software Engineer – Frontend
* [Shajia Sultana](https://github.com/montaha-927 )  → Software Engineer – Frontend
* [Nure Jannat Chowdhury](https://github.com/Shajia20)  → Software Engineer – Frontend
* [Samaul Muntaha](https://github.com/twinklemun73-debug)  → Software Engineer – Frontend
* [Bibi Kulsum Srity ](https://github.com/Kulsum-Srity)  → Software Engineer – Frontend

**Full Stack Team – Software Engineers**

* [Kawcer Sultana Rumi ](https://github.com/SultanaRumi2030) → Software Engineer – Full Stack
* [Arifa Hasan Mumu ](https://github.com/Arifa-Hasan-Mumu) → Software Engineer – Full Stack
* [Joinab Binte Siraj Asifa](https://github.com/JBSAsifa) → Software Engineer – Full Stack
* [Waseka khushnud ](https://github.com/WasekaKhushnud) → Software Engineer – Full Stack
* [Armin Jahan Asma](https://github.com/Armin139) → Software Engineer – Full Stack
* [Nafisa Tabassum Aurin](https://github.com/Nafisa-Tabassum-Aurin) → Software Engineer – Full Stack
* [Nasin Sultana Nipa](https://github.com/nipa-123) → Software Engineer – Full Stack
* [Israt Jahan ](https://github.com/ipti02) → Software Engineer – Full Stack
* [Tajniya Nowshin Ome](https://github.com/TajniyaNowshin/TajniyaNowshin) → Software Engineer – Full Stack
* [Syeda Barat Taweela ](https://github.com/Syeda-Taweela) → Software Engineer – Full Stack
* [Nazia tabassum ]( https://github.com/Naziatabasssum) → Software Engineer – Full Stack


### **Quality & Security**

**QA Team – Software Engineers (4 Students)**

* [Anamika Dey](https://github.com/Anamika213207) → Software Engineer – QA
* [Faiza rashid](https://github.com/Faiza-Rashid) → Software Engineer – QA
* [Nusaiba tahsin](https://github.com/nusaiba-tahsin) → Software Engineer – QA
* [Jannatul ferdous nekima](https://github.com/jfnekima123) → Software Engineer – QA

**Security Team – Software Engineers**

* [Anannya Debnath Sangma ](https://github.com/Anannya-2nd)  → Software Engineer – Security
* [Gloria Talukdar setu](https://github.com/itssetu08-jpg)  → Software Engineer – Security
* [Sadia Anjum](https://github.com/Anjum-Sadia)  → Software Engineer – Security

### **UI/UX & Content**
* [Shahida Islam Tusha](https://github.com/Tusha-Shahida-Islams)  → Software Engineer – Security
* [Rudaba Adnin Chowdhury](https://github.com/Rudaba07)  → Software Engineer – Security
* [Mst.Maliha Mobassira ](https://github.com/maliha-1999)  → Software Engineer – Security


---

# **Branch Strategy (GitHub Workflow)**

### **Main Branches**

* `main` → Production-ready stable code
* `develop` → Latest integrated features for QA testing

### **Supporting Branches**

* `feature/feature-name` → Individual features (assigned per student/team)

  * Example: `feature/user-authentication`, `feature/cart-system`
* `release/x.y` → Prepare a version release for testing & QA
* `hotfix/hotfix-name` → Urgent bug fixes on production

### **Workflow Steps**

1. Developer → Creates `feature/xyz` branch → Works on feature → Pushes code
2. Pull Request (PR) → Submit to `develop` branch
3. Tech Leads → Review PR → Approve or request changes
4. QA Engineers → Test `develop` branch
5. Release → Create `release/x.y` branch from `develop`
6. QA + Security → Final testing
7. Merge release → `main`
8. Hotfixes → Create from `main`, merge into both `main` and `develop`

---

# **Student Team Workflow**

| Team       | Students | Responsibilities                               | GitHub Branch Examples                     |
| ---------- | -------- | ---------------------------------------------- | ------------------------------------------ |
| Backend    | 6–15     | Authentication, Vendor, Customer, Orders       | `feature/auth`, `feature/vendor`           |
| Frontend   | 16–25    | Homepage, Product Pages, Cart, Checkout        | `feature/frontend-home`, `feature/cart-ui` |
| Full Stack | 26–30    | Integration support, bridging backend/frontend | `feature/user-profile`                     |
| QA         | 31–34    | Test all modules, report bugs                  | QA testing on `develop`                    |
| Security   | 35–36    | Security testing & validation                  | `feature/security-audit`                   |
| UI/UX      | 37–38    | Wireframes, page layouts, responsive design    | Support Frontend Branches                  |
| Content    | 39–40    | Dummy data, text/images, documentation support | N/A (data preparation)                     |
| DevOps     | 5        | Branch strategy, deployment, merge management  | Oversees `main` & `develop`                |

---

# **Professional Workflow (Agile / Scrum)**

* **Sprint Duration:** 2 weeks
* **Daily Stand-up:** 15 minutes (yesterday, today, blockers)
* **Weekly Demo:** Present features to Product Owner
* **End-of-Sprint:** Sprint Review + Retrospective
* **Rotation:** Optional – rotate roles every sprint for cross-team learning

---

# **Team Hierarchy**

```
                  Project Manager (1)
                         │
            ┌────────────┼────────────┐
            │                         │
      Product Owner (2)        Tech Leads
                                   │
                  ┌────────────────┴──────────────┐
                  │                               │
          Backend Team Lead (3)           Frontend Team Lead (4)
                  │                               │
      ┌───────────┼───────────┐          ┌────────┼────────┐
  Backend Devs   Full Stack    Security   Frontend Devs   UI/UX
  (6–15)         (26–30)      (35–36)   (16–25)        (37–38)
                  │
                 QA (31–34)
```

---

