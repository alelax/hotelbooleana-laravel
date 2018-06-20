<h1>ADMIN.ROOMS</h1>

<a href=" {{ route("admin.newbooking") }} ">Add Booking</a>

<ul>
    @foreach ($all_rooms as $room)
        <li>
            Room ID: {{ $room['id'] }}, 
            Room Number: {{ $room['room_number'] }},
            Piano:  {{ $room['floor'] }},
            numero prenotazioni: {{$room['nr_of_bookings'] }},
            <a href=" {{ route('admin.bookings', ['idRoom' => $room['id']] ) }} ">show details</a>
        </li>
    @endforeach
</ul>