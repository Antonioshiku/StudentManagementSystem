<div class="container ms-7">
    <h1 class="ps-4 pt-3">Dashboard</h1>
    <div class="container mt-6 grid grid-cols-4 gap-6">
        <div class="w-80 h-20 bg-gray-300 col-span-2 row-span-1 flex justify-evenly items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                class="bi bi-mortarboard-fill " viewBox="0 0 16 16">
                <path
                    d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917z" />
                <path
                    d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466z" />
            </svg>
            <div class="flex text-xl">
                <p>0</p>
                <h1 class="ps-1">Students</h1>
            </div>
        </div>
        <div class="w-80 h-20 bg-gray-300 col-span-2 row-span-1 flex justify-evenly items-center">
            <i class="bi bi-person-check-fill text-2xl"></i>
            <div class="flex text-xl">
                <p>{{ $teacherCount }}</p>
                <h1 class="ps-1">Teachers</h1>
            </div>
        </div>
        <div class="w-80 h-20 bg-gray-300 col-span-2 flex justify-evenly items-center row-span-2">
            <i class="bi bi-journal-text text-2xl"></i>
            <div class="flex text-xl">
                <p>{{ $subjectCount }}</p>
                <h1 class="ps-1">Subjects</h1>
            </div>
        </div>
        <div class="w-80 h-20 bg-gray-300 col-span-2 flex justify-evenly items-center row-span-2">
            <i class="bi bi-menu-button-wide-fill text-2xl"></i>
            <div class="flex text-xl">
                <p>{{ $classCount }}</p>
                <h1 class="ps-1">Classes</h1>
            </div>

        </div>
    </div>
</div>
