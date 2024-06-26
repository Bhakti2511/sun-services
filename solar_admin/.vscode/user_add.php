<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Template Mo" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

    <title>Sun Services Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/decor_project.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />
</head>

<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">

                        <a href="index.html" class="logo">
                            Sun Services<br />
                            <h4 class="slogen">One Stop Solar Solution</h4>
                        </a>

                        <ul class="nav">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="user_register.php" class="active">User Ragistration</a>
                            </li>
                            <li>
                                <a href="service.php">Service Ragistration</a>
                            </li>
                            <li><a href="service.php">Enquiry</a></li>
                            <li><a href="feedback.php">Feedback</a></li>
                            <li><a href="add_service.php">Add Service</a></li>
                            <li>
                                <a href="logout.php" name="logout">Logout</a>
                            </li>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form enctype="multipart/form-data" method="POST">
                        <div class="row" style="padding-top: 50px">
                            <div class="col">
                                <h3>Add New Services</h3>
                            </div>
                        </div>
                        <div class=row>
                            <div class="column" style="padding:10px">
                                Name: <input type="text" name="name" value=''>
                            </div>
                            <div class="column" style="padding:10px">
                                Number: <input type="text" name="number" value=''>
                            </div>
                            <div class="column" style="padding:10px">
                                Email: <input type="text" name="email" value=''>
                            </div>
                            <div class="column" style="padding:10px">
                                Address: <textarea type="text" name="address" value=''></textarea>
                            </div>
                            <div class="column" style="padding:10px">
                                Date: <input type="date" name="date" id="date" value=''>
                            </div>
                            <div class="column" style="padding:10px">
                                Slot :<select name="slot" value=''>
                                    <option name="morning">Morning</option>
                                    <option name="afternoon">Afternoon</option>
                                </select>
                            </div>
                            <div class="column" style="padding:10px">
                                Time :<select name="time" value=''>
                                    <option>9:00</option>
                                    <option>11:00</option>
                                    <option>3:00</option>
                                    <option>5:00</option>
                                    <option>7:00</option>
                                </select>
                            </div>
                            <div class="column" style="padding:10px">
                                <button type="submit" name="uploadfile">insert</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(function () {
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if (month < 10)
                month = '0' + month.toString();
            if (day < 10)
                day = '0' + day.toString();
            var maxDate = year + '-' + month + '-' + day;
            $('#date').attr('min', maxDate);
        });
    </script>

</body>

</html>

<?php
if (isset($_POST['uploadfile'])) {

    $db = mysqli_connect("localhost", "root", "", "sun");

    $id = $_POST['id'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $slot = $_POST['slot'];
    $time = $_POST['time'];

    $sql = "INSERT INTO users (name,number,email,address,date,slot,time) VALUES ('$name','$number','$email','$address','$date','$slot','$time')";

    $qy = mysqli_query($db, $sql);

    $msg = ($qy == TRUE) ? "data added successfully" : "Failed to add data";
}
?>