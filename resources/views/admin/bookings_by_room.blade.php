<h1>ADMIN.BOOKINGS_BY_ROOM</h1>

<h2> Room: {{ $this_room['room_number'] }} </h2>


<ul>
    @foreach ($bookings_for_room as $bookings)
        <li>
            Booking ID: {{ $bookings['id'] }},
            Bookings Name: {{ $bookings['bookings_name'] }},
            Arrival: {{ $bookings['arrivals'] }},
            Departure: {{ $bookings['departures'] }},
            <a href=" {{ route('admin.bookingdelete', ['idBooking' => $bookings['id']] ) }} ">Delete</a>
        </li>
    @endforeach
</ul>