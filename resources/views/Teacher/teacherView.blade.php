<div class="flex flex-col w-full h-[100vh]">
    <div class="container flex w-11/12 items-center justify-between ">
        <div>
            <h1 class="ps-12 pt-3">Teacher</h1>
        </div>
        <div class="mt-2">
            <button class="text-sm p-2 rounded-lg bg-green-500">
                <a href="{{ route('teacher-create') }}">
                    <i class="bi bi-plus"></i>
                    Add New Teacher </button>
            </a>
        </div>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
        <table class="w-11/12 mx-auto text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-blue-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Subject Code
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phone
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teacher as $teachers)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $teachers->Name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $teachers->Email }}

                        </td>
                        <td class="px-6 py-4">
                            <div class="flex">
                                @forelse($teachers->Subject as $subjects)
                                    <div class="p-1 w-8 rounded-full flex ms-3 h-auto bg-gray-200">
                                        {{ $subjects->SubCode }}
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            {{ $teachers->Phone }}

                        </td>
                        <td class="px-6 py-4">
                            <div class="flex">
                                <button class="w-auto h-auto bg-green-400 rounded-sm text-center">
                                    <a href="{{ url('teacher/edit/' . $teachers->id) }}">
                                        <i class="bi bi-pencil-square p-1  text-white text-xs "></i>
                                    </a>
                                </button>
                                <form action="{{ route('teacher-delete', ['id' => $teachers->id]) }}" class="ps-2"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-auto h-auto bg-red-400 rounded-sm text-center">
                                        <i class="bi bi-trash p-1  text-white text-xs "></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
