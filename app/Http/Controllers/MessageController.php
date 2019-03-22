<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store()
    {
        return Message::create(request()->all());
    } 

    public function index()
    {
        return Message::all();
    }

    public function show($id)
    {
        return Message::findOrFail($id);
    }

    public function update(Message $id)
    {
         $id->update(request()->all());
          return $id;
    }

    public function destroy(Message $id)
    {
        $id->delete();
        return 'ok';
    }
}
