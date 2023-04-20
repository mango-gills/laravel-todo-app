@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center h-screen">
    <div class="w-[500px] bg-white p-5 rounded-md text-black">

        <p class="text-2xl mb-2 font-extrabold">TODO's</p>

        <form action="{{ route('todos.store') }}" method="POST" class="mb-4">
            @csrf
            <div class="w-full space-y-2 mb-2">
                <input name="title" type="text" placeholder="Title" class="w-full border-blue-500 border-[1px] rounded-md p-2 outline-0 focus:outline-1 focus:outline-blue-700">

                @if ($errors->any())
                <div id="error-message" class="text-red-500 text-sm">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <textarea class="rounded-md border-blue-500 border-[1px] p-2 outline-0 w-full resize-none focus:outline-blue-700 focus:outline-1" name="description" id="description" placeholder="Description"></textarea>
            </div>
            <button type=" submit" class="bg-blue-600 text-white px-6 py-2.5 rounded-md hover:bg-blue-700 transition duration-150 ease-in-out active:bg-blue-800 w-full outline-0 focus:outline-1 focus:outline-indigo-600">Add</button>
        </form>

        <div class="flex justify-between">
            <div></div>
            <p>No. of Todos: {{count($todos)}}</p>
        </div>

        <x-todo-list :todos="$todos" />
    </div>

</div>
@endsection

<script>
    // Hide the error message after 5 seconds
    setTimeout(function() {
        var errorMessage = document.getElementById('error-message');
        if (errorMessage) {
            errorMessage.remove();
        }
    }, 3000);
</script>