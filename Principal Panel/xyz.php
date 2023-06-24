
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>SM CODE</title>
    <link rel="stylesheet" href="css/style_1.css">
    <link rel="stylesheet" type="text/css" href="css/Bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style type="text/css">
     #one{
      padding-top: 50%;
     }
   </style>
<body>

<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<textarea name="editor1" id="one"></textarea>
<script src="js/tinymce.min.js"></script>
<script>
      CKEDITOR.replace( 'editor1' );
</script>
<script>
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".sidebarBtn");
  sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
    sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
  }
  else
    sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
  }
</script>

</body>
</html>
