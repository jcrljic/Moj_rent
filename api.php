<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Api</title>
    <style>
        .table {
		background: #4e5944;
		border-collapse: separate;
		font-size: 14px;
		line-height: 30px;
		margin: 30px auto;
		text-align: left;
		width: 60%;
	}	

	th {
		background: #4e5944;
        text-align: center;
		border-left: 1px solid black;
		border-right: 1px solid black;
		border-top: 1px solid black;
		border-bottom: 1px solid black;
		color: black;
	    font-weight: bold;
        font-size: 16px;
		padding: 10px 0;
		position: relative;
		text-shadow: 0 1px 0 #000;	
	}

    tr, h1{
        text-align: center;
    }

    </style>
</head>
<body>
    
<?php
include('includes/navbar.php');
$url = 'https://date.nager.at/api/v2/publicholidays/2022/HR';
$data = file_get_contents($url);
$result = json_decode($data,true);

print '
<h1>Neradni dani rent-a-cara</h1>
			<table class="table">
				<thead>
					<tr>
						<th width="16">Praznik</th>
						<th width="16">Datum</th>
						<th width="16">Zemlja</th>
						<th width="16">Engleski naziv praznika</th>
						<th width="16">Tip praznika</th>
					</tr>
				</thead>
				<tbody>';
				foreach($result as $key => $value) { 			
				print '
				<tr>
					<td style="color:white">' . $result[$key]["localName"] . '</td>
					<td style="color:white">' . $result[$key]["date"] . '</td>
					<td style="color:white">' . $result[$key]["countryCode"] . '</td>
					<td style="color:white">' . $result[$key]["name"] . '</td>
					<td style="color:white">' . $result[$key]["type"] . '</td>
				</tr>';
			}
			print '
			</tbody>
		</table>'
?>
</body>
</html>