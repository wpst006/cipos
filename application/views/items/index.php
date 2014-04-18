<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Quantity</th>
            <th>Price</th>
            <th></th>
        </tr>    
    </thead>
    <tbody>
        <?php foreach ($items as $item): ?>
            <tr>
                <td><?php echo $item['id'] ?></td>
                <td><?php echo $item['title'] ?></td>
                <td><?php echo $item['quantity'] ?></td>
                <td><?php echo $item['price'] ?></td>
                <td><a href="view/<?php echo $item['id'] ?>">Detail</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
