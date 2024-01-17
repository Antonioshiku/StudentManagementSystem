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
                    <img src="{{ asset('images/1705467376.png') }}" class="w-5 rounded-full" alt="hh">
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
                            <h1>Teacher Update</h1>

                            <div>
                                <button class="w-20 h-8 bg-green-200 rounded-lg">
                                    <a href="{{ route('teacher-View') }}">Back
                                    </a>
                                </button>
                            </div>
                        </div>
                        <div class="w-full h-auto flex justify-center">
                            <img class="w-24" src="{{ asset('images/' . $teacher->PhotoName) }}" alt="hh">

                        </div>
                        <form method="post" action="{{ route('teacher-update', ['id' => $teacher->id]) }}"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="text-sm mt-4 mb-4">
                                <label for="Name" class="me-2">Name :</label>
                                <input name="Name" value="{{ $teacher->Name }}"
                                    class="h-8 bg-blue-100 border-none rounded-sm" type="text">
                            </div>
                            @error('Name')
                                <div class="text-sm text-center text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="text-sm mt-4 mb-4">
                                <label for="Name" class="me-2">Email :</label>
                                <input name="Email" value="{{ $teacher->Email }}"
                                    class="h-8 bg-blue-100 border-none rounded-sm" type="email">
                            </div>
                            @error('Email')
                                <div class="text-sm text-center text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="text-sm mt-4 mb-4">
                                <label for="Name" class="me-2">Password :</label>
                                <input name="Password" value="{{ $teacher->Password }}"
                                    class="h-8 bg-blue-100 border-none rounded-sm" type="password">
                            </div>
                            @error('Password')
                                <div class="text-sm text-center text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="text-sm mt-4 mb-4">
                                <label for="Name" class="me-2">Phone :</label>
                                <input name="Phone" value="{{ $teacher->Phone }}"
                                    class="h-8 bg-blue-100 border-none rounded-sm" type="text">
                            </div>
                            @error('Phone')
                                <div class="text-sm text-center text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="text-sm mt-4 w-[300px] mx-auto  mb-4 flex justify-evenly">
                                <label for="gender"
                                    class= "col-md-4 col-form-label text-md-right">{{ __('Gender :') }}</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Gender" value="male">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Gender" value="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                            <div class="text-sm mt-4 mb-4">
                                <label for="Name" class="me-2">Date of Birth :</label>
                                <input name="DOB" value="{{ $teacher->DOB }}"
                                    class="h-8 bg-blue-100 border-none rounded-sm" type="date">
                            </div>
                            @error('DOB')
                                <div class="text-sm text-center text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="text-sm mt-4 mb-4">
                                <label for="Name" class="me-2">current Address :</label>
                                <input name="CurrentAddress" value="{{ $teacher->CurrentAddress }}"
                                    class="h-8 bg-blue-100 border-none rounded-sm" type="text">
                            </div>
                            @error('CurrentAddress')
                                <div class="text-sm text-center text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="text-sm mt-4 mb-4">
                                <label for="Name" class="me-2">Permanent Address :</label>
                                <input name="PermentAddress" value="{{ $teacher->PermentAddress }}"
                                    class="h-8 bg-blue-100 border-none rounded-sm" type="text">
                            </div>
                            @error('PermentAddress')
                                <div class="text-sm text-center text-red-500">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="text-sm mt-4 mb-4">
                                <label for="Name" class="me-2">Picture :</label>
                                <input name="Photo" class="h-8 bg-blue-100 border-none rounded-sm" type="file">
                                <input type="hidden" name="Photo" value="{{ $teacher->PhotoPath }}">
                            </div>
                            @error('Photo')
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

</html>
