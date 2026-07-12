<?php
/* ============================================================
   GAGI SACCO WEBSITE
   File: navbar.php
   Description: Shared Navigation Bar
   Author: Elvis Mati
   Version: 3.0
============================================================ */
?>

<!-- ==========================================================
     WEBSITE HEADER
========================================================== -->

<header class="header">

    <div class="container">

        <nav class="navbar">

            <!-- ===========================================
                 COMPANY LOGO
            ============================================ -->

            <a href="index.php" class="logo">

                <img src="images/logo/logo-horizontal.png"
                    alt="GAGI SACCO Logo">

            </a>

            <!-- ===========================================
                 NAVIGATION LINKS
            ============================================ -->

            <ul class="nav-menu" id="primary-navigation">

                <li>
                    <a href="index.php" class="nav-link active">
                        Home
                    </a>
                </li>

                <li>
                    <a href="products.php" class="nav-link">
                        Products
                    </a>
                </li>

                <li>
                    <a href="projects.php" class="nav-link">
                        Projects
                    </a>
                </li>

                <li>
                    <a href="services.php" class="nav-link">
                        Services
                    </a>
                </li>

                <li>
                    <a href="about.php" class="nav-link">
                        About
                    </a>
                </li>

                <li>
                    <a href="contact.php" class="nav-link">
                        Contact
                    </a>
                </li>

            </ul>

            <!-- ===========================================
                 RIGHT SIDE ACTIONS
            ============================================ -->

            <div class="nav-actions">

                <!-- CTA BUTTON -->

                <a href="quote.php"
                    class="btn btn-primary nav-btn">

                    Request Quote

                </a>

                <!-- MOBILE MENU BUTTON -->

                <button class="menu-toggle"
                    id="menuToggle"
                    aria-label="Open Menu"
                    aria-expanded="false"
                    aria-controls="primary-navigation">

                    <span></span>
                    <span></span>
                    <span></span>

                </button>

            </div>

        </nav>

    </div>

</header>