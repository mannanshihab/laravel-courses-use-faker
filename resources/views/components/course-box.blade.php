 <!-- course -->
 <div class="flex-col item-center p-4  mt-24 rounded-lg bg-veryLightGray md:w-1/3">
    <a href="{{route('course', $course->slug)}}">
    <img src="{{$course->image}}" class="rounded" alt="">
    <h5 class="text-lg text-left font-bold mt-10">
        {{$course->name}}
    </h5>
    <p class="flex">
        <img src="{{asset('laravel-courses/img/author.png')}}" class="w-10 rounded-sm" alt="">
        <span class="mt-2 ml-3">{{$course->submittedBy->name}}</span>
    </p>
    <div class="flex flex-col md:flex-row">
        <p class="flex-col bg-veryPaleRed md:w-1/2 m-4">
            {{$course->duration($course->duration)}}
        </p>
        <p class="flex-col bg-veryPaleRed md:w-1/2  m-4">
        {{$course->level($course->level)}}
        </p>
    </div>
    </a>
</div>