<x-guest-layout>
     <!-- hero section -->
     <section id="hero">
        <div class="container mx-auto ">
            <h1 class="text-3xl py-20 px-5 font-bold text-center md:text-5xl">
                The best Courses and Books on the Laravel ecosystem
            </h1>
            <p class="py-15 px-5 text-center text-darkGrayisBlue">
                Find the right books and courses on the Laravel framework and related topics to suite your level of expertise. Know how good a course is through your peers review and share your own too.
            </p>
            <div class="flex justify-center py-8 px-4">
                <!--Search Form-->
                <div class="flex w-[700px] gap-x-6">
                    <input type="search" name="keyword" placeholder="Enter keywords to search courses" class="w-4/5 bg-white h-12 border input-focus border-orange rounded-lg px-3.5 outline-none" required>
                    <button type="submit" class="bg-black btn-primary w-1/5 text-white rounded"> Search </button>
                </div>
            </div>
           
        </div>
        <!-- series -->
        <div class="container mx-auto flex flex-wrap mt-24 md:flex-row gap-5">
            @foreach ( $series as $item )
            <div class="flex flex-col item-center m-2 rounded-lg border-rose-800   bg-veryLightGray w-48 mx-auto md:w-1/6 ">
                <img src="{{$item->image}}" class="rounded p-5" alt="">
            </div>  
            @endforeach
        </div><!--end series -->
    </section><!-- /end hero section -->

    <!-- Featured Section -->
    <section id="Featured" class="py-10">
        <div class="max-w-6xl mx-auto mt-32 text-center">
            <h2 class="text-5xl bold text-center font-bold">Featured Courses</h2>
            <!-- Courses -->
            <div class="flex flex-wrap mt-24 md:flex-row">
                @foreach ($courses as $course )
                    @include('components.course-box')
                @endforeach
            </div>  
        </div>
        <div class="flex justify-center py-10">
            <a href="#" class="bg-black p-3 px-6 baseline rounded-full text-white">
                Browse all
            </a>
        </div>
    </section><!--/end Featured Section -->

    <!--Email Subscribe section-->
    <section id="subscribe" class="bg-red-300">
        <div class="w-full bg-update bg-no-repeat bg-cover h-[400px] py-0">
        <div class="container px-8 w-full flex flex-row justify-between items-center gap-5 mx-auto h-full">
            <div class="max-w-6xl w-full">
            <h2 class="heading-secondary"> Don’t miss any updates </h2>
            <p class="mt-3.5 text-base-primary hidden md:block"> We will be covering course reviews, comparison between the best courses, and will be sharing exclusive discounts with you on a monthly basis. </p>
            <div class="mt-6 md:mt-12 w-full flex flex-col sm:flex-row items-center gap-5">
                <input wire:model="email" type="email" placeholder="Your email address" class="md:max-w-[385px] input-focus w-full h-14 bg-white border border-orange rounded-lg px-3.5 text-base-primary text-[#262626] placeholder:text-current outline-none" required="">
                <button wire:click="subscribe" class="bg-black w-full sm:w-[135px] shrink-0 h-14 rounded-lg flex justify-center items-center border border-orange text-lg-primary font-medium text-orange-100 bg-button-hover hover:text-white transition-all duration-300"> Subscribe </button>
            </div>
            </div>
            <div class="justify-center hidden md:block">
            <img src="https://laravel-courses.com/img/letter.png" alt="letter" class="w-auto h-auto object-contain">
            </div>
        </div>
        </div>
    </section> <!--/end Email Subscribe section-->
</x-guest-layout>