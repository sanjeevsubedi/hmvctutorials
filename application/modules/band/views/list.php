<h2>Bands</h2>
<?php if (!empty($bands)): ?>
    <table>
        <?php foreach ($bands as $band): ?>
            <tr>
                <td><?php echo $band ?></td>
            </tr> 
        <?php endforeach; ?>
    </table>
<?php endif; ?>
