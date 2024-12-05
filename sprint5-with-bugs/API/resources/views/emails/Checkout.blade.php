@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
    <svg style="width:280px" version="1.1" viewBox="140 425 800 160" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
        <style>
            .st0{fill:#8DC12F;}
            .st1{fill:#FFFFFF;}
            .st2{fill:#9DC83D;}
            .st3{fill:#1D6098;}
            .st4{fill:#5A585D;}
            .gear {
                transform-origin: 50% 50%;
                transform-box: fill-box;
                -webkit-animation: frames 10s infinite linear;
                animation: frames 10s infinite linear;
            }

            @keyframes frames {
                0% {
                    -webkit-transform: rotate(0deg);
                    transform: rotate(0deg);
                }
                100% {
                    -webkit-transform: rotate(359deg);
                    transform: rotate(359deg);
                }
            }
        </style>
        <path class="st0" d="m832.2 581h-194.8c-12.1 0-21.8-9.8-21.8-21.8v-19c0-12.1 9.8-21.8 21.8-21.8h194.8c12.1 0 21.8 9.8 21.8 21.8v19c0 12-9.8 21.8-21.8 21.8z"/>

        <path class="st1" d="m685.3 562.1-1-0.1-0.3-0.1-0.3-0.3-0.1-0.6-0.1-0.9v-0.4l-0.1-0.5v-0.9l0.1-0.5v-0.6l0.1-0.5v-0.4-0.4-0.5-0.5-0.5-1-0.5l0.1-0.5v-0.5l-0.1-0.4 0.1-0.5v-0.5-1l-0.1-0.5 0.1-0.5v-0.4l0.1-0.4v-0.6-0.4l0.1-0.5v-0.2l-0.1-0.5v-0.6-0.4-0.5-0.5-0.3-0.6l-0.1-0.3 0.1-1v-0.5-0.4-0.4-0.6l-0.1-0.4 0.1-0.4-0.1-0.6v-0.5-0.5l0.1-0.4-0.1-0.6v-0.9l0.2-0.3 0.3-0.3 0.4-0.1 0.9-0.1h0.5 0.4 0.6 0.3 0.5l0.5-0.1 0.5 0.1h0.3 0.5 0.5l0.5-0.1h0.6 0.4l0.4 0.1 0.5-0.1 0.5 0.1h0.5l0.9-0.1 0.9 0.1h0.4l0.5 0.1 0.9 0.2 0.5 0.1 0.3 0.1 0.5 0.1 0.5 0.2 1.2 0.6 0.3 0.2 0.4 0.3 0.5 0.2 1 1 0.2 0.3 0.3 0.3 0.2 0.4 0.3 0.4 0.2 0.5 0.4 0.8 0.1 0.4 0.4 1 0.1 0.3v0.6l0.1 0.3 0.2 1v0.4 1l-0.1 0.4v0.5 0.5 0.4 0.4l-0.1 0.6v0.5 0.5l-0.1 0.3 0.1 0.5v0.5l-0.1 0.6v0.4 1 0.8l-0.1 0.6-0.1 0.4v0.5l-0.2 0.5-0.1 0.4-0.2 0.5-0.1 0.4-0.5 0.9-0.2 0.3-0.2 0.4-0.3 0.5-1 0.9-0.3 0.3-0.4 0.3-0.3 0.3-0.4 0.3-0.3 0.2-0.4 0.1-0.3 0.3-0.4 0.1-0.5 0.2-0.4 0.1-0.5 0.1-0.4 0.1-0.6 0.1h-0.3l-0.6 0.1h-1l-0.4 0.2h-0.9-0.4-0.6l-0.4-0.1-0.4 0.1h-0.5l-0.6 0.1h-0.3l-0.5-0.1-0.4-0.1h-0.5l-0.4 0.1-0.4-0.1-0.5 0.1h-1l-0.5-0.1-0.4 0.1zm5.9-4.6h0.5 0.5 0.5 0.6l0.9-0.1h0.5 0.4l1-0.2 1-0.4 0.4-0.2 0.5-0.2 0.3-0.2 0.4-0.3 0.7-0.7 0.3-0.8 0.2-0.4 0.1-0.4 0.2-0.5 0.1-0.5v-0.5l-0.1-0.9v-0.5-0.3l0.1-0.5v-1-0.4-0.6-0.4-0.6-0.5-0.9-0.6-0.8l-0.1-0.5v-0.6l-0.2-0.3-0.1-0.5-0.2-0.5-0.2-0.3-0.2-0.4-0.3-0.3-0.3-0.4-0.3-0.2-0.5-0.3-0.3-0.2-0.4-0.2-0.5-0.2-0.4-0.2-0.6-0.1h-0.4-0.5l-0.4-0.1-1 0.1h-0.4-0.5l-0.5-0.1-0.6 0.1h-0.3l-1-0.1-0.5 0.1-0.6-0.1-0.3 0.1-0.1 0.1v0.4 0.5l-0.1 0.3 0.1 0.5v0.5 0.4 0.6l0.1 0.3v0.6 0.5 0.4l-0.1 0.5v0.4 0.5 0.5l0.1 0.5v0.3l-0.1 0.5v0.5l0.1 0.6-0.1 0.4v0.5 0.6l0.1 0.4-0.1 0.9 0.1 0.5v0.5 0.5 0.5l-0.1 0.4v0.4l0.1 0.6-0.1 0.4 0.1 0.4-0.1 0.5v0.5 0.4 0.5 0.3l0.1 0.1h0.4l1-0.1h0.4l0.6 0.1 0.1-0.1z"/>
        <path class="st1" d="m715.5 562.1-0.5-0.1-0.5 0.1-0.9-0.1-0.5 0.1h-0.6-0.5-0.5-0.8l-0.5-0.2-0.2-0.3-0.2-0.5v-0.8l0.1-0.6v-0.4l-0.1-0.5v-1.4l0.1-0.4-0.1-0.5 0.1-0.5v-0.6l0.1-0.4v-0.4-0.5-0.5l-0.1-0.5 0.1-0.4-0.1-0.6 0.1-0.4v-0.5l-0.1-0.6 0.1-0.4-0.1-0.6v-0.4-0.5-0.4-0.5l-0.1-0.6 0.1-0.4-0.1-0.5v-0.4-0.5l0.2-0.4 0.1-0.4-0.1-0.4v-1-0.5-0.5-0.4l-0.1-0.5v-0.6-0.4-0.9l0.1-0.4-0.1-0.6v-0.4-0.6-0.4l0.1-0.6v-0.4-0.9l0.2-0.4 0.3-0.4 0.3-0.1h1l0.4-0.1h0.5l0.5 0.1h0.5 0.5l0.9 0.1 0.4-0.1h0.5l0.4 0.1 0.5-0.1h0.4 0.5 0.5l0.4 0.1 0.6-0.1 0.5 0.1h0.4l0.6-0.1h0.5 0.4l0.4 0.1h0.5l0.4-0.1 0.5 0.1h0.5l0.4-0.1h0.6 0.5l0.9-0.1 0.9 0.1 0.5 0.1 0.5 0.7v0.9 0.5l-0.1 0.5 0.1 0.9-0.2 0.4-0.4 0.4-0.4 0.1-0.8-0.1h-1.4l-0.6 0.1h-0.4l-0.5-0.1-1 0.1h-0.4l-0.5-0.1-0.5 0.1-0.4-0.1-0.4 0.1-0.4 0.3h-0.5l-0.4-0.1h-0.9l-1 0.1h-1l-0.5-0.1-0.4 0.1h-0.3v0.4l-0.1 0.4v0.4 0.4 0.5l0.1 0.5v0.5l-0.1 0.4v0.5l0.1 0.5-0.1 0.4 0.1 0.5-0.1 0.4v0.5 0.4h0.1 0.3l0.6 0.1h0.3 0.5 0.6 0.5l0.4-0.1 0.4 0.1h0.6l0.5-0.1h0.4 1 0.4 0.5l0.4 0.1 0.5-0.1 0.5 0.1 0.5-0.1 0.4 0.1h0.5l0.9-0.1 0.4 0.2 0.4 0.3v0.3l0.1 1v0.4l-0.1 0.6v0.9l-0.1 0.5-0.2 0.3-0.5 0.2h-0.9-0.5-0.4-0.5l-0.5 0.1h-0.4l-0.5-0.1h-0.5-0.4-0.4-0.5-0.5l-0.4-0.1-0.5 0.1h-0.3l-0.5-0.1-0.5 0.1h-0.4l-0.5 0.1h-0.5-0.4-0.3l-0.1 0.1v0.3 0.5l-0.1 0.5v0.4 0.6l0.1 0.5v0.4 0.5l-0.1 0.4 0.1 0.5v0.9l-0.1 0.6 0.1 0.5-0.1 0.3 0.1 0.1h0.4l0.4-0.1 0.5 0.1h0.4 0.6l0.4 0.1 0.6-0.1h0.4l0.5 0.1h1l0.6-0.1h0.5 0.4 0.5l0.4 0.1 1.4-0.1 0.5 0.1 0.6-0.1h0.5l0.4 0.1 0.5-0.1h0.5 0.9l0.4 0.2 0.3 0.3 0.1 0.5 0.1 0.9v0.5l-0.1 0.4-0.1 0.9-0.1 0.5-0.3 0.3-1.4 0.1-0.4 0.1-0.5-0.1-0.4 0.1-0.8-0.3-0.6 0.1h-0.4l-0.4-0.1h-0.5-0.6l-0.4 0.1h-0.5-0.4l-0.5-0.1h-0.4l-0.6 0.1h-0.5-1.2-0.5-0.5-0.5-0.4-0.6z"/>
        <path class="st1" d="m754.5 543.7-0.3 0.3-0.2 0.4-0.2 0.5-0.2 0.4-0.3 0.3-0.1 0.5-0.2 0.5-0.3 0.4-0.3 0.3-0.1 0.5-0.6 0.7-0.6 1.2-0.3 0.3-0.2 0.4-0.3 0.5-0.2 0.4-0.3 0.3-0.2 0.5-0.1 0.3-0.3 0.4-0.2 0.4-0.4 0.4-0.8 1.6-0.3 0.3-0.6 0.2h-0.7-0.2l-0.9 0.1-0.5-0.2-0.3-0.3-0.5-0.7-0.2-0.4-0.2-0.5-0.2-0.3-0.3-0.5-0.6-1.2-0.3-0.3-0.2-0.4-0.3-0.4-0.2-0.4-0.2-0.3-0.3-0.4-0.4-0.8-0.5-0.8-0.3-0.4-0.2-0.4-0.2-0.3-0.2-0.5-0.2-0.3-0.3-0.4-0.2-0.5-0.4-0.8 0.1-0.3-0.2-0.3-0.2 0.1v0.3 0.2 0.6 0.3 0.4 0.4 1.4 0.4 0.6l0.1 0.8-0.1 0.6 0.1 0.5v0.3 0.5 0.5l-0.1 0.5 0.1 0.4-0.1 1 0.1 0.4v0.6 0.4l0.1 0.5-0.1 0.5 0.1 0.4v0.6 0.5l-0.1 0.4v0.5 0.5 0.4 0.5 0.5 0.9l-0.2 0.5-0.3 0.2-0.5 0.1-0.9 0.1-0.4 0.1-0.4-0.1h-0.9l-0.4-0.1-0.4-0.4v-0.3l-0.2-0.9 0.1-0.5v-0.4-0.6-0.5-0.4l0.1-0.5v-0.4-0.6-0.4l-0.1-1 0.1-0.4v-0.6l-0.1-0.3 0.1-0.6v-0.5-0.3l-0.1-0.6v-0.3-0.6-0.4l-0.1-0.6 0.1-0.4v-0.4-0.5-0.5l0.1-0.5v-0.9-0.5l-0.1-0.5 0.1-0.4-0.1-0.5v-0.4-0.5l0.1-0.4v-0.5-1l-0.1-0.4 0.1-0.5-0.1-0.4v-0.5-0.5-0.5l0.1-0.5v-0.6l-0.1-0.4v-0.6-0.4-0.6l0.1-0.8 0.1-0.4 0.3-0.4 0.4-0.1 0.9-0.1h0.4 0.4 0.9l0.4 0.1 0.4 0.2 0.3 0.4 0.4 0.8 0.3 0.3 0.4 0.8 0.2 0.5 0.3 0.4 0.2 0.4 0.3 0.3 0.2 0.4 0.2 0.5 0.2 0.4 0.2 0.3 0.6 1.2 0.3 0.4 0.4 0.7 0.3 0.5 0.2 0.4 0.2 0.3 0.3 0.4 0.2 0.4 0.3 0.4 0.2 0.4 0.3 0.4 0.9 1.8 0.2 0.3 0.2 0.5 0.2 0.4 0.3 0.4 0.2 0.6h0.2l0.4-0.7 0.3-0.4 0.1-0.4 0.3-0.4 0.2-0.4 0.3-0.3 0.2-0.5 0.2-0.4 0.3-0.4 0.3-0.5 0.3-0.3 0.2-0.5 0.4-0.8 0.3-0.3 0.2-0.4 0.3-0.4 0.1-0.5 0.3-0.3 0.2-0.6 0.2-0.3 0.3-0.4 0.2-0.4 0.4-0.4 0.1-0.5 0.4-0.4 0.2-0.4 0.2-0.5 0.3-0.3 0.2-0.6 0.3-0.3 0.2-0.4 0.2-0.5 0.6-0.7 0.2-0.3 0.3-0.2 0.5-0.1h0.9 0.5 0.4 0.9l0.4 0.2 0.4 0.3 0.2 0.4v0.9 0.5l0.1 0.3-0.1 0.5v1l0.1 0.5v0.4l-0.1 0.6v0.9l0.1 0.6v0.9l-0.1 0.5v0.4 0.5l0.1 0.5v0.4l-0.1 0.5 0.1 0.4v0.6 0.4l-0.1 0.5v0.5l0.1 0.4v0.5 0.4l0.1 0.6v0.4 1 0.5 0.5 0.6 0.3l0.1 0.6v0.4 0.5 0.6l-0.1 0.5v0.6l0.1 0.4v0.5 0.5 0.4l0.1 0.4v0.6l0.1 0.5v0.4l-0.1 0.5v0.5 0.9l-0.2 0.4-0.3 0.4h-0.3-1-1l-1-0.1h-0.4l-0.2-0.3-0.2-0.5v-0.9-0.4-0.5-0.4l0.1-0.5-0.1-0.5v-0.6-0.4-0.6-0.4-0.4-0.6-0.3l-0.1-0.6v-0.5-0.8-0.5-0.4-0.4l0.1-0.5v-0.4l-0.1-0.5 0.1-0.6v-0.5l-0.1-0.9 0.1-0.5v-0.4-0.4l0.1-0.6v-0.3l0.1-0.5v-0.5l0.1-0.5v-1l-0.2-0.1-1 0.2z"/>
        <path class="st1" d="m775.1 562.7h-0.4l-0.4-0.1-0.5-0.1h-0.4l-0.6-0.1h-0.5l-0.8-0.2-0.5-0.2-0.3-0.2-0.9-0.2-0.5-0.2-0.4-0.3-0.3-0.1-0.4-0.4-0.4-0.2-0.2-0.4-0.3-0.2-0.4-0.3-0.3-0.4-0.3-0.3-0.2-0.4-0.3-0.4-0.2-0.4-0.1-0.5-0.2-0.5-0.4-0.7v-0.5l-0.2-0.4-0.1-0.6v-0.9l-0.1-0.4v-1-0.4-0.5-1-0.5-1l-0.1-0.4v-0.4-0.5-0.6-1.8l0.1-0.6v-0.9-0.4-0.4l0.2-0.9 0.1-0.5v-0.5l0.2-0.3v-0.5l0.6-1.2 0.3-0.3 0.2-0.4 0.3-0.3 0.2-0.4 0.4-0.3 0.6-0.6 0.4-0.3 0.4-0.2 0.3-0.3 0.4-0.3 0.4-0.1 0.4-0.3 0.4-0.1 1-0.4 0.4-0.1 0.5-0.2 0.5-0.1h0.9l0.4-0.2 0.5 0.1h0.4l1-0.1h0.5 0.4l1 0.1 0.4 0.2h0.5l0.4 0.2 0.6 0.1 0.5 0.2h0.4l0.8 0.4 0.5 0.3 0.4 0.2 0.3 0.3 0.5 0.2 0.2 0.2 0.5 0.4 0.6 0.6 0.4 0.3 0.2 0.3 0.3 0.5 0.8 1.6 0.1 0.4 0.2 0.5 0.1 0.5 0.2 0.4v0.4l0.1 0.4 0.1 0.9v1 0.5 0.5 0.5 0.4l0.1 0.6v0.5 0.5 0.4l0.1 0.5-0.1 0.5v0.5 1.1 0.4l-0.1 0.5 0.1 0.4-0.1 1v0.5l-0.1 0.4v0.6 0.4 0.4l-0.2 0.5-0.1 0.5-0.2 0.5-0.2 0.4-0.1 0.4-0.3 0.5-0.2 0.4-0.3 0.2-0.2 0.4-0.3 0.4-0.4 0.3-0.6 0.6-0.5 0.2-0.3 0.2-0.5 0.3-0.4 0.3-0.3 0.2-0.4 0.2-0.5 0.2-0.9 0.2-0.4 0.1-0.5 0.2-0.5 0.1-0.4 0.1-0.5 0.1-0.9 0.1-0.5-0.1-1.1-0.4zm1.6-4.6 0.5-0.1 0.4-0.1 0.5-0.1 0.6-0.1 0.3-0.2 0.4-0.2 0.5-0.2 0.4-0.4 0.2-0.3 0.4-0.3 0.2-0.3 0.3-0.5 0.2-0.4 0.2-0.5v-0.5l0.1-0.3 0.1-0.6v-0.9l-0.1-0.5 0.1-0.6v-0.5-0.4-0.5-0.4-0.5l0.1-0.4-0.1-0.5v-0.5-1.1-0.5-0.4l-0.1-0.5 0.1-0.4v-0.9-0.5-0.5l-0.4-0.8-0.2-0.5-0.3-0.4-0.2-0.5-0.7-0.7-0.4-0.2-0.5-0.2-0.4-0.3-0.3-0.2h-0.5l-0.5-0.2h-0.5-0.5l-0.4-0.2-1.5 0.1-0.5 0.1h-0.6l-0.3 0.2-0.6 0.1-0.4 0.2-0.5 0.2-0.7 0.6-0.4 0.3-0.3 0.3-0.3 0.4-0.4 0.8-0.2 0.5v0.5l-0.2 0.4 0.1 0.6v0.9l-0.1 0.5v0.6 0.4 0.5l0.1 0.5-0.1 0.5 0.1 0.5-0.1 0.6v0.5l0.1 0.5v0.4 0.5 0.5 1 0.5 0.9l0.2 0.5v0.4l0.2 0.5 0.1 0.3 0.3 0.4 0.1 0.5 0.3 0.4 1 1 0.4 0.2 0.3 0.2 0.6 0.2 0.4 0.2 0.5 0.2h0.4l0.5 0.1h0.4 1l0.6-0.4z"/>

        <polygon class="st2" points="212.8 510.9 202 501 196.8 506.4 213.9 521.3 242.6 489.9 237.1 484.3"/>
        <g class="gear">
            <path class="st3" d="m271.7 515.1 20.9-3.3v-20.1l-20.9-4.2c-1.2-4.4-2.9-8.7-5.2-12.6l12.5-17.1-14.2-14.2-17.7 11.8c-3.9-2.2-8.1-4-12.4-5.2l-4.2-20.9h-20.1l-3.2 20.9c-4.5 1.2-8.8 3-12.8 5.2l-17.7-11.8-14.2 14.2 12.5 17.1c-2.2 3.9-4 8.1-5.2 12.5l-20.9 4.2v20.1l20.9 3.3c1.2 4.4 3 8.6 5.2 12.5l-11.8 17.7 14.2 14.2 17.1-12.5c3.9 2.2 8.1 4 12.6 5.2l3.2 20.8h20.1l4.2-20.9c4.4-1.2 8.4-2.9 12.3-5.1l17.1 12.5 14.2-14.2-11.8-17.7c2.3-3.9 4.1-8 5.3-12.4zm-51 27.3c-22.8 0-41.3-18.5-41.3-41.3s18.5-41.3 41.3-41.3 41.3 18.5 41.3 41.3-18.5 41.3-41.3 41.3z"/>
        </g>

        <path class="st3" d="m324.8 469.8h59v8.8h-25.1v50.1h-8.8v-50.1h-25.1v-8.8z"/>
        <path class="st3" d="M444.1,469.8v8.8h-45.2v16.2h36.4v8.8h-36.4v16.2h45.2v8.8H390v-59H444.1z"/>
        <path class="st3" d="m511.2 480.5v3.4h-8.8v-3.4c0-0.5-0.2-0.9-0.5-1.3-0.4-0.4-0.8-0.5-1.3-0.5h-37.7c-0.5 0-0.9 0.2-1.3 0.5-0.4 0.4-0.5 0.8-0.5 1.3v12.6c0 0.5 0.2 0.9 0.5 1.3 0.4 0.4 0.8 0.5 1.3 0.5h37.7c2.9 0 5.5 1 7.5 3.1 2.1 2.1 3.1 4.6 3.1 7.5v12.6c0 2.9-1 5.5-3.1 7.5-2.1 2.1-4.6 3.1-7.5 3.1h-37.7c-2.9 0-5.5-1-7.5-3.1-2.1-2.1-3.1-4.6-3.1-7.5v-3.4h8.8v3.4c0 0.5 0.2 0.9 0.5 1.3 0.4 0.4 0.8 0.5 1.3 0.5h37.7c0.5 0 0.9-0.2 1.3-0.5 0.4-0.4 0.5-0.8 0.5-1.3v-12.6c0-0.5-0.2-0.9-0.5-1.3-0.4-0.4-0.8-0.5-1.3-0.5h-37.7c-2.9 0-5.5-1-7.5-3.1-2.1-2.1-3.1-4.6-3.1-7.5v-12.6c0-2.9 1-5.5 3.1-7.5 2.1-2.1 4.6-3.1 7.5-3.1h37.7c2.9 0 5.5 1 7.5 3.1 2 2 3.1 4.5 3.1 7.5z"/>
        <path class="st3" d="M517,469.8h59v8.8h-25.1v50.1h-8.8v-50.1H517V469.8z"/>
        <path class="st4" d="m640.7 481.9v5.5h-12.9v-4.8h-33.4v10.3h34.2c3.3 0 6.2 1.2 8.6 3.6s3.6 5.2 3.6 8.6v11.6c0 3.3-1.2 6.2-3.6 8.6s-5.2 3.6-8.6 3.6h-34.7c-3.3 0-6.2-1.2-8.6-3.5s-3.6-5.2-3.6-8.6v-5.5h12.7v4.8h33.4v-10.3h-34c-3.3 0-6.2-1.2-8.6-3.5s-3.6-5.2-3.6-8.6v-11.6c0-3.4 1.2-6.3 3.6-8.6s5.2-3.5 8.6-3.5h34.7c3.3 0 6.2 1.2 8.6 3.6 2.4 2.1 3.6 5 3.6 8.3z"/>
        <path class="st4" d="m682.5 493.6 19.9-23.8h13.2v59h-12.8v-39.6l-20.3 24.2-20.4-24.2v39.5h-12.7v-59h13.1l20 23.9z"/>
        <path class="st4" d="m725.5 528.8v-59h12.8v59h-12.8z"/>
        <path class="st4" d="M742.1,469.8h59v12.8H778v46.2h-12.8v-46.2h-23.1V469.8z"/>
        <path class="st4" d="M854.8,469.8h12.7v59h-12.7v-23.1H820v23.1h-12.7v-59H820v23.1h34.8V469.8z"/>
</svg>
@endcomponent
@endslot

{{-- Body --}}
# Hello {{ $name }},

Thanks for your order.

@component('mail::table')
| Amount       | Product         | Price | Total |
| :--------- | :------------- | :------------- | :------------- |
@foreach ($items as $item)
| {{ $item['quantity'] }} | {{ $item['name'] }} {{ ($item['is_rental'] === 1) ? " (For rent)": "" }} | $ {{ number_format($item['price'],2) }} | $ {{ number_format($item['total'],2) }} |
@endforeach
|  |  |  | $ {{ number_format($total,2) }} |
@endcomponent

You can review your invoice in your account's "Invoices" section by clicking "My account" on our shop.

Best regards,<br>
Team Practice Software Testing<br>


{{-- Footer --}}
@slot('footer')
@component('mail::footer')
    © @php echo date("Y"); @endphp . All rights reserved.
@endcomponent
@endslot
@endcomponent
