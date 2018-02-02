<script>
          
    function myFunction() {
            var firstName = document.getElementById("firstName").value;
            var lastName = document.getElementById("lasttName").value;
            var DOB = document.getElementById("dateOfBirth").value;
            var address = document.getElementById("address").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
           
            // Returns successful data submission message when the entered information is stored in database.
            var dataString = 'name1=' + firstName +'lastName1='+ lastName+'dateOfBrith1='+DOB+'address1='+address+'&email1=' + email + '&password1=' + password;
            if (firstName == '' ||lastName == ''||DOB == ''||address == ''|| email == '' || password == '' || contact == '') {
            alert("Please Fill All Fields");
            } else {
            // AJAX code to submit form.
            $.ajax({
            type: "POST",
            url: "registercon.php",
            data: dataString,
            cache: false,
            success: function(html) {
            alert(html);
            }
            });
            }
return false;
}
         </script>