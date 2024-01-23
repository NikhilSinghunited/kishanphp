<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="canonical" href="#" />
    <title>Website</title>
    <meta name="description" content="Website">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta property="og:title" content="Website" />
    <meta property="og:description" content="Website" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="Website" />
    <meta property="og:site_name" content="Website" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:image" content="#" />
    
    
    <meta name="author" content="Website" />
    <meta name="publisher" content="Website" />
            <link rel="icon" href="JERMAN 2.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" href="one.css">
            <style>
      :root {
        --color-section-1        : hsl(32.941176470588,100%, 10%);

        --hcolor                 : 32;
        --scolor                 : 100%;
        --lcolor                 : 50%;
        --text-color             : hsl(var(--hcolor),var(--scolor),var(--lcolor));
        
        --h-top-prize            : 48.235294117647;
        --s-top-prize            : 100%;
        --l-top-prize            : 20%;
        --top-prize-color        : hsl(var(--h-top-prize),var(--s-top-prize),var(--l-top-prize));

        --hhd                    : 33.04347826087;
        --shd                    : 100%;
        --lhd                    : 27.058823529412%;
        --header-color           : hsl(var(--hhd),var(--shd),var(--lhd));
        
        --hbg                    : 0;
        --sbg                    : 0%;
        --lbg                    : 27.843137254902%;
        --color-bg               : hsl(var(--hbg),var(--sbg),var(--lbg));
        --color-dbg-b            : hsl(var(--hbg),var(--sbg),calc(var(--lbg) - 5%));
        --color-dbg-f            : hsl(var(--hbg),var(--sbg),calc(var(--lbg) - 8%));
        

        --hbase                  : 0;
        --sbase                  : 100%;
        --lbase                  : 50%;
        --color-base             : hsl(var(--hbase),var(--sbase),var(--lbase));

        --h                      : 32;
        --s                      : 100%;
        --l                      : 50%;
        --color-primary          : hsl(var(--h),var(--s),var(--l));
      }
        </style>
          <style>
body{background: var(--color-bg);}
.winning_result_table tbody tr td .live {color: var(--top-prize-color);}
.home-main{background: var(--color-section-1);}
.winning_result_table tbody tr td {border-bottom: none;}
</style>
      </head>
