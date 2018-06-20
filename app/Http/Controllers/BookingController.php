<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Booking;

class BookingController extends Controller
{   
    //Metodo che seleziona tutte le righe presenti nella tabella Rooms,
    //e invia il risultato della query alla view indicata
    public function showRooms() {
        $rooms = Room::all();
        
        foreach ($rooms as $r) {
            $r['nr_of_bookings'] = Booking::where('room_id', $r['id'])->count();
            /* $r['nr_of_bookings'] = $this->roomDetails($r['id']); */
        }       

        return view('admin.rooms', ['all_rooms' => $rooms] ); 
    }

    //Metodo che riceve in ingresso l'id di ua stanza e restituisce il numero
    //di prenotazioni fatte per quella stanza    
    private function roomDetails($room_id) {

        $stanza = Room::find($room_id);        
        $manyBookings = Booking::where('room_id', $room_id)->count();        

        return $manyBookings;

    }

    public function showRoomBookings($idRoom) {
        $room = Room::find($idRoom);
        $bfr = $room->getBookings;
        /* dd($bfr); */
        return view('admin.bookings_by_room', ['bookings_for_room' => $bfr, 'this_room' => $room]);
        
    }

    public function deleteBooking($idBooking) {
        $booking = Booking::find($idBooking);
        dd($booking);

        return redirect()->route('admin.bookings_by_room');
        
    }

    public function getRoomsNumber() {
        $rooms = Room::all();      

        return view('admin.add_booking', ['rooms' => $rooms] ); 
    }

    public function addBooking(Request $request)
    {
        $new_booking = new Booking();

        $new_booking->bookings_name = $request->input('booking_name');

        $new_booking->arrivals = date('Y-m-d H:i:s', strtotime($request->input('arrival_date'))); 
        
        $new_booking->departures = date('Y-m-d H:i:s', strtotime($request->input('departure_date')));
        
        $new_booking->room_id = $request->get('which_room');

        dd($new_booking);
    }





}
