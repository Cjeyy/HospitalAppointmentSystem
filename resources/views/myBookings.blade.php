    @include('layouts.main')

    @section('content')

    <div class="container-lg" style="margin: 0 auto;">
    <h1 class="display-4 text-center mt-5 mb-5">My Bookings</h1>

    <table class="table table-hover">
    <thead>
    <tr>
    <th scope="col">Booking id</th>
    <th scope="col">Appointment id</th>
    <th scope="col">Department name</th>
    <th scope="col">Appointment date</th>
    <th>Want to Cancel?</th> 
    </tr>
    </thead>
    <tbody>
        
        @foreach($bookings as $booking)
    <tr>
    <th scope="row">{{$booking->id}}</th>
    <td>{{$booking->appointment_id}}</td>
    <td>{{$booking->department_name}}</td>
    <td>{{$booking->appointment_date}}</td>
    <!-- <td>Please call 123 456 789</td> -->
   <td>
    <form method="POST" action="{{ route('cancelBooking') }}">
        @csrf
        <input type="text" style="display:none" value="{{$booking->id}}" name="booking_id"/>
        <input type="text" style="display:none" value="{{$booking->appointment_id}}" name="appointment_id"/>
        <input type="submit" value="cancel" class="btn btn-danger">
    </form>
   </td>


    @endforeach

    </tbody>
    </table>
        </div>
                                                                            
