<h1><?=$header?></h1>
<div>
    <table>
    <tr>
			<th>id</th>
			<th>type</th>
			<th>ссылка</th>
		</tr>
		<?php foreach ($pages as $page): ?>
		<tr>
			<td><?= $page['id']; ?></td>
			<td><?= $page['type']; ?></td>
			<td><a href="/furniture/<?= $page['id']; ?>/">ссылка на страницу</td>
		</tr>
		<?php endforeach; ?>
    </table>
</div>