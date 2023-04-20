@props(['todos'])

@if (count($todos) === 0)
<p class="text-center text-lg font-bold">No todos found</p>
@else
<ul class=" border bg-gray-200 rounded-md space-y-1 overflow-hidden">
    @foreach($todos as $todo)
    <li class="flex items-center {{ $todo->completed ? 'text-white bg-cyan-600' : '' }} p-2">

        <form method="POST" action="{{ route('todos.update', $todo->id) }}">
            @csrf
            @method('PATCH')
            <div class="flex items-center">
                <input type="checkbox" name="completed" id="completed" onchange="this.form.submit()" {{ $todo->completed ? 'checked' : '' }} class="form-checkbox text-indigo-00 transition duration-150 ease-in-out mr-2 w-5 h-5 cursor-pointer accent-cyan-900">
            </div>
        </form>

        <div class="flex items-center justify-between w-full ">
            <div>
                <h2 class="font-semibold text-lg">{{$todo->title}}</h2>
                <p>{{$todo->description}}</p>
            </div>

            <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="m-0 mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 hover:text-red-600">
                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                    </svg>
                </button>
            </form>
        </div>
    </li>
    @endforeach
</ul>

@endif