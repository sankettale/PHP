<div class="sidebar" data-image="images/sidebar/">
    <div class="logo">
        <a href=""
            class="simple-text logo-normal">
            <img class="img" src="images/logo/logo.png" style="width:100px; height:100px;"/>
            <h3 style="color:brown;"><b>Prajasattak</span></b></h3>
        </a>
    </div>
    
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link act1 <?php if ($thisPage=="dashboard"){ echo "act"; }?>" href="dashboard">
                    <i class="material-icons">dashboard</i>
                    <h5><b>Home</b></h5>
                </a>
            </li>
            <?php
            if($_SESSION['auth']['acc_type']=="admin")
            {
            ?>
            <div class="dropdown">
                <li class="nav-item">
                    <a class="nav-link act1 <?php if ($thisPage=="admin"){ echo "act"; }?>" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">account_circle</i>
                         <h5><b>User</b></h5>
                    </a>
                    <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item act1" href="addadmin">Add User</a>
                        <a class="dropdown-item act1" href="viewadmin">User List</a>
                    </div>
                </li>
            </div>
            <?php } ?>
            <?php
            if($_SESSION['auth']['auth_gallery'] == "1")
            {
            ?>
            <li class="nav-item">
                <a class="nav-link act1 <?php if ($thisPage=="gallery"){ echo "act"; }?>" href="gallery">
                    <i class="material-icons">photo_library</i>
                    <h5><b>Gallery</b></h5>
                </a>
            </li>
            <?php } ?>
            <?php
            if($_SESSION['auth']['auth_staff']==1)
            {
            ?>
            <li class="nav-item">
                <a class="nav-link act1 <?php if ($thisPage=="staff"){ echo "act"; }?>" href="staff_gallery">
                    <i class="material-icons">people</i>
                    <h5><b>Staff</b></h5>
                </a>
            </li>
            <?php } ?>
            <?php
            if($_SESSION['auth']['auth_news'])
            {
            ?>
            <li class="nav-item">
                <a class="nav-link act1 <?php if ($thisPage=="news"){ echo "act"; }?>" href="news">
                    <i class="material-icons">assignment</i>
                    <h5><b>News</b></h5>
                </a>
            </li>
            <?php } ?>
            <?php
            if($_SESSION['auth']['auth_notification'] == 1 ) 
                    {
                ?>
            <li class="nav-item">
                <a class="nav-link act1 act1 <?php if ($thisPage=="notifications"){ echo "act"; }?>" href="notifications">
                    <i class="material-icons">event_note</i>
                    <h5><b>Notifications</b></h5>
                </a>
            </li>
            <?php } ?>
                <?php 
                    if($_SESSION['auth']['auth_link'] == 1 ) 
                    {
                ?>
            <li class="nav-item">
                <a class="nav-link act1 <?php if ($thisPage=="link"){ echo "act"; }?>" href="link">
                    <i class="material-icons">announcement</i>
                    <h5><b>Important Links</b></h5>
                </a>
            </li>
            <?php } ?>
                <?php 
                    if($_SESSION['auth']['auth_enquiry'] == 1 ) 
                    {
                ?>
            <div class="dropdown">
                <li class="nav-item">
                    <a class="nav-link act1 <?php if ($thisPage=="messages"){ echo "act"; }?>" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">person_pin_circle</i>
                         <h5><b>Enqury Messages</b></h5>
                    </a>
                    <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item act1" href="messages">Student Enqury</a>
                        <a class="dropdown-item act1" href="library_enq">Library Enqury</a>
                    </div>
                </li>
                <?php } ?>
            </div>
            
        </ul>
    </div>
</div>
