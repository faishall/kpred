<?php
	if(!isset($_SESSION['email']))
	{
		echo "<div id='top-links' class='nav pull-right flip'>
            <ul>
              <li><a href='login.php'>Login</a></li>
              <li><a href='registrasi.php'>Register</a></li>
            </ul>
          </div>";
	}
	else
	{
		echo "<div id='top-links' class='nav pull-right flip'>
            <ul>
              <li><a href='#'>Akun</a></li>
              <li><a href='logout.php'>Logout</a></li>
               <li class='dropdown user user-menu'>
                            <a href='#' class='dropdown-toggle' data-toggle='dropdown'>
                                <i class='glyphicon glyphicon-user'></i>
                            </a>
                            <ul class='dropdown-menu'>
                                <!-- User image -->
                                <li class='user-header bg-light-blue'>
                                        <a href='profil.php' class='btn btn-default btn-flat'>Profile</a>
                                </li>
                                <li class='user-header bg-light-blue'>
                                        <a href='checkout.php' class='btn btn-default btn-flat'>My Cart</a>
                                </li>
                                <li class='user-header bg-light-blue'>
                                        <a href='logout.php' class='btn btn-default btn-flat'>Logout</a>
                                </li>
                                <!-- Menu Body -->
                               
                                
                            </ul>
                        </li>
            </ul>
          </div>";
	}
 ?>