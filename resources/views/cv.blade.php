@extends('layout.body')

@section('title', 'CV')

@section('content')
    <div class="prose max-w-none">
        <div class="grid grid-cols-1 gap-10 md:grid-cols-3 text-left md:mx-0">
            <div class="col-span-1">
                <h3>ABOUT</h3>
                <p>I bring over 13 years of experience as a creative problem solver in STEM and finance, using 
                    a diverse set of skills including writing, researching, and programming. Add me to your team if 
                    you'd like a smart, data-driven leader to drive business objectives, create new products, 
                    and market to international audiences.
                </p>
                
                <h3>EDUCATION AND PROFICIENCIES</h3>
                <p>
                    Executive Master of Business Administration (2019)<br>
                    <strong>QUANTIC SCHOOL OF BUSINESS & TECHNOLOGY, WASHINGTON, DC </strong><br>
                    <hr class="my-0">
                    Bachelor of Science in Human Science (2010)<br>
                    <strong>GEORGETOWN UNIVERSITY, WASHINGTON, DC</strong>
                </p>

                <h3>SKILLS</h3>
                <p>
                    @foreach ($skills as $skill)
                        <span id="skill" class="bg-slate-200 hover:bg-slate-600 hover:text-slate-50 hover:cursor-pointer p-1">{{ $skill }}</span>
                    @endforeach
                </p>
            </div>
            
            <div class="col-span-2">
                <h3 class="text-left">EXPERIENCE</h3>
                <div class="grid grid-cols-4">
                    <div class="col-span-3 text-left">
                        AGRU America, Inc.
                    </div>
                    <div class="col-span-1 text-right">
                        2017-Present
                    </div>
                    <div class="col-span-4">
                        <strong>Technical Writer</strong> <br>
                        Responsible for creating technical and marketing content for articles, brochures, 
                        case studies, press releases, product releases, webinars, and podcasts. Contributed to 
                        corporate development effort by launching the Three Pillars Initiative, rewriting the 
                        corporate mission statement, and contributing to solutions-approach marketing.
                        <br>
                        <ul>
                            <li>
                                Wrote over 100 thought leadership articles on water conservation, environmental protection, and microbial-induced corrosion. Several reports were released on third-party publications. 
                            </li>
                            <li>
                                Created SEO-powered content for AGRU America's site-wide content refresh, creating hundreds of new leads each quarter.
                            </li>
                            <li>
                                Launched a new podcast series that interviewed internal leaders and leading partners such as the Ocean Cleanup. 
                            </li>
                        </ul> 
                    </div>
                </div>

                <div class="grid grid-cols-4 mt-4">
                    <div class="col-span-3 text-left">
                        Science Magazine
                    </div>
                    <div class="col-span-1 text-right">
                        2017-Present
                    </div>
                    <div class="col-span-4">
                        <strong>Copyeditor</strong> <br>
                        Responsible for creating technical and marketing content for articles, brochures, 
                        case studies, press releases, product releases, webinars, and podcasts. Contributed to 
                        corporate development effort by launching the Three Pillars Initiative, rewriting the 
                        corporate mission statement, and contributing to solutions-approach marketing.
                        <br>
                        <ul>
                            <li>
                                Wrote over 100 thought leadership articles on water conservation, environmental protection, and microbial-induced corrosion. Several reports were released on third-party publications. 
                            </li>
                            <li>
                                Created SEO-powered content for AGRU America's site-wide content refresh, creating hundreds of new leads each quarter.
                            </li>
                            <li>
                                Launched a new podcast series that interviewed internal leaders and leading partners such as the Ocean Cleanup. 
                            </li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    

@endsection