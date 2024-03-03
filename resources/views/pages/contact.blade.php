@extends("layouts.main")

@section("head")
<title>contact</title>
@endsection

@include(' partial\headers')


@section("content")




  <h1>Contact Us </h1>
<div class="flex flex-row gap-20 ml-20">
    
    <div>  
        <p>{{$contacts->address}}</p>
        <p>{{$contacts->number}}</p>
        <p>{{$contacts->info}}</p>
    </div>

<div>
    <h1>Get in touch </h1>
   <div>

       <div>
           <label for="">First Name</label>
           <input  class="border-black border-2"  type="text">
        </div>
        <div>
            <label for="">Last Name</label>
            <input class="border-black border-2" type="text">
        </div>
    </div>
    <div>
            <label for="">Massege</label>
            <input  class="border-black border-2" type="text">
    </div>
<button>submit</button>

</div> 

</div>



@endsection
