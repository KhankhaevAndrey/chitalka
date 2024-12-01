<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Читалка</title>
  <style>
    body {
      background-size: 40% auto, 60% auto; /* Масштабируем по высоте */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: "Gill Sans", sans-serif;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .book-content {
      height: 400px;
      overflow-y: auto;
      margin-bottom: 20px;
      line-height: 1.6;
      padding: 10px;
      border: 1px solid #ddd;
      background-color: #f9f9f9;
      border-radius: 5px;
      font-size: 16px;
      white-space: pre-wrap; /* Сохраняем переносы строк */
    }
    .controls {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }
    .controls button {
      padding: 10px;
      font-size: 16px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .controls button:hover {
      background-color: #0056b3;
    }
    
    .back-to-menu {
      margin-top: 20px;
    }
    .back-to-menu a {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      text-decoration: none;
      border-radius: 5px;
    }
    .back-to-menu a:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>12 месяцев</h1>

    <div class="book-content" id="book-content"></div>

    <div class="controls">
      <button id="prev-page">Назад</button>
      <button id="next-page">Вперед</button>
    </div>

    <div class="back-to-menu">
      <a href="index.php">Вернуться в меню</a>
    </div>
  </div>

  <script>
    let currentPage = 0;
    let bookLines = [];
    const linesPerPage = 15;

    // Загрузка книги
    fetch('book.txt?'+ new Date().getTime())
      .then(response => response.text())
      .then(data => {
        bookLines = data.split('\n'); // Разбиваем книгу на строки
        showPage(currentPage);
      });

    // Показать текущие 15 строк
    function showPage(page) {
      const contentDiv = document.getElementById('book-content');
      const startLine = page * linesPerPage;
      const endLine = startLine + linesPerPage;
      const pageLines = bookLines.slice(startLine, endLine); // Берем 15 строк
      contentDiv.textContent = pageLines.join('\n'); // Показываем их в читалке
    }

    // Кнопка "Вперед"
    document.getElementById('next-page').addEventListener('click', () => {
      if ((currentPage + 1) * linesPerPage < bookLines.length) {
        currentPage++;
        showPage(currentPage);
      }
    });

    // Кнопка "Назад"
    document.getElementById('prev-page').addEventListener('click', () => {
      if (currentPage > 0) {
        currentPage--;
        showPage(currentPage);
      }
    });
  </script>
</body>
</html>
