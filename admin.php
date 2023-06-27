<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body style="background-color:lightblue">

<h1 style="color:red">ADMIN PAGE</h1>

<table style="width:100%">
  <tr>
  <th scope="col">user_name</th>
      <th scope="col">phone_number</th>
      <th scope="col">address</th>
      <th scope="col">Email</th>
      <th scope="col">id_no</th>

  </tr>

  <?php
            $conn = mysqli_connect("localhost", "root", "", "products");
          
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT username, phone_number, address, email,id_no FROM shoppings";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
           
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["username"]. "</td><td>" . $row["phone_number"] . "</td><td>"
            . $row["address"]. "</td><td>" . $row["email"]. "</td><td>" . $row["id_no"]. "</td></tr>";
            }
            echo "</table>";
            } else { echo "0 results"; }
            $conn->close();
            ?>
</table>

</body>
</html>

