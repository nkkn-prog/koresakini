<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('css/index.css')}}" rel="stylesheet">
  <title>Create Your Task</title>
</head>
<body>
  <div id="logo">コレサキニ</div>
  <h2>タスクを作成しましょう</h2>
  <div class = "task-name">タスク名</div>
    <input class = "textbox" placeholder = "ここにタスク名を記入してください"></input>

  <div class = "task-content">タスク内容</div>
    <textarea class = "textarea"placeholder="ここにタスク内容を記入してください"></textarea>
  <div class = "deadline">締切</div>
    <input type = "datetime-local">
  <div class = "tag">タグ</div>
  <button onclick = "location.href='/index'">タスクを作成</button>
</body>
</html>