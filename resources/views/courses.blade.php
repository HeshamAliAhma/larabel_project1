@extends('layout.master')


@section('title','courses')
@section('titlePage','courses')

@section('content')

<div class="courses-page d-grid m-20 gap-20">
    <div class="course bg-white rad-6 p-relative">
        <img class="cover" src="{{asset('style/images/course-01.jpg')}}" alt="" />
        <img class="instructor" src="{{asset('style/images/team-1.png')}}" alt="" />
        <div class="p-20">
            <h4 class="m-0">Mastering Web Design</h4>
            <p class="description c-grey mt-15 fs-14">
                Master The Art Of Web Designing And Mocking, Prototyping And Creating Web Design Architecture
            </p>
        </div>
        <div class="info p-15 p-relative between-flex">
            <span class="title bg-blue c-white btn-shape">Course Info</span>
            <span class="c-grey">
                <i class="fa-regular fa-user"></i>
                950
              </span>
            <span class="c-grey">
                <i class="fa-solid fa-dollar-sign"></i>
                165
              </span>
        </div>
    </div>
    <div class="course bg-white rad-6 p-relative">
        <img class="cover" src="{{asset('style/images/course-02.jpg')}}" alt="" />
        <img class="instructor" src="{{asset('style/images/team-2.png')}}" alt="" />
        <div class="p-20">
            <h4 class="m-0">Data Structure And Algorithms</h4>
            <p class="description c-grey mt-15 fs-14">
                Master The Art Of Data Structure And Famous Algorithms Like Sorting, Dividing And Conquering
            </p>
        </div>
        <div class="info p-15 p-relative between-flex">
            <span class="title bg-blue c-white btn-shape">Course Info</span>
            <span class="c-grey"> <i class="fa-regular fa-user"></i> 1150</span>
            <span class="c-grey"><i class="fa-solid fa-dollar-sign"></i> 210</span>
        </div>
    </div>
    <div class="course bg-white rad-6 p-relative">
        <img class="cover" src="{{asset('style/images/course-03.jpg')}}" alt="" />
        <img class="instructor" src="{{asset('style/images/team-1.png')}}" alt="" />
        <div class="p-20">
            <h4 class="m-0">Responsive Web Design</h4>
            <p class="description c-grey mt-15 fs-14">
                Mastering Responsive Web Design And Media Queries And Know Everything About Breakpoints
            </p>
        </div>
        <div class="info p-15 p-relative between-flex">
            <span class="title bg-blue c-white btn-shape">Course Info</span>
            <span class="c-grey"> <i class="fa-regular fa-user"></i> 650</span>
            <span class="c-grey"><i class="fa-solid fa-dollar-sign"></i> 90</span>
        </div>
    </div>
    <div class="course bg-white rad-6 p-relative">
        <img class="cover" src="{{asset('style/images/course-02.jpg')}}" alt="" />
        <img class="instructor" src="{{asset('style/images/team-3.png')}}" alt="" />
        <div class="p-20">
            <h4 class="m-0">Mastering Python</h4>
            <p class="description c-grey mt-15 fs-14">
                Mastering Python To Prepare For Data Science And AI And Automating Things in Your Life
            </p>
        </div>
        <div class="info p-15 p-relative between-flex">
            <span class="title bg-blue c-white btn-shape">Course Info</span>
            <span class="c-grey"> <i class="fa-regular fa-user"></i> 950</span>
            <span class="c-grey"><i class="fa-solid fa-dollar-sign"></i> 250</span>
        </div>
    </div>
    <div class="course bg-white rad-6 p-relative">
        <img class="cover" src="{{asset('style/images/course-01.jpg')}}" alt="" />
        <img class="instructor" src="{{asset('style/images/team-3.png')}}" alt="" />
        <div class="p-20">
            <h4 class="m-0">PHP Examples</h4>
            <p class="description c-grey mt-15 fs-14">
                PHP Tutorials And Examples And Practice On Web Application And Connecting With Databases
            </p>
        </div>
        <div class="info p-15 p-relative between-flex">
            <span class="title bg-blue c-white btn-shape">Course Info</span>
            <span class="c-grey"> <i class="fa-regular fa-user"></i> 850</span>
            <span class="c-grey"><i class="fa-solid fa-dollar-sign"></i> 150</span>
        </div>
    </div>
    <div class="course bg-white rad-6 p-relative">
        <img class="cover" src="{{asset('style/images/course-02.jpg')}}" alt="" />
        <img class="instructor" src="{{asset('style/images/team-2.png')}}" alt="" />
        <div class="p-20">
            <h4 class="m-0">Data Structure And Algorithms</h4>
            <p class="description c-grey mt-15 fs-14">
                Master The Art Of Data Structure And Famous Algorithms Like Sorting, Dividing And Conquering
            </p>
        </div>
        <div class="info p-15 p-relative between-flex">
            <span class="title bg-blue c-white btn-shape">Course Info</span>
            <span class="c-grey"> <i class="fa-regular fa-user"></i> 1150</span>
            <span class="c-grey"><i class="fa-solid fa-dollar-sign"></i> 210</span>
        </div>
    </div>
    <div class="course bg-white rad-6 p-relative">
        <img class="cover" src="{{asset('style/images/course-03.jpg')}}" alt="" />
        <img class="instructor" src="{{asset('style/images/team-1.png')}}" alt="" />
        <div class="p-20">
            <h4 class="m-0">Responsive Web Design</h4>
            <p class="description c-grey mt-15 fs-14">
                Mastering Responsive Web Design And Media Queries And Know Everything About Breakpoints
            </p>
        </div>
        <div class="info p-15 p-relative between-flex">
            <span class="title bg-blue c-white btn-shape">Course Info</span>
            <span class="c-grey"> <i class="fa-regular fa-user"></i> 650</span>
            <span class="c-grey"><i class="fa-solid fa-dollar-sign"></i> 90</span>
        </div>
    </div>
    <div class="course bg-white rad-6 p-relative">
        <img class="cover" src="{{asset('style/images/course-01.jpg')}}" alt="" />
        <img class="instructor" src="{{asset('style/images/team-1.png')}}" alt="" />
        <div class="p-20">
            <h4 class="m-0">Mastering Web Design</h4>
            <p class="description c-grey mt-15 fs-14">
                Master The Art Of Web Designing And Mocking, Prototyping And Creating Web Design Architecture
            </p>
        </div>
        <div class="info p-15 p-relative between-flex">
            <span class="title bg-blue c-white btn-shape">Course Info</span>
            <span class="c-grey"> <i class="fa-regular fa-user"></i> 850</span>
            <span class="c-grey"><i class="fa-solid fa-dollar-sign"></i> 145</span>
        </div>
    </div>
    <div class="course bg-white rad-6 p-relative">
        <img class="cover" src="{{asset('style/images/course-04.jpg')}}" alt="" />
        <img class="instructor" src="{{asset('style/images/team-3.png')}}" alt="" />
        <div class="p-20">
            <h4 class="m-0">PHP Examples</h4>
            <p class="description c-grey mt-15 fs-14">
                PHP Tutorials And Examples And Practice On Web Application And Connecting With Databases
            </p>
        </div>
        <div class="info p-15 p-relative between-flex">
            <span class="title bg-blue c-white btn-shape">Course Info</span>
            <span class="c-grey"> <i class="fa-regular fa-user"></i> 850</span>
            <span class="c-grey"><i class="fa-solid fa-dollar-sign"></i> 150</span>
        </div>
    </div>
    <div class="course bg-white rad-6 p-relative">
        <img class="cover" src="{{asset('style/images/course-05.jpg')}}" alt="" />
        <img class="instructor" src="{{asset('style/images/team-3.png')}}" alt="" />
        <div class="p-20">
            <h4 class="m-0">Mastering Python</h4>
            <p class="description c-grey mt-15 fs-14">
                Mastering Python To Prepare For Data Science And AI And Automating Things in Your Life
            </p>
        </div>
        <div class="info p-15 p-relative between-flex">
            <span class="title bg-blue c-white btn-shape">Course Info</span>
            <span class="c-grey"> <i class="fa-regular fa-user"></i> 950</span>
            <span class="c-grey"><i class="fa-solid fa-dollar-sign"></i> 250</span>
        </div>
    </div>
</div>


@endsection

