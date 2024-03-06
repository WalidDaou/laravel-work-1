<div>
    <div
     class="flex justify-center items-center text-2xl text-white  border-2 w-[280px] h-[220px]"
      [@if($box && $box->color)
        style="background-color: {{$box->color}}"
        @endif] 
        >
        {{ $box->box }}

    </div>
    <div class="w-[280px]">
        <p class="text-l"> {{ $box->text }}
        </p>
    </div>
</div>