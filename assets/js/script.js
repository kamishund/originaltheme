
console.log("script")

  $(function(){
    $('#menu').on('click', function () {
        if ($("#menu").hasClass('active')) {
         $("#menuhontai").fadeOut(700);
        } else {
            $("#menuhontai").fadeIn(700);
        }
        $("#menu").toggleClass('active');
      });


      
  $(".openbtn6").click(function () {
    $(this).toggleClass('active');
});
$(".openbtn1").click(function () {
    $(this).toggleClass('active');
});




// menutoggle
$('.toggle').on('click', function () {
    if ($(this).hasClass('anm')) {
        console.log("re")
        $($(this).attr("href")).animate({"height":"0"},300)
        $(this).removeClass('anm');
    } else {
        console.log("add");

        autoHeight =  $($(this).attr("href")).css('height', 'auto').height();
        $($(this).attr("href")).animate({"height":autoHeight},800);
        $(this).addClass('anm');
    }
  
    return false;
  });


//   han
$('#menubtn').on('click', function () {
    if ($(this).hasClass('anm')) {
        console.log("re")
        $(".hanmenu").fadeOut(700);
        $(this).removeClass('anm');
    } else {
        console.log("add");
        $(".hanmenu").fadeIn(700);
        $(this).addClass('anm');
    }
  
    return false;
  });

//   tab
//任意のタブにURLからリンクするための設定
function GethashID (hashIDName){
    if(hashIDName){
      //タブ設定
      $('.tab li').find('a').each(function() { //タブ内のaタグ全てを取得
        var idName = $(this).attr('href'); //タブ内のaタグのリンク名（例）#lunchの値を取得 
        if(idName == hashIDName){ //リンク元の指定されたURLのハッシュタグ（例）http://example.com/#lunch←この#の値とタブ内のリンク名（例）#lunchが同じかをチェック
          var parentElm = $(this).parent(); //タブ内のaタグの親要素（li）を取得
          $('.tab li').removeClass("active"); //タブ内のliについているactiveクラスを取り除き
          $(parentElm).addClass("active"); //リンク元の指定されたURLのハッシュタグとタブ内のリンク名が同じであれば、liにactiveクラスを追加
          //表示させるエリア設定
          $(".area").removeClass("is-active"); //もともとついているis-activeクラスを取り除き
          $(hashIDName).addClass("is-active"); //表示させたいエリアのタブリンク名をクリックしたら、表示エリアにis-activeクラスを追加 
        }
      });
    }
  }
  
  //タブをクリックしたら
  $('.tab a').on('click', function() {
    var idName = $(this).attr('href'); //タブ内のリンク名を取得  
    GethashID (idName);//設定したタブの読み込みと
    return false;//aタグを無効にする
  });
  
  
  // 上記の動きをページが読み込まれたらすぐに動かす
  $(window).on('load', function () {
      $('.tab li:first-of-type').addClass("active"); //最初のliにactiveクラスを追加
      $('.area:first-of-type').addClass("is-active"); //最初の.areaにis-activeクラスを追加
    var hashName = location.hash; //リンク元の指定されたURLのハッシュタグを取得
    GethashID (hashName);//設定したタブの読み込み
  });

  $("dd").css("height","0px");
  $("dd").css("border","0px");

  $("dt a").click(function(){
    if(!$($(this).attr("href")).hasClass("opencontent")){
      $($(this).attr("href")).addClass("opencontent");
      $($(this).attr("href")).animate({"height":"88px"},300);
      $($(this).attr("href")).css("border","1px solid #0070cf");
      $(this).parent().css("background-color","#0070cf");
      $(this).css("color","#FFF");
      $(this).find('.Qbtn').css("color","#0070cf");
      $(this).find('.plus').toggleClass('batuicon');
    }else{
      $($(this).attr("href")).removeClass("opencontent");
      $($(this).attr("href")).animate({"height":"0px"},300);
      $(this).parent().css("background-color","#FFF");
      $(this).css("color","#0070cf");
      $(this).find('.plus').toggleClass('batuicon');
      $($(this).attr("href")).css("border","0px");
    }

    return false;
  });

  /*モーたるウィンドウ*/
  $("#bg").hide();
  $("#resultbg").hide();

  $("#contactbtn").click(function(){
    $("#bg").fadeIn(300);
  });


  $("#contactbox .plus").click(function(){
    $("#bg").fadeOut(300);
  });

  $("#submit").click(function(){
    $("#bg").hide();
    $("#resultbg").fadeIn(300);
  });

  $("#resultbox .plus").click(function(){
    $("#resultbg").fadeOut(300);
  });

  $("#resultbox button").click(function(){
    $("#resultbg").fadeOut(300);
  });



  }());






  $(function() {
    // フェードイン
    $('.inviewfadeIn').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if (isInView) {
            $(this).stop().addClass('fadeIn');
        } 
    });
});



$(function(){
    console.log("ddfdfd")
    $('.grobal_menu_item').hover(
        function() {
            $(this).children(".submenu").stop().addClass('fadeIn');
            $(".bg").stop().addClass('fadeIn');
     
        },
        function() {
            $(this).children(".submenu").stop().removeClass('fadeIn');
            $(".bg").stop().removeClass('fadeIn');
        }
    );
  }());





