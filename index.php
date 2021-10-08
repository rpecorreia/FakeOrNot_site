<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>iColabCheck</title>
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
      <h1 style="text-align: center; margin-bottom:1%;">iColabCheck</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
    <h6 style="color: grey; text-align: center; margin-bottom:1%;">Check your insights.</h6>
    </div>
  </div>
  <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Fake content</a>
      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Questionable content</a>
      <!--<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Other</a> -->
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      <div class="row">
        <div class="col-12" >
          <div class="table-responsive">
            <table id="dtBasicExample" class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">
                    <h9 style="color: #ff8585;">Fake</h9> Content
                  </th>
                  <th scope="col">User</th>
                  <th scope="col">Email</th>
                  <th scope="col">URL</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $conn = mysqli_connect("localhost", "root", "root", "FakeOrNot");
                if ($conn->connect_error) {
                  die("Connection failed. :(" . $conn->connect_error);
                }

                $sql = "SELECT User.id, User.email, User.name, Fake.id, Fake.text, Fake.user_id, Fake.url
                                    FROM User
                                    INNER JOIN Fake ON User.id=Fake.user_id";

                $result = $conn->query($sql);


                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    echo "<tr> <td>" . $row["id"] . "</td><td>" . $row["text"] . "</td> <td>" . $row["name"] . "</td> <td>" . $row["email"] . "</td>    <td>" . "<a href= " . $row["url"] . " target='_blank' >" . $row["url"] . "</a>" . "</td></tr>";
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
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="dtBasicExample2" class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">
                    <h9 style="color: #ebeb1e;">Questionable</h9> Content
                  </th>
                  <th scope="col">User</th>
                  <th scope="col">Email</th>
                  <th scope="col">URL</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $conn = mysqli_connect("localhost", "root", "root", "FakeOrNot");
                if ($conn->connect_error) {
                  die("Connection failed. :(" . $conn->connect_error);
                }

                $sql = "SELECT User.id, User.email, User.name, Questionable.id, Questionable.text, Questionable.user_id, Questionable.url
                                    FROM User
                                    INNER JOIN Questionable ON User.id=Questionable.user_id";

                $result = $conn->query($sql);


                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    echo "<tr> <td>" . $row["id"] . "</td><td>" . $row["text"] . "</td>  <td>" . $row["name"] . "</td>  <td>" . $row["email"] . "</td>    <td>" . "<a href= " . $row["url"] . " target='_blank' >" . $row["url"] . "</a>" . "</td></tr>";
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

    </div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">tab 3</div>
  </div>

  <script src="jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"> </script>

<script src="index.js"></script>

</body>

</html>