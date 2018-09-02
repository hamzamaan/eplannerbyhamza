    <?php 
        if($_SESSION['user']['userType']=='Admin'){ ?>
        	
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>My Profile </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>Business For Approval</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-table"></i>
            <span>View Approve Business</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dash_login.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Logout</span></a>
        </li>
                    <?php } ?>		