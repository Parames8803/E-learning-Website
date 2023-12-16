<?php include 'filesLogic.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Upload</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="row">
<form action="index.php" method="post" enctype="multipart/form-data">
<h3 style="color:black; font-size:20px;">Upload  Your <span style="color: #ff00aa; font-size:25px;">Project</span> Files</h3>
<input type="file" name="myfile"><br>
<button type="submit" name="save">Upload</button>
</form>
</div>
<div class="row">
<table>
   <thead>
      <th style="color:black;">ID</th>
      <th style="color:black;">FileName</th>
      <th style="color:black;">Size (in mb)</th>
      <th style="color:black;">Downloads</th>
      <th style="color:black;">Action</th>

   </thead>
   <tbody>
   <?php foreach($files as $file): ?>

   <tr>
      <td style="text-decoration:none; color:black;padding:8px;"><?php echo $file['id'];?></td>
      <td style="text-decoration:none; color:black;padding:8px;"><?php echo $file['name'];?></td>
      <td style="text-decoration:none; color:black;padding:8px;"><?php echo $file['size'] / 1000 . "KB";?></td>
      <td style="text-decoration:none; color:black;padding:8px;"><?php echo $file['downloads'];?></td>
      <td><a href="index.php ? file_id=<?php echo $file['id']?>"  style="text-decoration:none; color:white;padding:8px; background-color:black; border-radius:5px; margin-left:10px; ">Download</a></td>
   </tr>
   <?php endforeach ; ?>

    </tbody>

</table>
</div>
</body>
</html>