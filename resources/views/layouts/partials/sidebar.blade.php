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

    @if (URL::current() === 'http://127.0.0.1:8000/teacher')
        @include('Teacher.teacherView')
    @elseif(URL::current() === 'http://127.0.0.1:8000/teacher/create')
        @include('Teacher.TeacherCreate')
    @elseif(URL::current() === 'http://127.0.0.1:8000/subject')
        @include('Subject.subjectView')
    @elseif(URL::current() === 'http://127.0.0.1:8000/subject/create')
        @include('Subject.subjectCreate')
    @else
        @include('layouts.partials.dashboardSideBar')
    @endif
</div>
