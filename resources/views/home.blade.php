@extends('layouts.app')

@section('content')
<section class="video-section">
    <div class="video-container">
        <video autoplay loop muted playsinline>
            <source src="{{ asset('videos/background.mp4') }}" type="video/mp4">
        </video>
        <div class="scroll-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 375 375" width="30" height="30">
                <path fill="#ffffff" d="M 23.890625 119.070312 L 178.777344 273.957031 C 181.027344 276.207031 184.019531 277.449219 187.199219 277.449219 C 190.382812 277.449219 193.371094 276.207031 195.625 273.957031 L 350.511719 119.070312 C 355.050781 114.53125 355.054688 106.769531 350.511719 102.222656 C 345.875 97.589844 338.15625 97.730469 333.664062 102.222656 L 191.414062 244.476562 C 189.082031 246.804688 185.316406 246.804688 182.988281 244.476562 L 40.738281 102.222656 C 36.203125 97.691406 28.429688 97.683594 23.890625 102.222656 C 19.386719 106.726562 19.386719 114.566406 23.890625 119.070312 Z M 23.890625 119.070312 " />
            </svg>
        </div>
    </div>
    <div class="content-outer">
        <div class="content">
            <h3>UPCOMING LAUNCH</h3>
            <h2>JELLYBOTS TECHNOLOGY</h2>
            <a href="{{ url('https://www.youtube.com/channel/UCZGkenxpkqYnBOZvZizCy5A') }}"><span>EXPLORE</span></a>
        </div>
    </div>
</section>
<section style="background-image: url('{{ asset('images/2.png') }}')">
    <div class="content-outer">
        <div class="content">
            <h3>BLUE FUTURE</h3>
            <h2>SMART SOLUTION</h2>
            <a href="{{ url('/solution') }}"><span>learn more</span></a>
        </div>
        <div class="scroll-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 375 375" width="30" height="30">
                <path fill="#ffffff" d="M 23.890625 119.070312 L 178.777344 273.957031 C 181.027344 276.207031 184.019531 277.449219 187.199219 277.449219 C 190.382812 277.449219 193.371094 276.207031 195.625 273.957031 L 350.511719 119.070312 C 355.050781 114.53125 355.054688 106.769531 350.511719 102.222656 C 345.875 97.589844 338.15625 97.730469 333.664062 102.222656 L 191.414062 244.476562 C 189.082031 246.804688 185.316406 246.804688 182.988281 244.476562 L 40.738281 102.222656 C 36.203125 97.691406 28.429688 97.683594 23.890625 102.222656 C 19.386719 106.726562 19.386719 114.566406 23.890625 119.070312 Z M 23.890625 119.070312 " />
            </svg>
        </div>
    </div>
</section>
<section style="background-image: url('{{ asset('images/5.png') }}')">
    <div class="content-outer">
        <div class="content">
            <h2>OUR MISSION</h2>
            <a href="{{ url('/mission') }}"><span>Let's do it!</span></a>
        </div>
        <div class="scroll-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 375 375" width="30" height="30">
                <path fill="#ffffff" d="M 23.890625 119.070312 L 178.777344 273.957031 C 181.027344 276.207031 184.019531 277.449219 187.199219 277.449219 C 190.382812 277.449219 193.371094 276.207031 195.625 273.957031 L 350.511719 119.070312 C 355.050781 114.53125 355.054688 106.769531 350.511719 102.222656 C 345.875 97.589844 338.15625 97.730469 333.664062 102.222656 L 191.414062 244.476562 C 189.082031 246.804688 185.316406 246.804688 182.988281 244.476562 L 40.738281 102.222656 C 36.203125 97.691406 28.429688 97.683594 23.890625 102.222656 C 19.386719 106.726562 19.386719 114.566406 23.890625 119.070312 Z M 23.890625 119.070312 " />
            </svg>
        </div>
    </div>
</section>
<section style="background-image: url('{{ asset('images/3.png') }}')">
    <div class="content-outer">
        <div class="content">
            <h2>INVEST WITH US</h2>
            <a href="{{ url('/invest') }}"><span>Contact</span></a>
        </div>
    </div>
</section>
@endsection
