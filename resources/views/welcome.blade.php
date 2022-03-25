@extends('layouts.app')



@section('content')

<div class="w-100 h-100 d-flex justify-content-center align-items-center">
    <div class="text-center" style="width:40%">
        <h1 class="display-2 text-white">Todo App</h1>
        <h2 class="text-white pt-5">What next? Add something to your list!</h2>
        <form  action="{{ route("Todo") }}" method="POST">
            @csrf
            <div  class="input-group mb-3 w-100">
                <input  type="text" class="form-control form-control-lg" name='title' placeholder="Type here..." aria-label="Recipient's username" aria-describedby="button-addon2">
                <div>
                    <button class="btn btn-success btn-lg" type="submit" id="button-addon2">Add to this list </button>
                </div>

            </div>
        </form>

        <h2 class="text-white pt-2">My Todo List :</h2>
        <div class="bg-white">

        </div>
    </div>

</div>

@endsection