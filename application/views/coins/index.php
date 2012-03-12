<div id="demo">
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" width="100%">
	<thead>
	<tr>
		<th>Type</th>
        <th>Description</th>
        <th>Value</th>
        <th>Year</th>
        <th>Grade</th>
    </tr>
	</thead>

<tbody>
<?php foreach ($coins as $coins_item): ?>

    <tr>
		<td class="center"><?php echo $coins_item['type'] ?></td>
		<td class="center"><?php echo $coins_item['description'] ?></td>
        <td class="center"><?php echo $coins_item['value'] ?></td>
        <td class="center"><?php echo $coins_item['year'] ?></td>
        <td class="center"><?php echo $coins_item['grade'] ?></td>
    </tr>

<?php endforeach ?>
</tbody>
</table>
</div>