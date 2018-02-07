<?php
/*$contents = [
	[
		'firstName' => 'Иван',
		'lastName' => 'Иванов',
		'address' => 
		    [
		    	'city' => 'г.Москва', 
		    	'street' => 'ул.Маяковского',
		    	'house' => 'д.18', 
		    	'flat' => 'кв.156'
		    ],
		'phone' => '495-114-1141'
	],
	[
		'firstName' => 'Петр',
		'lastName' => 'Петров',
		'address' => [
		    	'city' => 'г.Москва', 
		    	'street' => 'ул.Подснежников',
		    	'house' => 'д.183', 
		    	'flat' => 'кв.16'
		    ],
		'phone' => '495-777-1131'
	],
	[
		'firstName' => 'Василий',
		'lastName' => 'Сидоров',
		'address' => [
		    	'city' => 'г.Новосибирск', 
		    	'street' => 'ул.Добролюбова',
		    	'house' => 'д.12', 
		    	'flat' => 'кв.1'
		    ],
		'phone' => '383-111-4611'
	]

];

echo $content = json_encode($contents, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
*/

$contents = file_get_contents(__DIR__ . '/phonebook.json');
$contacts = json_decode($contents, true);

//echo "<pre>";
//print_r($contacts);


?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Lesson 5</title>
  <style type="text/css">
      table {
        border-collapse: collapse; 
      }
      tr, td, th {
        border: 1px solid black; 
        text-align: center;
        padding: 5px;         
      }
  </style>
</head>
<body>
    <table>
    	<tr>
    		<th>Имя</th>
    		<th>Фамилия</th>
    		<th>Адрес</th>
    		<th>Номер телефона</th>
    	</tr>
        
        <?php 
        	foreach ($contacts as $contact) { 
        ?>
    	<tr>
    		<td ><?php echo $contact['firstName']; ?></td>
    		<td><?php echo $contact['lastName']; ?></td>
    		<td><?php echo $contact['address']['city'].', '.$contact['address']['street'].', '.$contact['address']['house'].', '.$contact['address']['flat']; ?></td>
    		<td><?php echo $contact['phone']; ?></td>
    	</tr> 
		<?php } ?>

    </table>
</body>
