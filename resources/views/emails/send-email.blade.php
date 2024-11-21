<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->

    <h1>Add Details for Send Email </h1>


<form action="{{route('sendEmail')}}" method="POST">

@csrf
@method('post')    

<input type="text" placeholder="Write your email here" name="to">
<br>
<br>
<input type="text" placeholder="Write your subject here"  name="subject">
<br>
<br>
<textarea type="text" placeholder="Write your message here" name = "email"></textarea>

<br>
<br>

<button type="submit"> Send Email </button>

</form>
</div>
