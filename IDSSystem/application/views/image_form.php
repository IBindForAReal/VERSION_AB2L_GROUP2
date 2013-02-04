<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
<HTML>
<HEAD>
<TITLE> Image Upload to BLOB field </TITLE>
</HEAD>
 
<BODY>
<FORM name='f1' action='<?php echo base_url();?>index.php/imageManager/checkUploadStatus' method='post' enctype='multipart/form-data'>
<table>
<tr><td> Image Upload Page </td></tr>
<tr><td> <input type='file' name='imgfile'/></td></tr>
<tr><td> <input type='submit' name='submit' value='Save'/> </td></tr>
</table>
</FORM>
</BODY>
</HTML>