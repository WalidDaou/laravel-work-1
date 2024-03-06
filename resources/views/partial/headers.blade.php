

<div class="flex w-full">
    <div class="p-10 bg-black flex items-center  h-10 gap-4 w-full" >
        <a class="no-underline" href="/" style=" color : {{ request() -> is('/') ?  'white'  : 'gray' }}" >Home</a>
        <a class="no-underline" href="contact"  style="color : {{ request() -> is('contact') ?  'white'  : 'gray' }}"  >Contact us</a>
        <a class="no-underline" href="faqs" style="color : {{ request() -> is('faqs') ?  'white'  : 'gray' }}" >Faqs</a>
    </div>
</div>

