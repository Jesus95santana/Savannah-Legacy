<header>
    <div class="headerContainer">
        <figure class="topHeadImg"><img class="w-full" src="./img/headBanner.jpg" alt="Header Banner"></figure>
        <div class="allLogoContainer flex justify-between items-center flex-wrap max-w-6xl  m-auto" >
            <figure class="savLogo max-w-[180px] max-h-xs "><img src="./img/savlogo.jpg" alt="Savannah Logo"></figure>
            <figure class="savBanner py-6">
                <a href={{route('home')}}>
                    <img src="./img/savBanner.jpg" alt="Savannah Banner">
                </a></figure>
            <figure class=" max-w-[50px]">
                <img src="./img/SLA-Facebook-Icon.svg" alt="facebook Icon">
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
                <li x-data="{open: false}" @mouseenter = "open = !open" @mouseleave = "open = !open" class="relative">
                    <a href={{route('admissions')}}>ADMISSIONS</a>
                    <ul x-show="open" class="dropDown">
                        <li><a href={{route('accreditation')}}>ACCREDITATION</a></li>
                        <li><a href="">TUITION & FEES</a></li>
                        <li><a href="">FINANCIAL AID</a></li>
                        <li><a href={{route('transportation')}}>TRANSPORTATION</a></li>
                        <li><a href="">FREQUENTLY ASKED QUESTIONS</a></li>
                        <li><a href="">APPLY NOW/ONLINE APPLICATION</a></li>
                    </ul>
                </li>
                <li><a href="">ACADEMICS</a></li>
                <li><a href="">CAMPUS LIFE</a></li>
                <li><a href="">SUPPORT SLA</a></li>
                <li><a href="">NEWS & EVENTS</a></li>
                <li><a href="">CONTACT US</a></li>
            </ul></nav>
        <div class="divider"></div>
    </div>
</header>
