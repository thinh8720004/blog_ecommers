<?php
if (!empty($_GET['msg'])) {
    $msg = unserialize(urldecode($_GET['msg']));
    foreach ($msg as $key => $value) {
        if ($value == "Delete Order successfully!") {
            echo '<div class="alert alert-success" id="success-alert">';
        }
        else if ($value == "Delete Order failed!") {
            echo '<div class="alert alert-danger" id="danger-alert">';
        }
        else if ($value == "Order processed successfully!") {
            echo '<div class="alert alert-success" id="success-alert">';
        }
        else if ($value == "Order processed failed!") {
            echo '<div class="alert alert-danger" id="danger-alert">';
        }
            echo '<strong>' . $value . '</strong>';
            echo '</div>';
        } 
}
?>

<style>
    h4 {
        text-align: center;
        padding: 10px;
    }  

    .btn a {
        text-decoration: none;
        color: white;
    }
</style>
<h4>List Order</h4>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id Order</th>
            <th>Code Order</th>
            <th>Date Order</th>
            <th>Status Order</th>
            <th>Manager</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $i = 0;
        foreach($orders as $key => $order){
            $i++; ?>

    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $order['code_order'] ?></td> 
        <td><?php echo $order['date_order'] ?></td>
        <td><?php if ($order['status_order'] == 0) {
            echo 'Not yet received!';
        } else {
            echo 'Processed!';
        } ?></td>
        <td>
            <button type="button" class="btn btn-warning"><a href="<?php echo BASE_URL ?>order/detailsOrder/<?php echo $order['code_order'] ?>">View Orders</button>          
        </td>
    </tr>
<?php
} ?>
</tbody>
</table>