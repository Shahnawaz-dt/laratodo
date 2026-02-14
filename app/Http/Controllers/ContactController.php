<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('contacts_index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|max:255',
            'email' => 'required|email|unique:contacts',
            'phone' => 'nullable|max:20',
        ]);

        Contact::create($request->only(['name', 'email', 'phone', 'address']));
        return redirect()->route('contacts.index')->with('success', 'Contact added successfully!');
    }

    public function show(Contact $contact)
    {
        return view('contacts_show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('contacts_edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name'  => 'required|max:255',
            'email' => 'required|email|unique:contacts,email,' . $contact->id,
        ]);

        $contact->update($request->only(['name', 'email', 'phone', 'address']));
        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully!');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully!');
    }
}
