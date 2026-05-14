 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Information</title>

  <style>

    body{
      margin:0;
      padding:0;
      font-family:Arial, sans-serif;
      background:#f2f2f2;
      display:flex;
      justify-content:center;
      align-items:center;
      min-height:100vh;
    }

    .info-box{
      width:500px;
      background:white;
      padding:30px;
      border-radius:12px;
      box-shadow:0 4px 15px rgba(0,0,0,0.1);
    }

    .info-box h1{
      text-align:center;
      margin-bottom:25px;
      color:#333;
    }

    .info{
      margin-bottom:18px;
      font-size:18px;
      color:#555;
      line-height:1.6;
    }

    .info span{
      font-weight:bold;
      color:black;
    }

  </style>
</head>

<body>

  <div class="info-box">

    <h1>Blog Information</h1>

    <!-- Title -->
    <div class="info">
      <span>Title:</span>
      {{ $data->title }}
    </div>

    <!-- Subtitle -->
    <div class="info">
      <span>Subtitle:</span>
      {{ $data->subtitle }}
    </div>

    <!-- Description -->
    <div class="info">
      <span>Description:</span>
      {{ $data->description }}
    </div>

    <!-- Author -->
    <div class="info">
      <span>Author:</span>
      {{ $data->author }}
    </div>

    <!-- Date -->
    <div class="info">
      <span>Date:</span>
      {{ $data->date }}
    </div>

  </div>

</body>
</html>