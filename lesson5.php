<?php
/*$contents = [
	[
		'firstName' => 'Иван',
		'lastName' => 'Иванов',
		'address' => 'Москва',
		'phone' => '111-111-1111'
	],
	[
		'firstName' => 'Иван',
		'lastName' => 'Иванов',
		'address' => 'Москва',
		'phone' => '111-111-1111'
	],
	[
		'firstName' => 'Иван',
		'lastName' => 'Иванов',
		'address' => 'Москва',
		'phone' => '111-111-1111'
	]

];

echo $content = json_encode($contents, JSON_UNESCAPED_UNICODE | JSON_ERROR_UTF8|JSON_PRETTY_PRINT);
*/

$contents = file_get_contents(__DIR__ . '/phonebook.json');
$contacts = json_decode($contents, true);

var_dump($contacts);
echo "<pre>";
print_r($contacts);


?>

<!--
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Lesson 5</title>
 
</head>
<body>
    <table style="border: 1px solid black;">
    	<tr>
    		<th>Имя</th>
    		<th>Фамилия</th>
    		<th>Адрес</th>
    		<th>Номер телефона</th>
    	</tr>
        
        //<?php 
			//$i=1;
        	//foreach ($contacts as $contact) { 
        //?>
    	<tr>
    		<td><?php// echo $contact['firstName']; ?></td>
    		<td>    		</td>
    		<td>    		</td>
    		<td>    		</td>
    	</tr>
    	<?php //$i++; ?> 
		<?php //} ?>

    </table>
</body>
-->