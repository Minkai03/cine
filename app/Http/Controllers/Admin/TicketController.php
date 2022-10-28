<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
class TicketController extends Controller
{
    
    public function index()
    {
        $tickets= Ticket::all();
        return view('admin.Ticket.index', compact('Tickets'));
    }

  
    public function create()
    {
        return view('admin.Ticket.create');
    }

  
    public function store(Request $request)
    {
        //
    }

 
    public function show(Ticket $ticket)
    {
        return view('admin.Ticket.show', compact('Ticket'));
    }

 
    public function edit(Ticket $ticket)
    {
        return view('admin.Ticket.edit', compact('Ticket'));
    }

    
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
