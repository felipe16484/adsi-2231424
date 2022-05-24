@extends('layouts.app2')

@section('content')

    <h2 class="text-4xl text-center my-10 font-semibold text-black">
        Conditional: if- elseif - else
    </h2>

    @php $ndayweek = date('w'); @endphp

    @if($ndayweek == 1)
        <h3 class="text-center text-2xl font-normal p-4"> Today: is Monday 😪</h3>
    @elseif($ndayweek == 2)
        <h3 class="text-center text-2xl font-normal p-4"> Today: is Tuesday 🙄</h3>
    @else
        <h3 class="text-center text-2xl font-normal p-4"> Today: is any day after Tuesday 🥴</h3>
    @endif

    {{-- ------------------ --}}

    <h2 class="text-4xl text-center my-10 font-semibold text-black">
        Conditional: switch
    </h2>

    @php $hour = date('H'); @endphp

    @switch($hour)
        @case(1)
        @case(2)
        @case(2)
        @case(4)
        @case(5)
        @case(6)
            <h3 class="text-center text-2xl font-normal p-4"> 
                It's too early 😪
            </h3>
            @break
        @case(7)
        @case(8)
        @case(9)
        @case(10)
        @case(11)
            <h3 class="text-center text-2xl font-normal p-4"> 
                Good morning guys 😎
            </h3>
            @break
        @case(12)
        @case(13)
        @case(14)
        @case(15)
        @case(16)
        @case(17)
        @case(18)
            <h3 class="text-center text-2xl font-normal p-4"> 
                Good evening guys 🤭
            </h3>
            @break
        @default
            <h3 class="text-center text-2xl font-normal p-4"> 
                Good night🙄
            </h3>
    @endswitch

    {{-- ------------------ --}}

    @php $colors = ['green', 'blue', 'red']; @endphp

    <h2 class="text-4xl text-center my-10 font-semibold text-black">
        Loops: foreach
    </h2>
    
    <ol class="list-decimal flex flex-col gap-4 justify-items-center items-center">
        @foreach ($colors as $color)
            <li class="text-2xl font-bold" style="color: {{$color}}">
                {{ $color }}
            </li>
        @endforeach
    </ol>

    {{-- ------------------ --}}

    @php $colors = ['green', 'blue', 'red']; @endphp

    <h2 class="text-4xl text-center my-10 font-semibold text-black">
        Loops: for
    </h2>

    <ul class="flex justify-center mx-auto flex-row gap-4">
        @for ($i = 0; $i < 50; $i++)    
            @if($i % 5 == 0)
                <li class="bg-emerald-600 text-white p-2 rounded-2xl">
                    {{ $i }}
                </li>
            @endif
        @endfor
    </ul>

    {{-- ------------------ --}}

    @php $i = 0; @endphp

    <h2 class="text-4xl text-center my-10 font-semibold text-black">
        Loops: while
    </h2>

    <ul class="flex justify-center mx-auto flex-row gap-4 pb-10">
        @while ($i <= 50)                
            @if($i % 10 == 0)
                <li class="bg-emerald-600 text-white p-2 rounded-2xl">
                    {{ $i }}
                </li>
            @endif

            @php $i++; @endphp
        @endwhile
    </ul>

    {{-- ------------------ --}}

    @php $colors = []; @endphp

    <h2 class="text-4xl text-center my-10 font-semibold text-black">
        Loops: forelse
    </h2>
    
    <ol class="flex flex-col gap-4 justify-items-center items-center pb-10">
        
        @forelse ($colors as $color)
            <li class="text-2xl font-bold" style="color: {{$color}}">
                {{ $color }}
            </li>
        @empty
            <li class="text-2xl font-bold" style="color: red;">
                The content is empty
            </li>
        @endforelse
    </ol>
    
@endsection