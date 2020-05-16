<?php include('./_helpers/theme_helper.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $APP_MASTER_CSS; ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo $APP_THEME_CSS; ?>" type="text/css">
    <title> <?php echo $APP_NAME; ?> </title>
</head>

<body>
    <div class="top-bar">
        <div class="size">
            <button>a--</button>
            <button>a-</button>
            <button>a+</button>
            <button>a++</button>
        </div>
    </div>
    <nav class="menu">
        <a href="index.php" class="logo"> <?php echo $APP_NAME; ?> </a>
        <div class="container">
            <ul>
                <li>
                    <a href="jobseeker.php">Job seeker</a>
                </li>
                <li>
                    <a href="recruiter.php">Recruiter</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1>Contact Page</h1>
    </div>
</body>

</html>