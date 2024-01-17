<div class="flex flex-col w-full h-[100vh]">
    <div class="container flex w-11/12 items-center justify-between ">
        <div>
            <h1 class="ps-12 pt-3">Subject</h1>
        </div>
        <div class="mt-2">
            <button class="text-sm p-2 rounded-lg bg-green-500">
                <a href="{{ route('subject-create') }}">
                    <i class="bi bi-plus"></i>
                    Add New Subject</button>
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
                        Code
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Teacher
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subject as $subjects)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $subjects->SubName }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $subjects->SubCode }}

                        </td>
                        <td class="px-6 py-4">
                            <div class="text-center ms-3 rounded-full w-a h-5 bg-gray-300">
                                {{ $subjects->Teacher->Name }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            {{ $subjects->SubDescription }}
                        </td>
                        <td class="px-6 py-4">
                            <button class="w-auto h-auto bg-green-400 rounded-sm text-center">
                                <i class="bi bi-pencil-square p-1  text-white text-xs "></i>
                            </button>
                            <button class="w-auto h-auto bg-red-400 rounded-sm text-center">

                                <i class="bi bi-trash p-1  text-white text-xs "></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
