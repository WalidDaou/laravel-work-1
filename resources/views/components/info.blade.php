
<div class="flex flex-row gap-5">


<div class="flex flex-col">
    <label for="first_name">First Name</label>
    <input class=" border  py-2 pl-4 pr-3" placeholder="First name" id="first_name" type="text" name="first_name">
</div>
<div class="flex flex-col">
    <label for="last_name">Last Name</label>
    <input class=" border  py-2 pl-4 pr-3" placeholder="Last name" id="last_name" type="text" name="last_name">
</div>
</div>
<div class="flex flex-col mt-4 mb-4">
<label for="message">Message</label>
<input class=" border justify-items-start pl-4 pr-3 h-[100px]" id="message " placeholder="Message" type="text" name="message">
</div>

<button type="submit" class="w-[100px] border border-black">{{__('text.contact_submit')}}</button>
</div>