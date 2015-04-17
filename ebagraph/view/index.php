<html>
<head><title>えばぐらふ</title>
</head>
<body>
    <table>
        <tr>
        <?php
        foreach($results as $result){ ?>
            <td><?php echo $result['id']; ?> </td>
            <td><?php echo $result['category']; ?></td>
            <td><?php echo $result['body'];   ?></td>
            </tr>
        <?php } ?>
        </table>

</body>


</html>