<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="{{URL::asset('css/stylesheet.css')}}">
</head>
<body>


<ul class="topnav" id="myTopnav">
  <li><a class="active" href="{{url('/')}}">HOME</a></li>
  <li><a href="{{url('about')}}">ABOUT</a></li>
  <li><a href="{{url('support')}}">SUPPORT</a></li>
  <li><a href="{{url('submit')}}">SUBMIT PROBLEM</a></li>
</ul>

<div id="header">
  <a href="{{url('/')}}" class="logo"><img src="{{URL::asset('images/fitItLogoText.png')}}" style="max-width:60%; height:auto;"></a><p>
  
</div>



<center><p class="headingfont">Tell us what is happening.</p></center>


<div class="sectionBox">
          <p class="sectionTitle ">Submit your Problem</p>
          <p class="paraFont">Please fill out the following form to have your question reviewed by our staff. Once it is reviewed we will add your question to the database.</p>
          <form action="mailto:ashduggan@comcast.net" method="post" enctype="text/plain">
          Name(Optional):<br>
          <input type="text" name="name"><br class="paraFont"><p>
          E-mail:<br>
          <input type="text" name="mail"><br class="paraFont"><p>
          Support Question:<br>
          <textarea name="comments" id="comments" style="width: 350px; height: 100px;">
         Please supply a detailed explanation of what you need assistance with. We will review your problem and add it to the database accordingly. You will recieve an email with conformation that your question has been answered! Thank you!
          </textarea><br><br>
          <input type="submit" value="Send">
          <input type="reset" value="Reset">
</form>

</div>
<p>



<div id="footer">

    <p>Website &copy; Ashley Duggan Designs</p>
    </div>

</body>
</html>