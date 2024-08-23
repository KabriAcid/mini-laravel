<body>

    <?php
    include_once '../includes/header.php';
    require 'namespaces.php';

    use App\Models\User as AdminUser;
    use App\Models\User as RegularUser;
    
    $user = new AdminUser("Muhammad Sani");
    echo $user->logMessage();

    echo "<br>";
    
    $user = new RegularUser("Auwal Sulaiman");
    echo $user->logMessage();


    ?>
</body>