<body>
  <header class="global-header content-center">
    <div class="global-header__inner wrap flex m-auto items-center">
      <div class="main-logo m-r-1">
        <a href="/" class="logo">
                    <img src="JERMAN 2.png" alt="Logo Jerman Lotto">
                  </a>
      </div>
      <div class="items menus">
        <div class="item-12 top-menu">
          <ul>
            <li><a href="/">Home</a></li>
                      </ul>
        </div>
        <div class="item-12 brand_name">
          <h2 class="text-white">Jerman Lotto</h2>
        </div>
        <div class="item-12">
          <div class="menu-box">
            <ul class="menu">
              <li><a href="/" class=" actived">Home</a></li>
              <li><a href="/sunday" class="" id="day1" onclick="hidden_item()">Sunday</a></li>
              <li><a href="/monday" class="">Monday</a></li>
              <li><a href="/tuesday" class="">Tuesday</a></li>
              <li><a href="/wednesday" class="">Wednesday</a></li>
              <li><a href="/thursday" class="">Thursday</a></li>
              <li><a href="/friday" class="">Friday</a></li>
              <li><a href="/saturday" class="">Saturday</a></li>
              <li class="livedraw"><a class="livedraw" href="/livedraw">Live Draw</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="btn_bgr">
        <button class="btn-menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
    
    <div class="sidebar-m" id="sidebar_m">
      <div class="sidemenu">
        <button class="close_menu">
          <i>c<br>l<br>o<br>s<br>e</i>
        </button>
        <div class="sidemenu-title">
                      <img src="JERMAN 2.png" alt="Logo Jerman Lotto">
                    <h2>Pools ABC</h2>
        </div>
        <ul>
          <li>
            <a href="/">
              <img src="ico-home.png" alt="">Home
            </a>
          </li>
                    <li>
            <a href="/livedraw">
              <img src="ico-live-draw.png" alt="">Live Draw
            </a>
          </li>
          <li>
            <a href="/sunday">
              <img src="ico-days.png" alt="">Sunday
            </a>
          </li>
          <li>
            <a href="/monday">
              <img src="ico-days.png" alt="">Monday
            </a>
          </li>
          <li>
            <a href="/tuesday">
              <img src="ico-days.png" alt="">Tuesday
            </a>
          </li>
          <li>
            <a href="/wednesday">
              <img src="ico-days.png" alt="">Wednesday
            </a>
          </li>
          <li>
            <a href="/thursday">
              <img src="ico-days.png" alt="">Thursday
            </a>
          </li>
          <li>
            <a href="/friday">
              <img src="ico-days.png" alt="">Friday
            </a>
          </li>
          <li>
            <a href="/saturday">
              <img src="ico-days.png" alt="">Saturday
            </a>
          </li>
        </ul>
      </div>
    </div>
  </header>
  <div class="navbar-m">
    <ul class="flex">
      <li><a href="/">Home</a></li>
      <li class="livedraw"><a href="livedraw">Live Draw</a></li>
      <li><a href="/sunday">Sunday</a></li>
      <li><a href="/monday">Monday</a></li>
      <li><a href="/tuesday">Tuesday</a></li>
      <li><a href="/wednesday">Wednesday</a></li>
      <li><a href="/thursday">Thursday</a></li>
      <li><a href="/friday">Friday</a></li>
      <li><a href="/saturday">Saturday</a></li>
    </ul>
  </div>
    <div class="container text-justify">
    <div class="home-main items m-t-1">
      <div class="item-5">
        <div class="winning_result">
          <div class="m-auto winning_result_header">
                          <img src="JERMAN 2.png" alt="Logo Jerman Lotto">
                        <div class="items">
              <div class="item-12">
                <h2 class="text-white">Winning Results</h2>
              </div>
              <div class="item-12">
                <p class="result-date">2024-01-20 (Saturday)</p>
              </div>
            </div>
          </div>
          <table class="winning_result_table" cellpadding="0" cellspacing="0">
            <tbody>
              <tr>
                <td>1st prize</td>
                <td class="topPrizeResult state-15">
                  <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                </td>
              </tr>
              <tr>
                <td>2nd prize</td>
                <td class="topPrizeResult state-14">
                  <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                </td>
              </tr>
              <tr>
                <td>3rd prize</td>
                <td class="topPrizeResult state-13">
                  <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                </td>
              </tr>
              <tr>
                <td>Consolation</td>
                <td>
                  <table style='table-layout:fixed;' cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tr>
                      <td class="morePrize state-12" width="33%"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></td>
                      <td class="morePrize state-11" width="33%"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></td>
                      <td class="morePrize state-10" width="33%"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></td>
                    </tr>
                    <tr>
                      <td class="morePrize state-9" width="33%"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></td>
                      <td class="morePrize state-8" width="33%"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></td>
                      <td class="morePrize state-7" width="33%"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td>Starter</td>
                <td>
                  <table  style='table-layout:fixed;' cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tr>
                      <td class="morePrize state-6" width="33%"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></td>
                      <td class="morePrize state-5" width="33%"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></td>
                      <td class="morePrize state-4" width="33%"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></td>
                    </tr>
                    <tr>
                      <td class="morePrize state-3" width="33%"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></td>
                      <td class="morePrize state-2" width="33%"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></td>
                      <td class="morePrize state-1" width="33%"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></td>
                    </tr>
                    
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="footer_winning_result">
            <p>Full Payment Guaranteed</p>
            <div id="slideshow">
                          </div>
          </div>
        </div>
      </div>
      <div class="item-7">
        <div class="result_notice">
          <p>Next draw. Remember to buy your numbers early!</p>
        </div>
        <div class="result_list">
          <table class="text-center" >
            <thead>
              <tr>
                <td>Date</td>
                <td>Time</td>
                <td>Day</td>
                <td>Prize 1</td>
                <td>Prize 2</td>
                <td>Prize 3</td>
              </tr>
            </thead>
            <tbody id="draws">
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="container">
      <div class="footer-div text-center">
        <p>Copyright &copy2022 Jerman Lotto Pools. All Rights Reserved.</p>
      </div>
    </div>
  </footer>
