<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>FakeOrNot Info</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="row">
        <div class="col-12">
            <h1 style="text-align: center; margin-bottom:5%;">FakeOrNot extension info</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="table-responsive">
                <table id="dtBasicExample" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Thumbs <h9 style="color: greenyellow;">Up</h9> Text</th>
                            <th scope="col">User</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $conn = mysqli_connect("localhost", "root", "root", "FakeOrNot");
                        if ($conn->connect_error) {
                            die("Connection failed. :(" . $conn->connect_error);
                        }
      
                        $sql = "SELECT User.id, User.email, User.name, Up.id, Up.text, Up.user_id
                        FROM User
                        INNER JOIN Up ON User.id=Up.user_id";

                        $result = $conn->query($sql);


                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr> <td>" . $row["id"] . "</td><td>" . $row["text"] . "</td>  <td>". $row["name"] . "</td>  <td>" . $row["email"] . "</td></tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "0 results. :(";
                        }

                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-6">
            <div class="table-responsive">
            <table id="dtBasicExample2" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Thumbs <h9 style="color: #ff8585;">Down</h9> Text</th>
                            <th scope="col">User</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $conn = mysqli_connect("localhost", "root", "root", "FakeOrNot");
                        if ($conn->connect_error) {
                            die("Connection failed. :(" . $conn->connect_error);
                        }

                        $sql = "SELECT User.id, User.email, User.name, Down.id, Down.text, Down.user_id
                        FROM User
                        INNER JOIN Down ON User.id=Down.user_id";

                        $result = $conn->query($sql);


                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc())  {
                                echo "<tr> <td>" . $row["id"] . "</td><td>" . $row["text"] . "</td> <td>". $row["name"] . "</td> <td>" . $row["email"] . "</td></tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "0 results. :(";
                        }

                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>

<script src="jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"> </script>

<script src="index.js"></script>


</html>