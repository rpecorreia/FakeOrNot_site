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

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $conn = mysqli_connect("localhost", "root", "root", "FakeOrNot");
                        if ($conn->connect_error) {
                            die("Connection failed. :(" . $conn->connect_error);
                        }
                        $sql = "SELECT id, text from Up";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr> <td>" . $row["id"] . "</td> <td>" . $row["text"] . "</td></tr>";
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
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $conn = mysqli_connect("localhost", "root", "root", "FakeOrNot");
                        if ($conn->connect_error) {
                            die("Connection failed. :(" . $conn->connect_error);
                        }
                        $sql = "SELECT id, text from Down";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr> <td>" . $row["id"] . "</td> <td>" . $row["text"] . "</td></tr>";
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


<!--
    <script src= "https://cdn.datatables.net/autofill/2.3.7/js/dataTables.autoFill.min.js"></script>
<script src= "https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src= "https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js"></script>
<script src= "https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src= "https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
<script src= "https://cdn.datatables.net/colreorder/1.5.4/js/dataTables.colReorder.min.js"></script>
<script src= "https://cdn.datatables.net/fixedcolumns/3.3.3/js/dataTables.fixedColumns.min.js"></script>
<script src= "https://cdn.datatables.net/fixedheader/3.1.9/js/dataTables.fixedHeader.min.js"></script>
<script src= "https://cdn.datatables.net/keytable/2.6.2/js/dataTables.keyTable.min.js"></script>
<script src= "https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src= "https://cdn.datatables.net/rowgroup/1.1.3/js/dataTables.rowGroup.min.js"></script>
<script src= "https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
<script src= "https://cdn.datatables.net/scroller/2.0.4/js/dataTables.scroller.min.js"></script>
<script src= "https://cdn.datatables.net/searchbuilder/1.1.0/js/dataTables.searchBuilder.min.js"></script>
<script src= "https://cdn.datatables.net/searchpanes/1.3.0/js/dataTables.searchPanes.min.js"></script>
<script src= "https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>




   <link rel="stylesheet" href="https://cdn.datatables.net/autofill/2.3.7/css/autoFill.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/colreorder/1.5.4/css/colReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.0/css/dataTables.dateTime.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/3.3.3/css/fixedColumns.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.9/css/fixedHeader.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/keytable/2.6.2/css/keyTable.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowgroup/1.1.3/css/rowGroup.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/scroller/2.0.4/css/scroller.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/searchbuilder/1.1.0/css/searchBuilder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/1.3.0/css/searchPanes.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.dataTables.min.css">
                    -->


</html>