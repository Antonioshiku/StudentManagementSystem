<div class="flex flex-col w-full h-[100vh]">
    <div class="container flex w-11/12 items-center justify-between ">
        <div>
            <h1 class="ps-12 pt-3 font-bold">Class</h1>
        </div>
        <div class="mt-2">
            <button class="text-sm p-2 rounded-lg bg-green-500">
                <a href="{{ route('class-create') }}">
                    <i class="bi bi-plus"></i>
                    Add New Class </button>
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
                        Student
                    </th>
                    <th scope="col" class="px-9 py-3">
                        Subject
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Teacher
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach ($classRoom as $classRooms)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                        <td class="px-6 py-4">
                            {{ $classRooms->class_name }}

                        </td>

                        <td class="px-9 py-4">

                            {{ $classRooms->student }}

                        </td>
                        <td class="px-6 py-4">
                            <div class="flex">
                                @foreach ($classRooms->subject_id as $subject)
                                    <div
                                        class="p-1 w-8 rounded-full flex justify-center items-center ms-2 h-auto bg-gray-200">
                                        {{ $subject }}
                                    </div>
                                @endforeach
                            </div>
                        </td>
                        <td class="px-8 py-4">
                            {{ $classRooms->Teacher->Name }}

                        </td>
                        <td class="px-6 py-4">
                            <div class="flex">
                                <button class="w-auto h-auto bg-green-400 rounded-sm text-center">
                                    <a href="{{ route('class-edit', ['id' => $classRooms->id]) }}">
                                        <i class="bi bi-pencil-square p-1  text-white text-xs "></i>
                                    </a>
                                </button>
                                <button class="w-auto ms-2 h-auto bg-red-400 rounded-sm text-center DeleteBu">
                                    <i class="bi bi-trash p-1  text-white text-xs "></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
