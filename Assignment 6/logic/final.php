<? var_dump($_GET['priceOfHour']); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../bootstrap.min.css">
  <title>Salarys</title>
</head>

<body class="container">

  <table class="table table-hover mt-5">
    <thead>
      <tr>
        <th class="text-center" scope="col">#</th>
        <th class="text-center" scope="col">numOfHours</th>
        <th class="text-center" scope="col">Department</th>
        <th class="text-center" scope="col">priceOfHour</th>
        <th class="text-center" scope="col">Salary</th>
        <th class="text-center" scope="col">discount presentage</th>
        <th class="text-center" scope="col">discount amount</th>
        <th class="text-center" scope="col">netSalary</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        
          <th scope="row">1</th>
       
        
          <td class="text-center"><?php echo $_GET['numOfHours'] ?></td>
       
        
          <td class="text-center"><?php echo $_GET['department'] ?></td>
       
        
          <td class="text-center"><?php echo $_GET['priceOfHour'] ?></td>
       
        
          <td class="text-center"><?php echo $_GET['salary'] ?></td>
       
        
          <td class="text-center"><?php echo $_GET['discount'] ?> %</td>
       
        
          <td class="text-center"><?php echo $_GET['finalDiscount'] ?></td>
       
        
          <td class="text-center"><?php echo $_GET['netSalary'] ?></td>
       

      </tr>

    </tbody>
  </table>

</body>

</html>