<div class="container flex flex-col w-7/12  text-center h-auto">
    <div class="flex justify-between w-full ms-12 mt-4 items-center ">
        <h1>Teacher Create</h1>

        <div>
            <button class="w-20 h-8 bg-green-200 rounded-lg">
                <a href="{{ route('teacher-View') }}">Back
                </a>
            </button>
        </div>
    </div>
    <div class="text-sm mt-4 mb-4">
        <label for="Name" class="me-2">Name :</label>
        <input class="h-8 bg-blue-100 border-none rounded-sm" type="text">
    </div>
    <div class="text-sm mt-4 mb-4">
        <label for="Name" class="me-2">Email :</label>
        <input class="h-8 bg-blue-100 border-none rounded-sm" type="email">
    </div>
    <div class="text-sm mt-4 mb-4">
        <label for="Name" class="me-2">Phone :</label>
        <input class="h-8 bg-blue-100 border-none rounded-sm" type="text">
    </div>
    <div class="text-sm mt-4 w-[300px] mx-auto  mb-4 flex justify-evenly">
        <label for="gender" class= "col-md-4 col-form-label text-md-right">{{ __('Gender :') }}</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gander" value="male">
            <label class="form-check-label" for="male">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gander" value="female">
            <label class="form-check-label" for="female">Female</label>
        </div>
    </div>
    <div class="text-sm mt-4 mb-4">
        <label for="Name" class="me-2">Date of Birth :</label>
        <input class="h-8 bg-blue-100 border-none rounded-sm" type="date">
    </div>
    <div class="text-sm mt-4 mb-4">
        <label for="Name" class="me-2">current Address :</label>
        <input class="h-8 bg-blue-100 border-none rounded-sm" type="text">
    </div>
    <div class="text-sm mt-4 mb-4">
        <label for="Name" class="me-2">Permanent Address :</label>
        <input class="h-8 bg-blue-100 border-none rounded-sm" type="text">
    </div>
    <div class="text-sm mt-4 mb-4">
        <label for="Name" class="me-2">Picture :</label>
        <input class="h-8 bg-blue-100 border-none rounded-sm" type="file">
    </div>
    <div>
        <button class="w-20 h-8 bg-blue-200 mb-4 rounded-lg">Submit</button>
    </div>
</div>
