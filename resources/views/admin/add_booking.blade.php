<h1>ADMIN.ADD_BOOKING</h1>

<form action=" {{ route('admin.bookingadd') }} " method="post">
    {{ csrf_field() }}
    <select name="which_room" id="">
        <option disabled selected> -- select a room -- </option>
        @foreach ($rooms as $r)
            <option value=" {{ $r['id'] }} "> {{ $r['room_number'] }} </option>
        @endforeach
    </select>
    <input type="text" name="booking_name" placeholder="Booking's name">
    Arrivo: <input type="date" name="arrival_date">
    Partenza: <input type="date" name="departure_date">

    <input type="submit" value="Save">
</form>