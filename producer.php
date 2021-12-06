<?php
session_start();
if ($_SESSION['type'] != "producer" || !isset($_SESSION['user'])) {
  header('location: login.html');
}
if (isset($_POST['addSupplier'])) {
  $myfile = fopen('supplier.txt', 'a');
  $user = $_POST['supplier'] . "\r\n";
  fwrite($myfile, $user);
  fclose($myfile);
  unset($_POST['addSupplier']);
}
if (isset($_POST['delSupplier'])) {
  $myfile = fopen('supplier.txt', 'r');
  $out = array();
  while (!feof($myfile)) {
    $data = fgets($myfile);
    if (trim($data) != $_POST['supplier']) {
      $out[] = $data;
    }
  }
  $fp = fopen("supplier.txt", "w+");
  flock($fp, LOCK_EX);
  foreach ($out as $line) {
    fwrite($fp, $line);
  }
  flock($fp, LOCK_UN);
  fclose($fp);
  unset($_POST['delSupplier']);
}
if (isset($_POST['addCustomer'])) {
  $myfile = fopen('customer.txt', 'a');
  $user = $_POST['customer'] . "\r\n";
  fwrite($myfile, $user);
  fclose($myfile);
  unset($_POST['addCustomer']);
}
if (isset($_POST['delCustomer'])) {
  $myfile = fopen('customer.txt', 'r');
  $out = array();
  while (!feof($myfile)) {
    $data = fgets($myfile);
    if (trim($data) != $_POST['customer']) {
      $out[] = $data;
    }
  }
  $fp = fopen("customer.txt", "w+");
  flock($fp, LOCK_EX);
  foreach ($out as $line) {
    fwrite($fp, $line);
  }
  flock($fp, LOCK_UN);
  fclose($fp);
  unset($_POST['delCustomer']);
}
if (isset($_POST['addMaterial'])) {
  $myfile = fopen('material.txt', 'a');
  $user = $_POST['material'] . "\r\n";
  fwrite($myfile, $user);
  fclose($myfile);
  unset($_POST['addMaterial']);
}
if (isset($_POST['delMaterial'])) {
  $myfile = fopen('material.txt', 'r');
  $out = array();
  while (!feof($myfile)) {
    $data = fgets($myfile);
    if (trim($data) != $_POST['material']) {
      $out[] = $data;
    }
  }
  $fp = fopen("material.txt", "w+");
  flock($fp, LOCK_EX);
  foreach ($out as $line) {
    fwrite($fp, $line);
  }
  flock($fp, LOCK_UN);
  fclose($fp);
  unset($_POST['delMaterial']);
}
if (isset($_POST['addEmployee'])) {
  $myfile = fopen('employee.txt', 'a');
  $user = $_POST['employee'] . "\r\n";
  fwrite($myfile, $user);
  fclose($myfile);
  unset($_POST['addEmployee']);
}
if (isset($_POST['delEmploee'])) {
  $myfile = fopen('employee.txt', 'r');
  $out = array();
  while (!feof($myfile)) {
    $data = fgets($myfile);
    if (trim($data) != $_POST['employee']) {
      $out[] = $data;
    }
  }
  $fp = fopen("employee.txt", "w+");
  flock($fp, LOCK_EX);
  foreach ($out as $line) {
    fwrite($fp, $line);
  }
  flock($fp, LOCK_UN);
  fclose($fp);
  unset($_POST['delEmployee']);
}

