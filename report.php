<head>
    <style type="text/css">
    #plant
    {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #plant td, #plant th
    {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #plant tr:nth-child(even){background-color: #f2f2f2;}

    #plant tr:hover {background-color: #ddd;}

    #plant th
    {
      padding-top: 20px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4CAF50;
      color: white;
    }
    #d2
    {
      padding: 20px;
    }
    #btnExport {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
 float: center;
}
.vertical-center {
  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
    </style>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
</head>

<body>

  <div class="container" id="d2">
   <h1 style="text-align: center;padding: 10px;">REPORTS ON ALL USERS</h1>

  <table id="user">

  <tr> <th> Reg id</th>
  <th>login id</th>
  <th>fname</th>
  <th>lname</th>
  <th>email</th>
  <th>phone no</th>
  </tr>

  <?php
    require('dbconnection.php');
    $q2="SELECT * FROM `tbl_register` ";
    $result=mysqli_query($con,$q2);
   // start a table tag in the HTML
  while ($row = mysqli_fetch_array($result)){
  if ($result->num_rows > 0) {
      // output data of each row

        echo "<tr><td>" . $row['Reg_id'] . "</td><td>" . $row['login_id'] . "</td><td>".$row['fname']."</td>
        <td>".$row['lname']."</td><td>".$row['email']."</td><td>".$row['phone']."</td></tr>";
      }
    }
      echo "</table>";

?></div>
<div style="padding: 20px;">
  <center><button class="btn" id="btnExport" ><i class="fa fa-download"></i> Print</button></center>



</div>
<?php

?>
<script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#d2')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("userdetails.pdf");
                }
            });
        });
    </script>
</body>
