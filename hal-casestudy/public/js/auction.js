// 時間管理のタイマー処理部分
document.addEventListener('DOMContentLoaded', function() {
    var Timer = function(saleStartTime, saleEndTime, endMessage, outputDestination) {
      this.saleStartTime = saleStartTime;
      this.saleEndTime = saleEndTime;
      this.endMessage = endMessage;
      this.outputDestination = outputDestination;
    };
    
    Timer.prototype.countDown = function() {
      var saleStartTime = new Date(this.saleStartTime);
      var saleEndTime = new Date(this.saleEndTime);
      var oneDay = 24 * 60 * 60 * 1000;
      var countDownTimer = document.getElementById(this.outputDestination);
      var endMessage = this.endMessage;
      var currentTimeCD = new Date();
      var untilStartTime = new Date();
      var untilFinishTime = new Date();
      var d = 0;
      var h = 0;
      var m = 0;
      var s = 0;
  
      setInterval(calculateTime, 1000);
  
      function calculateTime() {
        currentTimeCD = new Date();
        untilStartTime = saleStartTime - currentTimeCD;
        untilFinishTime = saleEndTime - currentTimeCD;
  
        if (currentTimeCD < saleStartTime) {
          d = Math.floor(untilStartTime / oneDay);
          h = Math.floor((untilStartTime % oneDay) / (60 * 60 * 1000));
          m = Math.floor((untilStartTime % oneDay) / (60 * 1000)) % 60;
          s = Math.floor((untilStartTime % oneDay) / 1000) % 60 % 60;
        } else {
          d = Math.floor(untilFinishTime / oneDay);
          h = Math.floor((untilFinishTime % oneDay) / (60 * 60 * 1000));
          m = Math.floor((untilFinishTime % oneDay) / (60 * 1000)) % 60;
          s = Math.floor((untilFinishTime % oneDay) / 1000) % 60 % 60;
        }
  
        showTime();
      }
  
      function showTime() {
        if (currentTimeCD < saleStartTime) {
          countDownTimer.innerHTML
          = 'オークション開始まで' + d + '日' + h + '時間' + m + '分' + s + '秒';
        } else if (currentTimeCD >= saleStartTime && currentTimeCD <= saleEndTime) {
          countDownTimer.innerHTML
          = 'オークション中<br>あと' + m + '分' + s + '秒' + 'で終了';
        } else {
          countDownTimer.innerHTML = endMessage;
        }
      }
    }
        
    var myTimer = new Timer('2022/1/21 03:05:00', '2022/01/21 4:30:00', 'オークション終了', 'timer');
    myTimer.countDown();
  }, false)

// 入札
function onClick(){
    // 現在価格
    var price = document.getElementById("price");
    // 足算する
    var result = parseInt(price.textContent) + 5000;
    //値を設定する
    document.getElementById("price").innerHTML = result ;
}