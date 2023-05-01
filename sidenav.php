<div class="sidebar">
      <div class="logo-details">
        <i class='fa fa-american-sign-language-interpreting'></i>
        <span class="logo_name">Go & Save</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="panelOrg.php">
            <i class='bx bx-grid-alt'></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <!--
        <li>
          <a href="viewOrgLogin.php">
            <i class='bx bx-message'></i>
            <span class="links_name">View Organization <br>Admin Login</span>
          </a>
        </li>-->
        <li>
          <a href="orgRegistration.php">
            <i class='bx bx-book-alt'></i>
            <span class="links_name">View Organization<br> Data</span>
          </a>
        </li>
        <li>
          <a href="orgBranchdata.php">
            <i class='bx bx-book-alt'></i>
            <span class="links_name">View Organization<br> Branch Data</span>
          </a>
        </li>
        <li>
          <a href="viewOrgLogin.php">
            <i class='bx bx-cog'></i>
              <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="./logout.php">
            <i class='bx bx-log-out'></i>
              <span class="links_name">Log out</span>
          </a>
        </li>
       <!-- <li>
          <a href="../contact/view.php">
            <i class='bx bx-message'></i>
            <span class="links_name">View Contact Us</span>
          </a>
        </li>-->

      </ul>
    </div>
    <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
     
    </nav>

    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else
          sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    </script>