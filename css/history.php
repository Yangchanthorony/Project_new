<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         /* Header Section */
 .header {
      
      color: white;
      margin-top: 200px;
      margin-left: 210px;
      font-size: 40px;
      font-weight: bold;
     
  }
  
  /* Content Section */
  .content-container {
      padding: 50px 15%;
  }
  
 
  
  p {
      font-size: 16px;
      line-height: 1.8;
      text-align: justify;
     font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
  }
  
  /* Background Pattern */
  .header-pattern {
      background: rgb(164, 7, 7);
      padding: 40px;
      position: relative;
  }
  
  .header-pattern::after {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      width: 30%;
      height: 100%;
      background-image: url('https://www.transparenttextures.com/patterns/cubes.png'); /* Example Pattern */
      opacity: 100;
  }
  
  @media (max-width: 768px) {
      .content-container {
          padding: 30px 5%;
      }
  }
    </style>
</head>
<body>
    
</body>
</html>