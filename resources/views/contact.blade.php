
@extends('layouts.master')
@section('content')
@include('header')  


<section class="sectionRight">
  <h2>Contact</h2>
  <form action="displayContactInfo.php" method="post" name="form1" id="form1">
    <label for="name">Name:</label>
    <br>
    <input name="name" type="text" required class="formStyle" id="name" form="form1">
    <br>
    <label for="email">Email:</label>
    <br>
    <input name="email" type="email" required class="formStyle" id="email" form="form1">
    <br>
    <br>
<!--     <label for="mainInterest">Main interest</label>
    <br>
    <select name="mainInterest" id="mainInterest">
        <option value="None" selected>Other</option>
        <option value="WebDevelopment">Web Development</option>
        <option value="Photography">Photography</option>
        <option value="GraphicArts">Graphic Arts</option>
    </select> -->
   <br>
   <br>
    <input type="submit" class="formStyle" name="submit" id="submit" value="Submit">
    <br>
    &nbsp;
  </form>

</section>

<!-- <aside class="asideLeft">

  <a class="twitter-timeline" data-width="100%" data-height="500" href="https://twitter.com/paultrani">Tweets by paultrani</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

</aside> -->
@endsection


