
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	</head>
	
	<body>

    <div class="wrapper">
        <h1>Buy Your Way to a Better Education!</h1>
        <p>
            The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
        </p>
        <hr />
        <h2>Give Us Your Money</h2>


        <form action="../sucker.php" method="post">

            <div class="formGroup">
                <label for="nameInput">Name</label>
                <input type="text" name="name" class="input" id="nameInput" placeholder="Type here...">
            </div>

            <div class="formGroup">
                <label for="selector">Section</label>
                <select class="select" name="section" id="selector">
                    <option selected>Choose your option</option>
                    <option value="MA">MA</option>
                    <option value="MH">MH</option>
                </select>
            </div>

            <div class="formGroup">
                <label for="credit">Credit Card</label>
                <input type="text" name="creditCard" class="input" id="credit" placeholder="Type here...">
            </div>

            <div style="display: flex; align-items: center" class="formGroup">
                <input type="radio" name="card" class="radioBtn" value="Visa">
                <label class="radioLabel">Visa</label>


                <input type="radio" name="card" class="radioBtn" value="MasterCard">
                <label class="radioLabel">Master Card</label>
            </div>

            <div class="formGroup submitBtnContainer">
                <button>
                    Submit
                </button>
            </div>

        </form>

    </div>

	</body>
</html>
