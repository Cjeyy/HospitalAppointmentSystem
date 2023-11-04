@include('layouts.main')

@section('content')

<div class="container-lg" style="margin: 0 auto;">
<h1 class="display-4 text-center mt-5 mb-5">Hospital Appointment System</h1>

<table class="table table-hover">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Department name</th>
<th scope="col">Appointment Date</th>
<th scope="col">Taken</th>
</tr>
</thead>
<tbody>
    @foreach($appointments as $appointment)
<tr>
<th scope="row">{{$appointment->id}}</th>
<td>{{$appointment->department_name}}</td>
<td>{{$appointment->appointment_date}}</td>

@if($appointment->taken)

<td>You can't book this</td>

@else 
    <td>
    <form method="post" action="{{ route('bookAppointment') }}">
        @csrf
        <input type="text" style="display:none" value="{{$appointment->id}}" name="appointment_id"/>
        <input type="text" style="display:none" value="{{$appointment->department_name}}" name="department_name"/>
        <input type="text" style="display:none" value="{{$appointment->appointment_date}}" name="appointment_date"/>
        <input type="submit" value="book" class="btn btn-primary"/>
    </form>
    </td>
@endif
</tr> 

@endforeach

</tbody>
</table>
    </div>
                                                                          
