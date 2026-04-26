<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\Auth;

class LeadController extends Controller
{
    public function index () {
        $userCity = Auth::user()->city;
        $leadsAdmin = Lead::all();
        $leads = Lead::where('to', $userCity)->get();
        return view('leads.lead', ['leads' => $leads, 'leadsAdmin' => $leadsAdmin]);
    }

    public function create() {
        return view('leads.create');
    }

    public function store(Request $request) {
        $result = Lead::create([
           'name' =>  $request->name,
           'from' =>  $request->from,
           'to' =>  $request->to,
           'data' =>  $request->data,
           'price' =>  $request->price,
           'contact' =>  $request->contact,
           'link' =>  $request->link,
           'description' =>  $request->description,
           'qualidade' =>  $request->qualidade,
           'status' =>  $request->status,
        ]);

        if($result) {
            return redirect()->back()->with('leadSuccess', 'Criado com sucesso');
        } else {
            return redirect()->back()->with('leadError', 'Erro 500, estamos com problema no servidor, desulpa o transtorno arrumaremos o quanto antes');
        }
    }

    public function delete($id) {
        $lead = Lead::findOrFail($id); 
        $lead->delete();// apaga do banco

        return redirect()->back()->with('successDelete', 'Lead excluído com sucesso.');
    }
}