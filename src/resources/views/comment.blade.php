@extends('layout')

<title>Comment</title>

@section('main_content')
    <h1>Here you can leave your comment!</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach

            </ul>
        </div>


    @endif
    <form method="post" action="/comment/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="Type your valid e-mail" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Type the topic" class="form-control"><br>
        <textarea name="message" id="message" class="form-control" placeholder="Type your comment"></textarea><br>
        <button type="submit" class="btn btn-success">Send</button>


    </form>
    <br>
    <h1>All comments</h1>
    @foreach($reviews as $element)
        <div class="alert alert-warning">
            <h3>{{$element->subject}}</h3>
            <b>{{$element->email}}</b>
            <p>{{$element->message}}</p>
        </div>




    @endforeach
@endsection