<script src="jquery-1.11.1.min.js"></script>
<script>
  var sidebar = document.getElementById("sidebar_m");
  $(function(){
    $('.btn_bgr').click(function(e) {
      $('.btn_bgr').addClass("active");
      $(sidebar).addClass("show");
      e.stopPropagation();
    });

    $('.close_menu').click(function(e){
      $('.btn_bgr').removeClass("active");
      $(sidebar).removeClass("show");
      e.stopPropagation();
    });
    $(sidebar).click(function(e){
      e.stopPropagation();
    });
    $(document).click(function(){
      $('.btn_bgr').removeClass("active");
      $(sidebar).removeClass("show");
    });
  });</script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.2.1/socket.io.min.js"></script>
  <script>
    
    function getFormattedDate(date) {
        date = date.replace(" ","T");
        date = new Date(date);
        var year = date.getFullYear();
        var month = (1 + date.getMonth()).toString();
        month = month.length > 1 ? month : '0' + month;
        var day = date.getDate().toString();
        day = day.length > 1 ? day : '0' + day;
        return day + '-' + month + '-' + year;
    }
    function getFormatDay(date) {
      date = date.replace(" ","T");
      date = new Date(date);
      var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

      return days[date.getDay()];
    }
    function getFormatDate(date) {
        date = date.replace(" ","T");
        date = new Date(date);
        var year = date.getFullYear();
        var month = (1 + date.getMonth()).toString();
        month = month.length > 1 ? month : '0' + month;
        var day = date.getDate().toString();
        day = day.length > 1 ? day : '0' + day;
        return year + '-' + month + '-' + day;
    }
    function animationPrize(serverTime = 0, messages){
    let count = 0;
    var interval = 20;
    var seconds = interval;
    setInterval(() => {
      if(serverTime >= messages.openAtTimeStamp+seconds && count === 0){
        count = count+1;
        seconds = seconds+interval;
        $('.state-'+count).html(messages.consolationPrize[5]);
      }
      if(serverTime >= messages.openAtTimeStamp+seconds&& count === 1){
        count = count+1;
        seconds = seconds+interval;
        $('.state-'+count).html(messages.consolationPrize[4]);
      }
      if(serverTime >= messages.openAtTimeStamp+seconds&& count === 2){
        count = count+1;
        seconds = seconds+interval;
        $('.state-'+count).html(messages.consolationPrize[3]);
      }
      if(serverTime >= messages.openAtTimeStamp+seconds && count === 3){
        count = count+1;
        seconds = seconds+interval;
        $('.state-'+count).html(messages.consolationPrize[2]);
      }
      if(serverTime >= messages.openAtTimeStamp+seconds && count === 4){
        count = count+1;
        seconds = seconds+interval;
        $('.state-'+count).html(messages.consolationPrize[1]);
      }
      if(serverTime >= messages.openAtTimeStamp+seconds && count === 5){
        count = count+1;
        seconds = seconds+interval;
        $('.state-'+count).html(messages.consolationPrize[0]);
      }
      if(serverTime >= messages.openAtTimeStamp+seconds && count === 6){
        count = count+1;
        seconds = seconds+interval;
        $('.state-'+count).html(messages.specialPrize[5]);
      }
      if(serverTime >= messages.openAtTimeStamp+seconds && count === 7){
        count = count+1;
        seconds = seconds+interval;
        $('.state-'+count).html(messages.specialPrize[4]);
      }
      if(serverTime >= messages.openAtTimeStamp+seconds && count === 8){
        count = count+1;
        seconds = seconds+interval;
        $('.state-'+count).html(messages.specialPrize[3]);
      }
      if(serverTime >= messages.openAtTimeStamp+seconds && count === 9){
        count = count+1;
        seconds = seconds+interval;
        $('.state-'+count).html(messages.specialPrize[2]);
      }
      if(serverTime >= messages.openAtTimeStamp+seconds && count === 10){
        count = count+1;
        seconds = seconds+interval;
        $('.state-'+count).html(messages.specialPrize[1]);
      }
      if(serverTime >= messages.openAtTimeStamp+seconds && count === 11){
        count = count+1;
        seconds = seconds+interval;
        $('.state-'+count).html(messages.specialPrize[0]);
      }
      if(serverTime >= messages.openAtTimeStamp+seconds && count === 12){
        count = count+1;
        seconds = seconds+interval;
        var template = '';
        for(var i = 0; i < messages['3rdPrize'].length ; i++){
          template += ' <span class="ball live">'+messages['3rdPrize'][i]+'</span>';
        }
        $('.state-'+count).html(template);
      }
      if(serverTime >= messages.openAtTimeStamp+seconds && count === 13){
        count = count+1;
        seconds = seconds+interval;
        var template = '';
        for(var i = 0; i < messages['3rdPrize'].length ; i++){
          template += ' <span class="ball live">'+messages['2ndPrize'][i]+'</span>';
        }
        $('.state-'+count).html(template);
      }
      if(serverTime >= messages.openAtTimeStamp+seconds && count === 14){
        count = count+1;
        seconds = seconds+interval;
        var template = '';
        for(var i = 0; i < messages['3rdPrize'].length ; i++){
          template += ' <span class="ball live">'+messages['1stPrize'][i]+'</span>';
        }
        $('.state-'+count).html(template);
      }
      serverTime +=1;
    },1000)
  }
  
  $.ajax({
    type: 'GET',
    url: 'db_connection.php',
    dataType: 'json', // Specify the data type as JSON
})
.done(function(response) {
    var data = response.data; // Access the 'data' key
    if (data.length > 0) {
        var html = '';
        data.forEach(function(item) {
            html += "<tr>";
            html += "<td>" + item.date + "</td>";
            html += "<td>" + item.days + "</td>";
            html += "<td>" + item['prize_1'] + "</td>";
            html += "<td>" + item['prize_2'] + "</td>";
            html += "<td>" + item['prize_3'] + "</td>";
            html += "</tr>";
        });
        $('#draws').html(html);
    } else {
        $('#draws').html('<tr><td colspan="5">No data available</td></tr>');
    }
})
.fail(function(jqXHR, textStatus, errorThrown) {
    console.log(errorThrown);
});




// function hidden_item(){

//   var elementToHide = document.getElementById("");
//   elementToHide.style.display = "none";
// }
  </script>
</body>

</html>