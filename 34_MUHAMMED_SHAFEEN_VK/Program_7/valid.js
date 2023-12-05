
        function validateForm() {
            var fname = document.form.fname.value;
            var mob = document.form.mob.value;
            var email = document.form.email.value;

            if (fname == "") {
                alert("Enter First Name !!");
                document.form.fname.focus();
                return false;
            }
            else if(!(isNaN(fname))){
                alert("Enter Valid Name !!");
                document.form.fname.focus();
                return false;
            }

            if (mob == "") {
                alert("Enter Mobile number");
                return false;
            }
            else if (isNaN(mob)) {
                alert("Enter valid Mobile number");
                return false;
            }
            else if (mob.length != 10) {
                alert("Enter Mobile number with 10 digit");
                return false;
            }

            if (email == "") {
                alert("Enter email !!");
                document.form.user.focus();
                return false;
            }
            else if(!isNaN(email)){
                alert("Enter Valid email !!");
                document.form.fname.focus();
                return false;
            }

            
    }

    