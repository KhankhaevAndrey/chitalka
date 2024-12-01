<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Меню</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Gill Sans", sans-serif;
    }

    body {
      background-size: 40% 100vh, 60% 100vh; /* Масштабируем по высоте */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      width: 50%;
  max-width: 600px;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  text-align: center;
    }

    h1 {
      color: #333;
      margin-bottom: 20px;
    }

    ul {
      list-style: none;
      padding: 0;
    }

    li {
      margin-bottom: 20px;
    }

    a {
      text-decoration: none;
      color: white;
      background-color: #007BFF;
      padding: 10px 20px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    a:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Меню</h1>
    <ul>
      <li><a href="reader.php">Читалка</a></li>
      <li><a href="quiz.php">Квиз</a></li>
    </ul>
  </div>
</body>
</html>
