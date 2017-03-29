<?php if ( is_array($addresses) && count($addresses) > 0 ) : ?>
<h1>Addresses</h1>
<ul>
<?php foreach( $Addresses as $row ) : ?>
    <tr>
        <td><?php echo $row['fullname']; ?></td>
        <td><?php echo $row['fullname']; ?></td>
        <td><?php echo $row['fullname']; ?></td>
        <td><?php echo $row['fullname']; ?></td>
        <td><?php echo $row['fullname']; ?></td>
        <td><?php echo $row['fullname']; ?></td>
    </tr>
<?php endforeach; ?>
</ul>
<?php endif; ?>