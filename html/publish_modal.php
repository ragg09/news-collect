
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="background-color: #141515;; border: 3px solid black;">
    <span class="close">&times;</span><br>
    <div id="myform">
        <center><h3>Upload Article Report</h3></center>
        <form action="publish.php" method="POST"  enctype="multipart/form-data">
            <table>
                <tr>
                    <td><label>Title</label></td>
                    <td><input type="text" name="title" required style="color: black; border-radius: 10px;"></td>
                </tr>
                <tr>
                    <td><label>Publisher</label></td>
                    <td><input type="text" name="publisher" required value="<?php echo $_SESSION['given_name'] . ' ' .$_SESSION['family_name']; ?>" style="color: black; border-radius: 10px;" ></td>
                </tr>
                <tr>
                    <td><label>Date</label></td>
                    <td><input type="text" name="date" required value="<?php echo date('Y-m-d'); ?>" style="color: black; border-radius: 10px;"></td>
                </tr>    
                <tr>
                    <td><label>Image</label></td>
                    <td><input type="file" name="image" required style=" border-radius: 10px;"></td>
                </tr>
                <tr>
                    <td><label>Content</label></td>
                    <td><textarea name="content" required style="color: black; max-width: 300px; min-width: 250px; max-height: 300px;"></textarea></td>
                </tr>
            </table>
            <br>
            <center><button type='submit' name='button_article' title="Upload"><img src='../image/publish_upload.png'></button></center>
        </form>
    </div>
  </div>

</div>

<!-- The Modal -->
<div id="myModal2" class="modal2">

  <!-- Modal content -->
  <div class="modal-content" style="background-color: #141515; border: 3px solid black;">
    <span class="close2">&times;</span><br>
    <div id="myform">
        <center><h3>Upload Audio Report</h3></center>
        <form action="publish.php" method="POST"  enctype="multipart/form-data">
            <table>
                <tr>
                    <td><label>Title</label></td>
                    <td><input type="text" name="title" required style="color: black; border-radius: 10px;"></td>
                </tr>
                <tr>
                    <td><label>Publisher</label></td>
                    <td><input type="text" name="publisher" required value="<?php echo $_SESSION['given_name'] . ' ' .$_SESSION['family_name']; ?>" style="color: black; border-radius: 10px;" ></td>
                </tr>
                <tr>
                    <td><label>Date</label></td>
                    <td><input type="text" name="date" required value="<?php echo date('Y-m-d'); ?>" style="color: black; border-radius: 10px;"></td>
                </tr>    
                <tr>
                    <td><label>Image</label></td>
                    <td><input type="file" name="image" required style=" border-radius: 10px;"></td>
                </tr>
                <tr>
                    <td><label>Content</label></td>
                    <td><input type="file" name="file" required style=" border-radius: 10px;"></td>
                </tr>
            </table>
            <br>
            <center><button type='submit' name='button_audio' title="Upload"><img src='../image/publish_upload.png'></button></center>
        </form>
    </div>
  </div>

</div>

<!-- The Modal -->
<div id="myModal3" class="modal3">

  <!-- Modal content -->
  <div class="modal-content" style="background-color: #141515; border: 3px solid black;">
    <span class="close3">&times;</span><br>
    <div id="myform">
        <center><h3>Upload Video Report</h3></center>
        <form action="publish.php" method="POST"  enctype="multipart/form-data">
            <table>
                <tr>
                    <td><label>Title</label></td>
                    <td><input type="text" name="title" required style="color: black; border-radius: 10px;"></td>
                </tr>
                <tr>
                    <td><label>Publisher</label></td>
                    <td><input type="text" name="publisher" required value="<?php echo $_SESSION['given_name'] . ' ' .$_SESSION['family_name']; ?>" style="color: black; border-radius: 10px;" ></td>
                </tr>
                <tr>
                    <td><label>Date</label></td>
                    <td><input type="text" name="date" required value="<?php echo date('Y-m-d'); ?>" style="color: black; border-radius: 10px;"></td>
                </tr>    
                <tr>
                    <td><label>Image</label></td>
                    <td><input type="file" name="image" required style=" border-radius: 10px;"></td>
                </tr>
                <tr>
                    <td><label>Content</label></td>
                    <td><input type="file" name="file" required style=" border-radius: 10px;"></td>
                </tr>
            </table>
            <br>
            <center><button type='submit' name='button_video' title="Upload"><img src='../image/publish_upload.png'></button></center>
        </form>
    </div>
  </div>

</div>

<script type="text/javascript">
    
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Get the modal
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
btn2.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}

// Get the modal
var modal3 = document.getElementById("myModal3");

// Get the button that opens the modal
var btn3 = document.getElementById("myBtn3");

// Get the <span> element that closes the modal
var span3 = document.getElementsByClassName("close3")[0];

// When the user clicks the button, open the modal 
btn3.onclick = function() {
  modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span3.onclick = function() {
  modal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
}


</script>
