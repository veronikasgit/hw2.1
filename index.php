<?php

$json = file_get_contents(__DIR__ . '/content2.json');
$data = json_decode($json, true);

var_dump($data); 
?>

<html>
<head>
	<title>Homework 2.1</title>
</head>
<body>
	<table>

		<tread>
			<tr>
				<td>Имя</td>
				<td>Фамилия</td>
				<td>Адрес</td>
				<td>Телефон</td>
			</tr>
		</tread>

		<tbody>
		<?php foreach($data as $item) { ?>
			<tr>
				<td><?php echo $item['firstName']; ?></td>
				<td><?php echo $item['secondName']; ?></td>
				<td><?php foreach($item as $key=>$value) { ?>
					<ul>
						<li><?php echo $value['city']; ?></li>
						<li><?php echo $value['street']; ?></li>
						<li><?php echo $value['home']; ?></li>
					</ul>
					<?php } ?>
				</td>
				
			</tr>
		<?php } ?>
		</tbody>
	</table>

</body>
</html>








