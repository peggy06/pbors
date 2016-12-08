<tr id="scheduleTemplate">
    {!! $schedule->setReserved(\Carbon\Carbon::createFromFormat('m/d/Y',$data['date'])->format('Y-m-d')) !!}
    <td id="bus-type">{{$schedule->bus_type}}</td>
    <td id="departure">{{$schedule->departure}}</td>
    <td id="seats-total">{{$schedule->seats}}</td>
    <td id="seats-remain">{{$schedule->seats_remaining}}</td>
    <td id="fare">{{$schedule->fare}}</td>
    <td>
        <a href="{{route('client.reservations.create',['schedule_id'=>$schedule->id,'date'=>$data['date']])}}" target="_blank">
            <span class="glyphicon glyphicon-ok-circle" style="font-size: 16px;"></span></a>
    </td>
</tr>