<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
      td{
        padding:10px;
      }

    </style>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <center>
    <form action="backend.php" method="post" enctype='multipart/form-data'>
      <table style="box-shadow:2px 2px 10px black;margin:30px auto;border-radius:8px;">
        <tr>
          <td>  <label for="username">Username</label></td>
          <td>  <input class="form-control" type="text" name="user" value="" placeholder="enter username" required></td>

          <td><label for="username">Contact NO.</label></td>
          <td><input class="form-control" type="number" name="contact" value="" placeholder="enter mobile no." required></td>
        </tr>
        <tr>
          <td><label for="username">Address</label></td>
          <td><textarea class="form-control" name="address" rows="4" cols="60" placeholder="enter address"></textarea></td>

        </tr>
        <tr>
          <td><label for="username">Brand</label></td>
          <td>
              <select class="form-control" name="title" value="title">
                <option value="samsung">Samsung</option>
                <option value="nokia">Nokia</option>
                <option value="apple">Apple</option>
              </select>
          </td>

          <td><label for="username">Order Date</label></td>
          <td>      <input class="form-control" type="date" name="Odate" value=""  required>
         </td>
        </tr>
        <tr>
          <td><label for="username">Invoice date</label></td>
          <td>      <input class="form-control" type="date" name="Idate" value="" required>
         </td>

          <td><label for="username">Product Name</label></td>
          <td>      <input class="form-control" type="text" name="Pname" value="" placeholder="enter product name" required>
         </td>
        </tr>
        <tr>
          <td><label for="username">Price</label></td>
          <td>      <input class="form-control" type="number" name="price" value="" placeholder="enter price" required>
          </td>

          <td><label for="username">Quantity</label></td>
          <td>      <input class="form-control" type="number" name="quantity" value="" placeholder="enter qunatity" required>
        </td>
        </tr>
        <tr>
        <td>
              <input class="btn btn-outline-primary" type="submit" name="submit" value="submit">
        </td>
      </tr>
      </table>

    </form>
  </body>
</html>
