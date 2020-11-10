<!DOCTYPE html>
<html>
<head>
  <title>Clock</title>
  <style type="text/css">
    #clock {
    width: 900px;
    margin: 50px;
    font-size: 120px;
    display: inline-block;
    float: right; 
    }
  </style>
</head>
<body>
<div id="clock">10:10:01</div>
        <script type="text/javascript">
          setInterval(displayclock, 500);
          function displayclock (){
            var time = new Date();
            var hrs = time.getHours();
            var min = time.getMinutes();
            var sec = time.getSeconds();
            var en = 'AM';

            if (hrs > 12){
              en = 'PM';
            }
            if (hrs > 12) {
              hrs = hrs - 12;
            }

            if (hrs == 0){
              hrs = 12 ;
            }

            if (hrs < 10){
              hrs = '0' + hrs;
            }
            if (min < 10){
              min = '0' + min;
            }
            if (sec < 10){
              sec = '0' + sec;
            }

            document.getElementById('clock').innerHTML = hrs + ':' + min + ':' + sec + ' ' + en; 
          }

        </script>
</body>
</html>

