<div class="container flex flex-col w-7/12  text-center h-auto">
    <div class="flex justify-between w-full ms-12 mt-4 items-center ">
        <h1>Subject Create</h1>

        <div>
            <button class="w-20 h-8 bg-green-200 rounded-lg">
                <a href="{{ route('subject-View') }}">Back
                </a>
            </button>
        </div>
    </div>
    <form method="POST" action="{{ route('subject-store') }}">
        @csrf
        <div class="text-sm mt-4 mb-4">
            <label for="Name" class="me-2">Subject Name :</label>
            <input name="SubName" class="h-8 bg-blue-100 border-none rounded-sm" type="text">
        </div>
        <div class="text-sm mt-4 mb-4">
            <label for="Name" class="me-2">Subject Code :</label>
            <input name="SubCode" class="h-8 bg-blue-100 border-none rounded-sm" type="text">
        </div>
        <div class="text-sm mt-4 mb-4">
            <label for="Name" class="me-2">Subject Description :</label>
            <input name="SubDescription" class="h-8 bg-blue-100 border-none rounded-sm" type="text">
        </div>
        <div class="text-sm mt-4 mb-4">
            <label for="Assigned Teacher" class="me-2">Assign Teacher</label>
            <select name="teacher_id" class="h-8 ps-2 text-black bg-blue-100 border-none rounded-sm">
                <option value="">-- Select Teacher --</option>
                @foreach ($teacher as $teachers)
                    <option class="text-black" value="{{ $teachers->id }}">{{ $teachers->Name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button class="w-20 h-8 bg-blue-200 mb-4 rounded-lg">Submit</button>
        </div>
    </form>

</div>
