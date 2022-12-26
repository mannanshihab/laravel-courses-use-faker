<x-guest-layout>
   
<!-- series Section -->
<section id="Series" class="py-10">
    <div class="max-w-6xl mx-auto mt-5 text-center">
        <h2 class="text-5xl bold text-center font-bold">
            {{ $series ->name}}
        </h2>
        <!-- Courses -->
        <div class="flex flex-wrap mt-5 md:flex-row">
            @foreach ($courses as $course )
                @include('components.course-box', ['course'=> $course])
            @endforeach
        </div>  
    </div>
    <div class="max-w-6xl mx-auto mt-5">
        {{ $courses->links() }}
    </div>
</section><!--/end series Section -->

</x-guest-layout>