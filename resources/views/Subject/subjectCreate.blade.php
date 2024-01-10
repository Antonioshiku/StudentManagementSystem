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
    <div class="text-sm mt-4 mb-4">
        <label for="Name" class="me-2">Subject Name :</label>
        <input class="h-8 bg-blue-100 border-none rounded-sm" type="text">
    </div>
    <div class="text-sm mt-4 mb-4">
        <label for="Name" class="me-2">Subject Code :</label>
        <input class="h-8 bg-blue-100 border-none rounded-sm" type="text">
    </div>
    <div class="text-sm mt-4 mb-4">
        <label for="Name" class="me-2">Subject Description :</label>
        <input class="h-8 bg-blue-100 border-none rounded-sm" type="text">
    </div>
    <div class="text-sm mt-4 mb-4">
        <label for="Assigned Teacher" class="me-2">Assign Teacher</label>
        <select name="cars" class="h-8 ps-2 bg-blue-100 border-none rounded-sm" id="cars">
            <option value="">-- Select Teacher --</option>
        </select>
    </div>
    <div>
        <button class="w-20 h-8 bg-blue-200 mb-4 rounded-lg">Submit</button>
    </div>

</div>
