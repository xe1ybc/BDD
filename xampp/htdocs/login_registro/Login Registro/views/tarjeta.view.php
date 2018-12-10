<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Credit Card - Pure CSS - Flat Design</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
     <link rel="stylesheet" href="css1/style.css">

  
</head>

<body>

  <form action="curso.php" method="POST">

<div id="area">
  <div class="master-card">
    <div class="card">
      <div class="title">CREDIT CARD</div>
      <div class="input-number"><span class="title-number">CARD NUMBER</span>
        <div class="inputs-number">
          <input type="text" maxlength="4" name="n1" placeholder="0000" required="required"/>
          <input type="text" maxlength="4" name="n2" placeholder="0000" required="required"/>
          <input type="text" maxlength="4" name="n3" placeholder="0000" required="required"/>
          <input type="text" maxlength="4" name="n4" placeholder="0000" required="required"/>
        </div>
 
        <div class="selects-date selecters">
          <div class="day-select"><span>DAY</span>
            <select id="dia"  name="dia">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
            </select>
          </div>
          <div class="year-select"><span>YEAR</span>
            <select id="fecha_A" name="fecha_A">
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
            </select>
          </div>
        </div>
      </div>
      <div class="mark-gold">
        <div class="round">
          <div class="circles">
            <div class="circle-1"> </div>
            <div class="circle-2"> </div>
          </div>
        </div>
      </div>
      <div class="name"><span>JEAN O IMPSUM</span></div>
    </div>
    <div class="card-back">
      <div class="tire"></div>
      <div class="secret-area">
        <input type="text" maxlength="3" name="n5" placeholder="000" required="required"/>
      </div>
      </form>
      <div class="chip-card"></div>
    </div>
  </div>
  <div class="button-sent">
    <button id="back">VOLTAR</button>
    <button id="continue">CONTINUAR</button>
  </div>
</div>



  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>

</body>

</html>
