<!DOCTYPE html>
<html>
<head>
  <title>Tarjeta</title>
  <link rel="stylesheet" type="text/css" href="css1/estilo2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
</head>
<body background="colo2.jpg" bgproperties="fixed">
  
<div id="area">
  <div class="master-card">
    <div class="card">
      <div class="title">CREDIT CARD</div>
      <div class="input-number"><span class="title-number">CARD NUMBER</span>
        <div class="inputs-number">
          <form action="tar.php" method="POST">
          <input type="text" maxlength="4" name="n1" placeholder="0000" />
          <input type="text" maxlength="4" name="n2" placeholder="0000" />
          <input type="text" maxlength="4" name="n3" placeholder="0000" />
          <input type="text" maxlength="4" name="n4" placeholder="0000" />
        </div>
        <div class="selects-date selecters">
          <div class="day-select"><span>DAY</span>
            <select id="dates">
              <option  name="day" value="1">1</option>
              <option  name="day" value="2">2</option>
              <option name="day" value="3">3</option>
              <option name="day" value="4">4</option>
              <option name="day" alue="5">5</option>
              <option  name="day" value="6">6</option>
              <option name="day" value="7">7</option>
              <option name="day" value="8">8</option>
              <option name="day" value="9">9</option>
              <option name="day"value="10">10</option>
              <option name="day" value="11">11</option>
              <option name="day" value="12">12</option>
              <option name="day" value="13">13</option>
              <option name="day" value="14">14</option>
              <option name="day" value="15">15</option>
              <option name="day" value="16">16</option>
              <option name="day" value="17">17</option>
              <option name="day" value="18">18</option>
              <option name="day" value="19">19</option>
              <option name="day" value="20">20</option>
              <option name="day" value="21">21</option>
              <option name="day" value="22">22</option>
              <option name="day" value="23">23</option>
              <option name="day" value="24">24</option>
              <option name="day" value="25">25</option>
              <option name="day" value="26">26</option>
              <option name="day" value="27">27</option>
              <option name="day" value="28">28</option>
              <option name="day" value="29">29</option>
              <option name="day" value="30">30</option>
            </select>
          </div>
          <div class="year-select"><span>YEAR</span>
            <select id="dates">
              <option name="ano" value="17">17</option>
              <option name="ano" value="18">18</option>
              <option name="ano" value="19">19</option>
              <option name="ano" value="20">20</option>
              <option name="ano" value="21">21</option>
              <option name="ano" value="22">22</option>
              <option name="ano" value="23">23</option>
              <option name="ano"  value="24">24</option>
              <option name="ano" value="25">25</option>
              <option name="ano" value="26">26</option>
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
      <div class="name"><span>Viki.</span></div>
    </div>
    <div class="card-back">
      <div class="tire"></div>
      <div class="secret-area">
        <input type="text" maxlength="3" name="c5" placeholder="000" />
      </div>
      <div class="chip-card"></div>
    </div>
  </div>
  <div class="button-sent">
        <button id="back" type="submit" value="Aceptar">comprar</button>

    </form>
    <button id="back">VOLTAR</button>
        </form>

    <button id="continue">CONTINUAR</button>
  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>
</body>
</html>