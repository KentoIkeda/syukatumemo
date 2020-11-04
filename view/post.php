<!DOCTYPE html>
<html>
<head>
  <style>
  table{
    width: 100%;
    border-collapse:separate;
    border-spacing: 0;
  }

  table th:first-child{
    border-radius: 5px 0 0 0;
  }

  table th:last-child{
    border-radius: 0 5px 0 0;
    border-right: 1px solid #3c6690;
  }

  table th{
    text-align: center;
    color:white;
    background: linear-gradient(#829ebc,#225588);
    border-left: 1px solid #3c6690;
    border-top: 1px solid #3c6690;
    border-bottom: 1px solid #3c6690;
    box-shadow: 0px 1px 1px rgba(255,255,255,0.3) inset;
    padding: 10px;
  }

  table td{
    text-align: left;
    border-left: 1px solid #a8b7c5;
    border-bottom: 1px solid #a8b7c5;
    border-top:none;
    box-shadow: 0px -3px 5px 1px #eee inset;
    padding: 10px;
  }

  table td:last-child{
    border-right: 1px solid #a8b7c5;
  }

  table tr:last-child td:first-child {
    border-radius: 0 0 0 5px;
  }

  table tr:last-child td:last-child {
    border-radius: 0 0 5px 0;
  }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>就活メモ</title>
</head>
<body>
  <h1>就活メモ</h1>
  <!-- 入力エリア -->
  <div class="input_area">
    <form action="./index.php" method="post" id="contact_form">
      <dl class="kigyoumei">
        <dd>企業名：<input type="text" name="kigyoumei" value=""></dd>
      </dl>
      <dl class="zyoukyou">
        <dd>状況：
          <select name="zyoukyou" size="1">
            <option value="応募前">応募前</option>
            <option value="エントリー済み">エントリー済み</option>
            <option value="面接・試験進行">面接・試験進行</option>
            <option value="最終面接">最終面接</option>
            <option value="内定">内定</option>
            <option value="お祈り">お祈り</option>
          </select>
        </dd>
      </dl>
      <dl class="nittei">
        <dd>日程：<input type="datetime-local" name="nittei"></dd>
      </dl>
      <dl class="bikou">
        <dd>備考：<textarea type="text" name="bikou" value="" rows="4" cols="40"></textarea></dd>
      </dl>
      <input type="hidden" name="eventId" value="save">
      <input type="submit" value="送信">
    </form>
  </div>
  <!-- //入力エリア -->
  <hr>
  <!-- 投稿表示エリア -->
  <?php
  $getaction = new getDataAction();
  ?>
  <h2>応募前</h2>
  <?php
  $getaction->getData('応募前');
  ?>
  <h2>エントリー済み（書類選考）</h2>
  <?php
  $getaction->getData('エントリー済み');
  ?>
  <h2>面接・試験進行</h2>
  <?php
  $getaction->getData('面接・試験進行');
  ?>
  <h2>最終面接進行</h2>
  <?php
  $getaction->getData('最終面接');
  ?>
  <h2>内定済み</h2>
  <?php
  $getaction->getData('内定');
  ?>
  <h2>お祈り</h2>
  <?php
  $getaction->getData('お祈り');
  ?>
  <!-- // 投稿表示エリア-->
</body>
</html>
