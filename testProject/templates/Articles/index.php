<?php 
echo $this->Html->css('datatables');
echo $this->Html->script('jquery');
echo $this->Html->script('typehead');
echo $this->Html->script('datatables');
echo $this->Html->script('app');
?>
<table id="myTable">
    <thead>
        <tr>
            <th>name</th>
            <th>requirements</th>
            <th>description</th>
            <th>ecpc</th>
            <th>click_url</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($results as $row) : 
    ?>   
    <tr>
        <td><?= $row['name'] ?></td>
        <td><?= $row['requirements'] ?></td>
        <td><?= $row['description'] ?></td>
        <td><?= $row['ecpc'] ?></td>
        <td><a target="_blank" href="<?= $row['click_url'] ?>"><?= $row['click_url'] ?></a></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
