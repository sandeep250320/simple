<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
Go to <a href="index.php">REGISTER PAGE</a>
<center style="color:red;"><h2>JOB POST</h2>
	<div class="container">
        
       <br>
       <div class="table-responsive-sm">
    <table class="table  table-hover table-striped table-condensed table-bordered " style="background-color:lightyellow" >
        <thead style="color : black;">
            <tr>
                <th class="text-center" style="background-color:yellow">S.No.</th>
                <th class="text-center" style="background-color:yellow">Job Title</th>
                <th class="text-center" style="background-color:yellow">Key Skills</th>
                <th class="text-center" style="background-color:yellow">Job Location</th>
                <th class="text-center" style="background-color:yellow">Job Description</th>
				<th class="text-center" style="background-color:yellow">Work Experience</th>
				<th class="text-center" style="background-color:yellow">Salary</th>
            </tr>
        </thead>
        <tbody>
        <?php


            include 'config.php';

            $sql ="select * from register";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>
           <tr style="color:black">
            <td class="py-2"><?php echo $rows['SNO.']; ?></td>
            <td class="py-2"><?php echo $rows['title']; ?></td>
            <td class="py-2"><?php echo $rows['keyskills']; ?></td>
            <td class="py-2"><?php echo $rows['location']; ?> </td>
            <td class="py-2"><?php echo $rows['jobdescription']; ?> </td>
			<td class="py-2"><?php echo $rows['experience']; ?> </td>
			<td class="py-2"><?php echo $rows['salary']; ?> </td>
              </tr>
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
	</center>
</body>
</html>