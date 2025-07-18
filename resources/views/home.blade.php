<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- @vite('resources/css/app.css')
    @vite('resources/js/app.js') --}}
</head>
<body>
    <header>
       <h2>This is the header</h2>
    </header>
    

    <main>
        <h1>Home</h1>

    <form action="{{ route('formsubmitted')}}" method="POST">
        @csrf
        <input type="text" name="fullname" placeholder="Enter your full name" id="fullname" required><br><br>

        <input type="text" name="email" placeholder="Enter your email" id="email" required><br><br>

        <button type="submit">Submit</button>
    
    </form>

    </main>

    <footer>
        <h2>This is the footer</h2>
    </footer>
    
</body>
</html>






{{-- @extends('layouts.default')

@section('header')
    

@endsection
    

@section('mainContent')


@endsection


@section('footer')
    

@endsection --}}