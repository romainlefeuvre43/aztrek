<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link <?php echo (CURRENT_URL == ADMIN_URL) ? "active" : ""; ?>" href="<?php echo ADMIN_URL; ?>">
            <i class="fa fa-home"></i>
            Dashboard 
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo ADMIN_URL; ?>crud/destination/">
            <i class="fa fa-plane"></i>
            Destinations
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo ADMIN_URL; ?>crud/sejour/">
            <i class="fa fa-suitcase"></i>
            Séjours
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo ADMIN_URL; ?>crud/users/">
            <i class="fa fa-users"></i>
            Utilisateurs
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo ADMIN_URL; ?>crud/depart/">
            <i class="fa fa-calendar"></i>
            Départs
        </a>
    </li>
    
</ul>