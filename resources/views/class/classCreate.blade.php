<div class="container flex flex-col w-7/12  text-center h-auto">
    <div class="flex justify-between w-full ms-12 mt-4 items-center ">
        <h1>ClassRoom Create</h1>

        <div>
            <button class="w-20 h-8 bg-green-200 rounded-lg">
                <a href="{{ route('class-view') }}">Back
                </a>
            </button>
        </div>
    </div>
    <form method="POST" action="{{ route('class-store') }}" enctype="multipart/form-data">
        @csrf
        <div class="text-sm mt-4 mb-4">
            <label for="Name" class="me-2">Name :</label>
            <input name="class_name" class="h-8 bg-blue-100 border-none rounded-sm" type="text">
        </div>
        @error('class_name')
            <div class="text-sm text-center text-red-500">
                {{ $message }}
            </div>
        @enderror
        <div class="text-sm mt-4 mb-4">
            <label for="Name" class="me-2">Student :</label>
            <input name="student" class="h-8 bg-blue-100 border-none rounded-sm" type="number">
        </div>
        @error('student')
            <div class="text-sm text-center text-red-500">
                {{ $message }}
            </div>
        @enderror
        <div class="text-sm mt-4 w-20 flex mb-4 ms-[160px]">
            <label for="Assigned Teacher" class="me-2 ">subject :</label>
            <select name="subject_id[]" multiple class="h-8   text-black bg-blue-100 border-none rounded-sm"
                id="subject">
                <option value="">Select Subject</option>
                @foreach ($subject as $subjects)
                    <option class="text-black" value="{{ $subjects->id }}">{{ $subjects->SubName }}</option>
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
            <select name="teacher_id" class="h-8 ps-2 text-black bg-blue-100 border-none rounded-sm">
                <option value="">-- Select Teacher --</option>
                @foreach ($teacher as $teachers)
                    <option class="text-black" value="{{ $teachers->id }}">{{ $teachers->Name }}</option>
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
