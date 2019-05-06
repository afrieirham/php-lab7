<?php

if (isset($_POST['submit'])) {
    $data ='Array' . "\r\n" . '(' . "\r\n" . '[uname] => ' . $_POST['name'] . "\r\n" . '[studentID] => ' . $_POST['student-id'] . "\r\n" . '[password] => ' . $_POST['password'] . "\r\n" . '[rpassword] => ' . $_POST['r-password'] . "\r\n" . '[birthday] => ' . $_POST['birthday'] . "\r\n" . '[event] => ' . $_POST['event'] . "\r\n" . ')';
    $ret = file_put_contents('seclubmember.txt', $data, FILE_APPEND | LOCK_EX);
    if ($ret === false) {
        die('There was an error writing this file');
    } else {
        echo "$ret bytes written to file";
    }
} else {
    die('no post data to process');
}

?>

<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Welcome</title>
</head>

<body style="background-color: #ADD8E6">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#"><img src="selogo.jpg" width="30" height="30"></img> Software Engineering
                Club</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.html">EVENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.html">SIGN UP</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <main>
            <div class="jumbotron" style="background-color: #F0F8FF">
                <h2>SE Club - Member Profile</h2>
                <span class="card-deck border border-primary ml-auto mb-3 pl-3 pt-2" style="background-color: #CAE7FF">
                    <p>Hi <?php echo $_POST['name']; ?>, welcome to SE Club</p>
                </span>

                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Name:</th>
                            <td> <?php echo $_POST['name']; ?> </td>
                        </tr>
                        <tr>
                            <th>Student ID:</th>
                            <td> <?php echo $_POST['student-id']; ?> </td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td> <?php echo $_POST['email']; ?> </td>
                        </tr>
                        <tr>
                            <th>Birthday:</th>
                            <td> <?php echo $_POST['birthday']; ?> </td>
                        </tr>
                        <tr>
                            <th>Most Favourite Event:</th>
                            <td> <?php echo $_POST['event']; ?> </td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <br>
        </main>
        <! footer area using bootstrap container>
            <footer class="container text-center font-italic">
                <hr>
                Copyright &copy 2019 UM Software Engineering Club<br>
                <a href="mailto:umseclub@um.edu.my">umseclub@um.edu.my</a>

            </footer>
            <!link to use Bootstrap�s compiled JavaScript>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>