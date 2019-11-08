$(document).ready(function (){
  // Thiết lập thời gian đích mà ta sẽ đếm
      var countDownDate = new Date("Jan 25, 2020 24:00:00").getTime();

      // cập nhập thời gian sau mỗi 1 giây
      var x = setInterval(function() {

        // Lấy thời gian hiện tại
        var now = new Date().getTime();
        // Lấy số thời gian chênh lệch
        var distance = countDownDate - now;

        // Tính toán số ngày, giờ, phút, giây từ thời gian chênh lệch
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // HIển thị chuỗi thời gian trong thẻ p
        if (days < 10) {
            $("#days").html('0'+days);
        }else{
            $("#days").html(days);
        }
        if (hours < 10) {
            $("#hours").html('0'+hours);
        }else{
            $("#hours").html(hours);
        }
        if (minutes < 10) {
            $("#min").html('0'+minutes);
        }else{
            $("#min").html(minutes);
        }
        if (seconds < 10) {
            $("#seconds").html('0'+seconds);
        }else{
            $("#seconds").html(seconds);
        }
        // Nếu thời gian kết thúc, hiển thị chuỗi thông báo
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "Thời gian đếm ngược đã kết thúc";
        }
      }, 1000);
});