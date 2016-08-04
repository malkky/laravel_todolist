@extends('layouts.master')

@section('title')
    Trending quotes
@endsection

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
@endsection

@section('content')
    <section class="quotes">
        <h1>Latest Quotes</h1>
        <article class="quote">
            <div class="delete"><a href="#">x</a></div>
            Quote text
            <div class="info">Created by <a href="#">Arjet </a>on ...</div>
        </article>
        Pagination
    </section>
    <section class="edit-quote">
        <h1>Add a Quote</h1>
        <form action="">
            <div class="input-group">
                <label for="">Your Name</label>
                <input type="text" name="author" id="author" placeholder="Your name">
            </div>
            <div class="input-group">
                <label for="quote">Your Quote</label>
                <textarea name="quote" id="quote" rows="5" placeholder="Quote"></textarea>
            </div>
            <button type="submit" class="btn">Submit Quote</button>
            <input type="hidden" name="_token" value="{{Session::token()}}">
        </form>
    </section>
@endsection