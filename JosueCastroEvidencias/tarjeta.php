
<html>
<head>
  <title>Tarjeta</title>
  <link rel="stylesheet" type="text/css" href="tarjeta.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body background="pastor-aleman-con-cachorros.jpg">
<div id="area">
  <div class="master-card">
    <div class="card">
      <div class="title">credit card</div>
      <div class="input-number"><span class="title-number">card number</span>
        <div class="inputs-number">
          <input type="text" maxlength="4" name="n1" placeholder="0000" required="required"/>
          <input type="text" maxlength="4" name="n2" placeholder="0000" required="required"/>
          <input type="text" maxlength="4" name="n3" placeholder="0000" required="required"/>
          <input type="text" maxlength="4" name="n4" placeholder="0000" required="required"/>
        </div>
        <div class="selects-date selecters">
          <div class="day-select"><span>day</span>
            <select id="dates">
              <option value="">1</option>
              <option value="">2</option>
              <option value="">3</option>
              <option value="">4</option>
              <option value="">5</option>
              <option value="">6</option>
              <option value="">7</option>
              <option value="">8</option>
              <option value="">9</option>
              <option value="">10</option>
              <option value="">11</option>
              <option value="">12</option>
              <option value="">13</option>
              <option value="">14</option>
              <option value="">15</option>
              <option value="">16</option>
              <option value="">17</option>
              <option value="">18</option>
              <option value="">19</option>
              <option value="">20</option>
              <option value="">21</option>
              <option value="">22</option>
              <option value="">23</option>
              <option value="">24</option>
              <option value="">25</option>
              <option value="">26</option>
              <option value="">27</option>
              <option value="">28</option>
              <option value="">29</option>
              <option value="">30</option>
            </select>
          </div>
          <div class="year-select"><span>year</span>
            <select id="dates">
              <option value="">17</option>
              <option value="">18</option>
              <option value="">19</option>
              <option value="">20</option>
              <option value="">21</option>
              <option value="">22</option>
              <option value="">23</option>
              <option value="">24</option>
              <option value="">25</option>
              <option value="">26</option>
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
      <div class="chip-card"></div>
    </div>
  </div>
  <div class="button-sent">
    <button id="back">VOLTEAR</button>
    <button id="continue">CONTINUAR</button>
  </div>
</div>

<script src="js/jquery-3.3.1.slim.min.js"></script>  
<script src="js/tarjeta.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>