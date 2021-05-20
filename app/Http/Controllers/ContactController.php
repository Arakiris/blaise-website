<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Album;
use App\Ip;
use App\CountVisitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getContact()
    {
        $albums = Album::all();

        $count_visitor = CountVisitor::FirstOrFail();
        $visitors = Ip::count();

        return view('contact', compact('albums', 'count_visitor', 'visitors'));
    }

    public function sendContact(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|bail',
            'phone' => 'required|bail',
            'email' => 'required|bail|email:rfc,dns',
            'subject' => 'required|bail',
            'content' => 'required',
        ], [
            'full_name.required' => '- Cần phải nhập họ tên<br>',
            'phone.required' => '- Cần phải nhập điện thoại<br>',
            'email.required' => '- Cần phải nhập email<br>',
            'email.email' => '- Cần phải nhập email<br>',
            'subject.required' => '- Địa chỉ email không hợp lệ<br>',
            'content.required' => '- Cần phải nhập nội dung<br>',
        ]);

        Mail::to('ngtnlien@gmail.com')->send(new ContactMail($validatedData['full_name'], $validatedData['phone'], $validatedData['email'], $validatedData['subject'], $validatedData['content']));

        $albums = Album::all();

        $count_visitor = CountVisitor::FirstOrFail();
        $visitors = Ip::count();

        return view('contact', compact('albums', 'count_visitor', 'visitors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
