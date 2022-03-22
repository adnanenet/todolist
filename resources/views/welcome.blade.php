@extends('layouts.app')
    
@section('content')
<div class="w-100 h-100 d-flex justify-content-center align-items-center">
    <div class="text-center" style=width:40%>
        <h1 class="diplay-2 text-white">Todo App</h1>
        <h2 class='text-white'>what next? Add something to your list!</h2>
        <form action="{{ route('todo')}}" method="post">
            @csrf
            <div class="input-group mb-3 w-100">
                <input name='task' type="text" class="form-control form-control-lg" name='title' placegolder="Type here.." aria-label="Recipient's username" aria-describedby="button-addon2">
                <div>
                    <button class="btn btn-success" type="submit" id="button-addon2">Add to the list</button>
                </div>
    
            </div>
        </form>
    </div>
    
    
</div>
@endsection