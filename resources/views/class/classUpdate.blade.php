<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>



    {{-- bootstrap icons  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
    <title>Document</title>
    <style>
        /* Option 2: Import via CSS */
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css");
    </style>

</head>

<body>
    <div class="conatiner w-full h-full flex flex-col">
        <div class="container bg-blue-300  w-full h-10">
            <div class="w-11/12 flex h-full justify-between items-center">
                <div class="flex ms-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-hospital-fill" viewBox="0 0 16 16">
                        <path
                            d="M6 0a1 1 0 0 0-1 1v1a1 1 0 0 0-1 1v4H1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h6v-2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5V16h6a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-3V3a1 1 0 0 0-1-1V1a1 1 0 0 0-1-1zm2.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1zM2.25 9h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5A.25.25 0 0 1 2 9.75v-.5A.25.25 0 0 1 2.25 9m0 2h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25M2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zM13.25 9h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25M13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm.25 1.75h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5a.25.25 0 0 1 .25-.25" />
                    </svg>
                    <p class="ps-3 text-sm">School Management System</p>
                </div>
                <div class="flex w-20 justify-evenly">
                    <img src="{{ asset('images/1705479224.png') }}" class="w-5 rounded-full" alt="hh">
                    <p>Admin</p>
                </div>
            </div>
        </div>
        <div>
            <div class="container flex w-full h-[100vh] ">
                <div class="sidebar container w-56 bg-blue-300 h-[120vh] flex justify-center">
                    <div class="w-9/12 h-[240px]  mt-5 flex flex-col items-start justify-between">
                        <div class="flex items-center">
                            <i class="bi bi-house-fill"></i>
                            <a href="{{ route('home') }}" class="ps-2 pt-1">Dashboard</a>
                        </div>
                        <div>
                            <i class="bi bi-person-check-fill"></i>
                            <a href="{{ route('teacher-View') }}" class="ps-2 pt-1">Teachers</a>
                        </div>
                        <div>
                            <i class="bi bi-journal-text"></i>
                            <a href="{{ route('subject-View') }}" class="ps-2 pt-1">Subjects</a>
                        </div>
                        <div>
                            <i class="bi bi-menu-button-wide-fill"></i>
                            <a class="ps-2 pt-1">Classes</a>
                        </div>
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-mortarboard-fill mt-1" viewBox="0 0 16 16">
                                <path
                                    d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917z" />
                                <path
                                    d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466z" />
                            </svg>
                            <a class="ps-2">Student</a>
                        </div>
                    </div>
                </div>


                <div class="w-3/5 mx-auto">
                    <div class="container flex flex-col w-full  text-center h-auto">
                        <div class="flex justify-between w-full ms-12 mt-4 items-center ">
                            <h1>Class Update</h1>

                            <div>
                                <button class="w-20 h-8 bg-green-200 rounded-lg">
                                    <a href="{{ route('class-view') }}">Back
                                    </a>
                                </button>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('class-update', ['id' => $classRoom->id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="text-sm mt-4 mb-4">
                                <label for="Name" class="me-2">Name :</label>
                                <input name="class_name" value="{{ $classRoom->class_name }}"
                                    class="h-8 bg-blue-100 border-none rounded-sm" type="text">
                            </div>
                            @error('class_name')
                                <div class="text-sm text-center text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="text-sm mt-4 mb-4">
                                <label for="Name" class="me-2">Student :</label>
                                <input name="student" value="{{ $classRoom->student }}"
                                    class="h-8 bg-blue-100 border-none rounded-sm" type="number">
                            </div>
                            @error('student')
                                <div class="text-sm text-center text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="text-sm mt-4 w-20 flex mb-4 ms-[160px]">
                                <label for="Assigned Teacher" class="me-2 ">subject </label>
                                <select name="subject_id[]" multiple
                                    class="h-8   text-black bg-blue-100 border-none rounded-sm" id="subject">
                                    <option value="">Select Subject</option>
                                    @foreach ($subject as $subjects)
                                        <option class="text-black" value="{{ $subjects->id }}">
                                            {{ $subjects->SubName }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('subject_id')
                                <div class="text-sm text-center text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="text-sm mt-4 mb-4">
                                <label for="Assigned Teacher" class="me-2">Assign Teacher</label>
                                <select name="teacher_id"
                                    class="h-8 ps-2 text-black bg-blue-100 border-none rounded-sm">
                                    <option value="">-- Select Teacher --</option>
                                    @foreach ($teacher as $teachers)
                                        <option class="text-black" value="{{ $teachers->id }}">{{ $teachers->Name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('teacher_id')
                                <div class="text-sm text-center text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror


                            <div>
                                <button class="w-20 h-8 bg-blue-200 mb-4 rounded-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
<script type="text/javascript">
    new MultiSelectTag('subject') // id
</script>

</html>
