<?php
namespace App\Http\Controllers;
use App\Models\Incident;
use Illuminate\Http\Request;

class IncidentController extends Controller {
    public function index() {
        $incidents = Incident::latest()->get();
        return view('opslog', compact('incidents'));
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'severity' => 'required|string'
        ]);
        Incident::create($request->all());
        return redirect()->back();
    }
}