if (isset($_POST['addProduct'])) {
  $myfile = fopen('product.txt', 'a');
  $user = $_POST['product'] . "\r\n";
  fwrite($myfile, $user);
  fclose($myfile);
  unset($_POST['addProduct']);
}
if (isset($_POST['delProduct'])) {
  $myfile = fopen('product.txt', 'r');
  $out = array();
  while (!feof($myfile)) {
    $data = fgets($myfile);
    if (trim($data) != $_POST['product']) {
      $out[] = $data;
    }
  }
  $fp = fopen("product.txt", "w+");
  flock($fp, LOCK_EX);
  foreach ($out as $line) {
    fwrite($fp, $line);
  }
  flock($fp, LOCK_UN);
  fclose($fp);
  unset($_POST['delProduct']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Producer</title>
</head>

<body>
  <fieldset>
    <a href="index.html">Home</a> | <a href="about.html">About</a> | <a href="logout.php">Logout</a>
  </fieldset>
  <center>
    <h1>Producer</h1>
    <form action="producer.php" method="post">
      <input type="text" name="supplier" placeholder="Supplier to add/delete" />
      <input type="submit" name="addSupplier" value="Add" />
      <input type="submit" name="delSupplier" value="Delete" />
    </form>
    </br>
    <form action="producer.php" method="POST">
      <input type="text" name="customer" placeholder="Customer Request to add/delete" />
      <input type="submit" name="addCustomer" value="Add" />
      <input type="submit" name="delCustomer" value="Delete" />
    </form>
    </br>
    <form action="producer.php" method="POST">
      <input type="text" name="material" placeholder="Material Request to add/delete" />
      <input type="submit" name="addMaterial" value="Add" />
      <input type="submit" name="delMaterial" value="Delete" />
    </form>
    </br>
    <form action="producer.php" method="POST">
      <input type="text" name="employee" placeholder="Employee Request to add/delete" />
      <input type="submit" name="addEmployee" value="Add" />
      <input type="submit" name="delEmployrr" value="Delete" />
    </form>
    </br>
    <form action="producer.php" method="POST">
      <input type="text" name="product" placeholder="Product Request to add/delete" />
      <input type="submit" name="addProduct" value="Add" />
      <input type="submit" name="delProduct" value="Delete" />
    </form>
    </br>
    <!-- other add/deletes here -->
    <form action="producer.php" method="post">
      <input type="submit" name="getSupplier" value="Check Supplier List" />
      </br>
      <?php
      if (isset($_POST['getSupplier'])) {
        $myfile = fopen('supplier.txt', 'r');
        while (!feof($myfile)) {
          $data = fgets($myfile);
          echo ($data . "</br>");
        }
        fclose($myfile);
        unset($_POST['getSupplier']);
      }
      ?>
    </form>
    </br>
    <form action="producer.php" method="post">
      <input type="submit" name="getCustomer" value="Check Customer List" />
      </br>
      <?php
      if (isset($_POST['getCustomer'])) {
        $myfile = fopen('customer.txt', 'r');
        while (!feof($myfile)) {
          $data = fgets($myfile);
          echo ($data . "</br>");
        }
        fclose($myfile);
        unset($_POST['getCustomer']);
      }
      ?>
    </form>
    </br>
    <form action="producer.php" method="post">
      <input type="submit" name="getMaterial" value="Check Material List" />
      </br>
      <?php
      if (isset($_POST['getMaterial'])) {
        $myfile = fopen('material.txt', 'r');
        while (!feof($myfile)) {
          $data = fgets($myfile);
          echo ($data . "</br>");
        }
        fclose($myfile);
        unset($_POST['getMaterial']);
      }
      ?>
    </form>
    </br>
    <form action="producer.php" method="post">
      <input type="submit" name="getEmployee" value="Check Emploee List" />
      </br>
      <?php
      if (isset($_POST['getEmployee'])) {
        $myfile = fopen('employee.txt', 'r');
        while (!feof($myfile)) {
          $data = fgets($myfile);
          echo ($data . "</br>");
        }
        fclose($myfile);
        unset($_POST['getEmployee']);
      }
      ?>
    </form>
    </br>
    <form action="producer.php" method="post">
      <input type="submit" name="getProduct" value="Check Product List" />
      </br>
      <?php
      if (isset($_POST['getProduct'])) {
        $myfile = fopen('product.txt', 'r');
        while (!feof($myfile)) {
          $data = fgets($myfile);
          echo ($data . "</br>");
        }
        fclose($myfile);
        unset($_POST['getProduct']);
      }
      ?>
    </form>



  </center>


</body>

</html>