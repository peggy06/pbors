<tr id="scheduleTemplate">
    <?php echo $schedule->setReserved(\Carbon\Carbon::createFromFormat('m/d/Y',$data['date'])->format('Y-m-d')); ?>

    <td id="bus-type"><?php echo e($schedule->bus_type); ?></td>
    <td id="departure"><?php echo e($schedule->departure); ?></td>
    <td id="seats-total"><?php echo e($schedule->seats); ?></td>
    <td id="seats-remain"><?php echo e($schedule->seats_remaining); ?></td>
    <td id="fare"><?php echo e($schedule->fare); ?></td>
    <td>
        <a href="<?php echo e(route('client.reservations.create',['schedule_id'=>$schedule->id,'date'=>$data['date']])); ?>" target="_blank">
            <span class="glyphicon glyphicon-ok-circle" style="font-size: 16px;"></span></a>
    </td>
</tr>