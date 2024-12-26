<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
class HomeController extends Controller
{


    public function seaviews()
    {
        return view('seaviews.index');
    }
    public function contact()
    {
        return view('contact.index');
    }
    public function rooms()
    {
        return view('rooms.index');
    }

  
    public function about()
    {
        return view('about.index');
    }
   
    public function room_details($id)
    {
        $room = Room::find($id);
        return view('home.room_details', compact('room'));
    }

    public function add_booking(Request $request, $id)
    {
        // Validate input
        $request->validate([
            'startdate' => 'required|date',
            'enddate' => 'required|date|after:startdate',
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);
            
        // Check room availability
        $room = Room::findOrFail($id);
        if (!$room->isAvailable($request->startdate, $request->enddate)) {
            return redirect()->back()->withErrors(['error' => 'Room is already booked please try different date.']);
        }
    
        // Create booking
        $booking = new Booking;
        $booking->room_id = $id;
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->start_date = $request->startdate;
        $booking->end_date = $request->enddate;
        $booking->save();
    
        return redirect()->back()->with('message', 'Room Booked Successfully.');
    }
}
