Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="cashierName" id='cashierName2' value='<?php echo $details[0]['cashier_name']; ?>' disabled="disabled"><br />
Username: <input type="text" name="cashierUsername" id='cashierUsername2' placeholder='<?php echo $details[0]['cashier_username']; ?>'><br />
Password: &nbsp;<input type="password" name="cashierPassword" id='cashierPassword2' placeholder='<?php echo $details[0]['cashier_password']; ?>'><br />

<input type="button" name="editCashier" id='buttonText' value="SAVE CHANGES" onclick='javascript:editSelectedCashier();'>