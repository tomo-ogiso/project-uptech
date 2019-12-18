<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>東京のホテルならホテル</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/form.css">
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script>
        $(function(){

            // 現在の時間時刻
            var now = new Date();
            var h = now.getHours();
            var mini = now.getMinutes();

            $('#time').text(h + ':' + mini);

            // 宿泊予約用
            var year = now.getFullYear();
            var month = now.getMonth();
            var date = now.getDate();

            // 年月
            for(var i = 0; i <= 12; i++){
                // new Date()は現在の年月日時間しか取得しない為(1つのみ）、
                // 文字列nowで取得したyear、monthを引数にして
                // iの数だけnew Dateを取得する
                var newDate = new Date(year, month + i);
                var y = newDate.getFullYear();
                var m = newDate.getMonth() + 1;
                $('#day-1').append('<option value='+ y + '/' + m + '>' + y + '年' + ' ' + m + '月' + '</option>');
            }

            // 日
            for(var d = 1; d <= 31; d++){
                $('#day-2').append('<option value='+ d +'>' + d + '日' + '</option>');
            }
            
            // 宿泊日数
            for(var s = 1; s <= 10; s++) {
                $('#day-3').append('<option value=' + s + '>' + s + '泊' + '</option>');
            }

            // 宿泊人数
            for(var p = 1; p <= 3; p++) {
                $('#people').append('<option value=' + p + '>' + p + '人' + '</option>');
            }

            // 宿泊日数
            for(var r = 1; r <= 10; r++) {
                $('#room').append('<option value=' + r + '>' + r + '室' + '</option>');
            }
            
            // 言語切替
            $('.language-li').on('click', function() {
                // alert();
                var language = $('.language-li div');
                var languageselect = $('.language-select');

                if (language.hasClass('language-before')) {
                    language.attr('class', 'language-after');
                    languageselect.fadeToggle('slow');
                } else {
                    language.attr('class', 'language-before');
                    languageselect.fadeToggle('slow');
                }
            });

            // ヘッダーメニュー
            var $headernav = $('.header-inner-nav2 .navbar li');
            var submenu = 'sub-menu';
            var $submenu = $('#sub-menu');
            $headernav.eq(0).on('click', function(){       
                if(submenu == $submenu.attr('class')){
                    $submenu.toggleClass('is-click');
                    $submenu.removeClass(submenu);
                    if($reservation.hasClass('is-click')){
                        $reservation.toggleClass(submenu);
                        $reservation.removeClass('is-click');
                    }
                }else {
                    $submenu.toggleClass(submenu);
                    $submenu.removeClass('is-click');
                }
            });

            var $reservationClick = $('.reservation');
            var $reservation = $('#reservation');
            $reservationClick.on('click',function(){
                if(submenu == $reservation.attr('class')){
                    $reservation.toggleClass('is-click');
                    $reservation.removeClass(submenu);
                    if($submenu.hasClass('is-click')){
                        $submenu.toggleClass(submenu);
                        $submenu.removeClass('is-click');
                    }
                }
                else {
                    $reservation.toggleClass(submenu);
                    $reservation.removeClass('is-click');
                }
            });
            
        });
    </script>
</head>
<body>
    <div id="wrapper">
        <header>
            @include('partials.navbar.header')
        </header>
        <div class="container">
            <table class="lodging-confirm">
                <tr>
                    <th>宿泊日</th>
                    <td>
                        <input type="text" name="lodgingmonth" value="{{ old('lodgingmonth') }}">
                        <input type="text" name="lodgingmonth" value="{{ old('lodgingdate') }}日 ">
                    </td>
                </tr>
                <tr>
                    <th>ご宿泊日数</th>
                    <td>
                        <input type="text" name="staydays" value="{{ old('staydays') }}日間">
                    </td>
                </tr>
                <tr>
                    <th>ご宿泊人数</th>
                    <td>
                        <input type="text" name="people" value="{{ old('people') }}人">
                    </td>
                </tr>
                <tr>
                    <th>部屋数</th>
                    <td>
                        <input type="text" name="room" value="{{ old('room') }}部屋">
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>