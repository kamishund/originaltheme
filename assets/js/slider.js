
$(function(){
    $('.slider').slick({
        autoplay: true,         //自動再生
        autoplaySpeed: 4000,　  //自動再生のスピード
        speed: 800,     　 //スライドするスピード
        dots: true,　　　　　　//スライドしたのドット
        arrows: true,          //左右の矢印
        infinite: true,　　　　//スライドのループ
        pauseOnHover: false,   //ホバーしたときにスライドを一時停止しない　
    });
    
  }());