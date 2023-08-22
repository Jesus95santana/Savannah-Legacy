<header>
    <div class="headerContainer">
        <figure class="topHeadImg"><img class="w-full" src="./img/headBanner.jpg" alt="Header Banner"></figure>
        <div class="allLogoContainer flex justify-between items-center flex-wrap max-w-6xl  m-auto" >
            <figure class="savLogo max-w-[180px] max-h-xs "><img src="./img/savlogo.jpg" alt="Savannah Logo"></figure>
            <figure class="savBanner ">
                <a href={{route('home')}}>
                    <img src="./img/savBanner.jpg" alt="Savannah Banner">
                </a></figure>
            <figure class=" max-w-[100px]">
                <img src="./img/facebook.png" alt="facebook Icon">
            </figure>
        </div>
        <nav>
            <ul class="headerMenu flex flex-wrap justify-center m-auto max-w-5xl">
                <li x-data="{open: false}" @mouseenter = "open = !open" @mouseleave = "open = !open" class="relative">
                    <a href={{route('aboutPage')}}>ABOUT THE ACADEMY</a>
                    <ul x-show="open" class="dropDown">
                        <li><a href={{route('faculty')}}>FACULTY & STAFF</a></li>
                        <li><a href="">CALENDAR</a></li>
                        <li><a href="">EMPLOYMENT</a></li>
                    </ul>
                </li>
                <li><a href="">ADMISSIONS</a></li>
                <li><a href="">ACADEMICS</a></li>
                <li><a href="">CAMPUS LIFE</a></li>
                <li><a href="">SUPPORT SLA</a></li>
                <li><a href="">NEWS & EVENTS</a></li>
                <li><a href="">CONTACT US</a></li>
            </ul></nav>
        <div class="divider"></div>
    </div>
{{--    <div x-data="{ isOpen: false }" @mouseenter="isOpen = true" @mouseleave="isOpen = false">--}}
{{--        <button @mouseenter="isOpen = true" @mouseleave="isOpen = false">Hover Me</button>--}}
{{--        <ul x-show="isOpen" class="dropdown">--}}
{{--            <li><a href="#">Option 1</a></li>--}}
{{--            <li><a href="#">Option 2</a></li>--}}
{{--            <li><a href="#">Option 3</a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}
</header>
