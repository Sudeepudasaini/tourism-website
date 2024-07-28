<section class="booking" id="booking">
    <h1 class="heading-title"> Book your trip</h1>
    <form action="book_form.php" method="post" class="book-form">
<div class="flex">
    <div class="bookinputBox">
        <span>name:</span>
        <input type="text" placeholder="Enter your name" name="name">
    </div>
    <div class="bookinputBox">
        <span>email:</span>
        <input type="email" placeholder="Enter your email" name="email">
    </div>
    <div class="bookinputBox">
        <span>phone:</span>
        <input type="number" placeholder="Enter your number" name="phone">
    </div>
    <div class="bookinputBox">
      <span>address:</span>
      <input type="text" placeholder="Enter your address" name="address">
  </div>
    <div class="bookinputBox">
        <span>where to:</span>
        <input type="text" placeholder="Place you want to visit" name="location">
    </div>
    <div class="bookinputBox">
        <span>how many:</span>
        <input type="number" placeholder="number of guests" name="guests">
    </div>
    <div class="bookinputBox">
        <span>arrivals:</span>
        <input type="date"  name="arrivals">
    </div>
    <div class="bookinputBox">
        <span>leaving:</span>
        <input type="date" name="leaving">
        <!-- <button type="submit" value="submit" class="bookbtn" name="send" >Submit</button> -->
    </div>
    

</div>
<input type="submit" value="submit" class="bookbtn" name="send">
    </form>


</section>
