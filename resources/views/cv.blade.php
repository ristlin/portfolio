@extends('layout.body')

@section('title', 'CV')

@section('content')
    <div class="prose max-w-none">
        <div class="grid grid-cols-1 gap-10 md:grid-cols-3 text-left md:mx-0">
            <div class="col-span-1">
                <h3 class="underline underline-offset-4 text-sky-600">SUMMARY</h3>
                <p>I bring over 13 years of experience as a creative problem solver in STEM and finance, using 
                    a diverse set of skills as a writer, researcher, entrepreneur, and programmer. Launching a 
                    new product? Facing tough, unique challenges? Need help expressing your ideas? 
                    <strong>Hire me.</strong>
                </p>
                
                <h3 class="underline underline-offset-4 text-sky-600">EDUCATION</h3>
                <p>
                    Executive Master of Business Administration (2019)<br>
                    <strong>QUANTIC SCHOOL OF BUSINESS & TECHNOLOGY, WASHINGTON, DC </strong><br>
                    <hr class="my-0">
                    Bachelor of Science in Human Science (2010)<br>
                    <strong>GEORGETOWN UNIVERSITY, WASHINGTON, DC</strong>
                </p>

                <h3 class="underline underline-offset-4 text-sky-600">SKILLS</h3>
                <p>
                    @foreach ($skills as $skill)
                        <span id="skill" class="bg-slate-200 hover:bg-slate-600 hover:text-slate-50 hover:cursor-pointer p-1">{{ $skill }}</span>
                    @endforeach
                </p>
            </div>
            
            <div class="col-span-2">
                <h3 class="text-left underline underline-offset-4 text-sky-600">EXPERIENCE</h3>
                @include('experience.agru')
                @include('experience.freelance')
                @include('experience.tunnyl')
                @include('experience.sciencemag')
                @include('experience.thehoya')
                @include('experience.lombardi')
            </div>
        </div>
        
    </div>

    

@endsection