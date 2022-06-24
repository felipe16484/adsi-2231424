@forelse ($users as $user)
    <tr class="bg-white border-b hover:bg-gray-50">
        <td class="w-4 p-4">
            <div class="flex items-center">
                <input id="checkbox-table-search-1" type="checkbox" class="chk w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
            </div>
        </td>
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
            {{ $user->fullname }}
        </th>
        <td class="px-6 py-4 md:table-cell hidden">
            {{ $user->email }}
        </td>
        <td class="px-6 py-4 md:table-cell hidden">
            <img src="{{ asset($user->photo) }}" alt="" width="60px">
        </td>
        <td class="px-6 py-4 md:table-cell hidden">
            {{ $user->role }}
        </td>
        <td class="px-6 py-4 md:table-cell hidden">
            @if ($user->active == 1)
                <button class="bg-green-600 p-2 rounded-md text-white w-8 h-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                </button>
            @else
                <button class="bg-red-800 p-2 rounded-md text-white w-8 h-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                    </svg>
                </button>
            @endif
        </td>
        <td class="px-6 py-8 flex items-center gap-1">
            <a href="{{ url('users/'.$user->id) }}" class="font-medium text-white bg-blue-900 p-2 rounded-md hover:bg-blue-800 hover:scale-105 transition-all duration-500 w-8 h-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="{{ url('users/'.$user->id.'/edit') }}" class="font-medium text-white bg-blue-900 p-2 rounded-md hover:bg-blue-800 hover:scale-105 transition-all duration-500 w-8 h-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                    </svg>
                </a>
                <form action="{{ url('users/'.$user->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="button" class="btn-delete font-medium text-white bg-red-800 p-2 rounded-md hover:bg-red-700 hover:scale-105 transition-all duration-500 w-8 h-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </form>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="7" class="text-center p-10 text-xl text-red-700">
            No results!
        </td>
    </tr>
@endforelse