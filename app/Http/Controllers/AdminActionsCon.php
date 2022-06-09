<?php

namespace App\Http\Controllers;

use App\Models\UserAction;
use Illuminate\Http\Request;

class AdminActionsCon extends BaseCon
{
   public function index(){
       $this->data['actions'] = UserAction::with('user')->get();

       return view('admin.actions.index', $this->data);
   }
}
