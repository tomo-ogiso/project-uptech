<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>東京のホテルならホテル</title>
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/jquery-3.4.1.min.js"></script>

    <script>
        $(function() {
            // alert();

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
                $('#day-2').append('<option value='+ date +'>' + d + '日' + '</option>');
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

            // instagram hover
            var galleryInsta = $('.gallery-instagram-inner');
            var galleryInstaHover = $('.gallery-instagram-inner-hover');
                galleryInsta.hover(function(){
                $(this).children(galleryInstaHover).css('display','block');
            },function(){
                galleryInstaHover.css('display','none');
                }); 

            // instagram more
            var more = $('.gallery-instagram');
            // 初期値
            var click = 0;
            $('#more').on('click', function(){
                if(click == 0) {
                    for(var i = 3; i < 6; i++){
                    more.eq(i).removeClass('height-second');
                    more.eq(i).addClass('height-second-display');
                    }
                    click++;
                }else {
                    for(var i = 6; i < 9; i++){
                    more.eq(i).removeClass('height-second');
                    more.eq(i).addClass('height-second-display');
                    }
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
            <main>
                <div class="main">
                    <div class="main-nav">
                        <img class="main-nav-img" src="/images/[hotel-chinzanso-tokyo.jp][592]20121109HCTchandelier1.jpg">
                        <div class="main-nav-inner">
                            <p class="main-nav-inner-title">Winter Holidays</p>
                            <p class="main-nav-inner-inner">ようこそ、冬を迎え絢爛たる<br>ホテル椿山荘東京へ。</p>
                            <img class="allow" src="/images/[hotel-chinzanso-tokyo.jp][759]arrow01.svg">
                        </div>                        
                    </div>
                    <div class="main-nav-screen">
                        <p>12/12までの期間限定　節目のお祝いに広々としたスイーツルームで宿泊を。</p>
                    </div>
                </div>
                <div class="main-b">
                    <a href="#">
                    <div class="main-b-nav">
                        <p class="main-b-nav-inner">さながら森のような庭園にたたずむ</p>
                        <p class="main-b-nav-inner">ホテル椿山荘東京の魅力を、ご体験ください。</p>
                        <p class="main-b-nav-inner-screen">さながら森のような庭園にたたずむ</p>
                        <p class="main-b-nav-inner-screen">ホテル椿山荘東京の魅力を、</p>
                        <p class="main-b-nav-inner-screen">ご体験ください。</p>
                    </div>
                    <img class="main-b-img" src="/images/[hotel-chinzanso-tokyo.jp][513]iconplay.svg" width="80" height="60">
                    <p class="main-b-nav-inner-movie">ムービーを再生</p>
                    </a>
                </div>
            </main>
            <section id="advertisement">
                <div class="article article-screen-a">
                    <h1>ご宿泊</h1>
                    <div class="advertisement-inner-a">
                        <img src="/images/[hotel-chinzanso-tokyo.jp][901]intro01.jpg">
                        <div class="advertisement-inner-a-inner">
                            <div class="advertisement-inner-a-inner-a">
                                <h2>くつろぎの空間、<br>特別な時間。</h2>
                                <div class="advertisement-inner-a-inner-a-p">
                                    <p>朝日を浴びて輝く広大な庭園。ここには朝の幸せがあります。</p>
                                    <p>目が覚めたら、窓の外を見てください。そして清冽な空気の</p>
                                    <p>中、どうかゆっくりと朝の庭園散策にお出かけください。</p>
                                </div>
                                <div class="advertisement-inner-a-inner-a-input">
                                   <div class="advertisement-inner-a-inner-a-input-a  screen-hover-width">
                                        <a class="advertisement-inner-a-inner-a-input-a-btn a-hover" href="#">
                                            <span class="a-hover-span-a">客先紹介</span>
                                            <span class="a-hover-span-b"></span>
                                            <img class="allow" src="/images/[hotel-chinzanso-tokyo.jp][759]arrow01.svg">
                                        </a>
                                   </div>
                                   <div class="advertisement-inner-a-inner-a-input-a  screen-hover-width">
                                        <a class="advertisement-inner-a-inner-a-input-a-btn a-hover" href="#">
                                            <span class="a-hover-span-a">ご宿泊プラン</span>
                                            <span class="a-hover-span-b"></span>
                                            <img class="allow" src="/images/[hotel-chinzanso-tokyo.jp][759]arrow01.svg">
                                        </a>
                                   </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article article-screen-b">
                    <h1>レストラン</h1>
                    <div class="advertisement-inner-b">
                        <div class="advertisement-inner-b-img">
                            <img src="/images/[hotel-chinzanso-tokyo.jp][884]intro02sp.jpg" width="818" height="568">
                        </div>
                        <div class="advertisement-inner-b-inner">
                            <div class="advertisement-inner-b-inner-b">
                                <h2>料理の中にも<br>季節がある。</h2>
                                <div class="advertisement-inner-b-inner-b-p">
                                    <p>9つのレストランからは、旬を迎えた自然の恵みにこころ</p>
                                    <p>を配り、素材の味をぞんぶんに活かしたメニューをご用</p>
                                    <p>意します。日本の四季の風情に満ちあふれた庭もまたご</p>
                                    <p>ちそうの一部としてお楽しみください。</p>
                                </div>
                                <div class="advertisement-inner-b-inner-b-input">
                                   <div class="advertisement-inner-b-inner-b-input-b">
                                        <a class="advertisement-inner-b-inner-b-input-b-btn b-hover" href="#">
                                            <span class="b-hover-span-a">客先紹介</span>
                                            <span class="b-hover-span-b"></span>
                                            <img class="allow" src="/images/[hotel-chinzanso-tokyo.jp][759]arrow01.svg">
                                        </a>
                                   </div>
                                   <div class="advertisement-inner-b-inner-b-input-b">
                                        <a class="advertisement-inner-b-inner-b-input-b-btn b-hover" href="#">
                                            <span class="b-hover-span-a">ご宿泊プラン</span>
                                            <span class="b-hover-span-b"></span>
                                            <img class="allow" src="/images/[hotel-chinzanso-tokyo.jp][759]arrow01.svg">
                                        </a>
                                   </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article article-screen-c">
                    <h1>ウェディング</h1>
                    <div class="advertisement-inner-a">
                        <img src="/images/[hotel-chinzanso-tokyo.jp][92]intro03sp.jpg" width="818" height="568">
                        <div class="advertisement-inner-a-inner">
                            <div class="advertisement-inner-a-inner-a">
                                <h2>東京には、<br>ひとを祝福する森がある。</h2>
                                <div class="advertisement-inner-a-inner-a-p">
                                    <p>60年以上にわたり、たくさんの結婚式を見つめ、祝福してきた</p>
                                    <p>森があります。これからもずっと、祝福の場所としてあり続</p>
                                    <p>け、様々な思いを育んでいくことができる場所であることを約</p>
                                    <p>束します。</p>
                                </div>
                                <div class="advertisement-inner-a-inner-a-input">
                                   <div class="advertisement-inner-a-inner-a-input-a screen-hover-width-b">
                                        <a class="advertisement-inner-a-inner-a-input-a-btn a-hover" href="#">
                                            <span class="a-hover-span-a">ウェディングのご案内</span>
                                            <span class="a-hover-span-b"></span>
                                            <img class="allow" src="/images/[hotel-chinzanso-tokyo.jp][759]arrow01.svg">
                                        </a>
                                   </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article article-screen-c">
                    <h1>スパ</h1>
                    <div class="advertisement-inner-b">
                        <div class="advertisement-inner-b-img">
                            <img src="/images/[hotel-chinzanso-tokyo.jp][492]intro04sp.jpg" width="818" height="568">
                        </div>
                        <div class="advertisement-inner-b-inner">
                            <div class="advertisement-inner-b-inner-b">
                                <h2>自然の光と緑の中で、<br>心と身体を潤して。</h2>
                                <div class="advertisement-inner-b-inner-b-p">
                                    <p>リゾートにいるかのような、リフレッシュタイムをお過</p>
                                    <p>ごしいただけるホテルスパ「悠 YU, THE SPA」。温</p>
                                    <p>泉、プールやサウナのほか、古くからの知恵と現代の技</p>
                                    <p>を融合したトリートメントで癒しのひとときを。</p>
                                </div>
                                <div class="advertisement-inner-b-inner-b-input">
                                   <div class="advertisement-inner-b-inner-b-input-b">
                                        <a class="advertisement-inner-b-inner-b-input-b-btn b-hover" href="#">
                                            <span class="b-hover-span-a">施設のご案内</span>
                                            <span class="b-hover-span-b"></span>
                                            <img class="allow" src="/images/[hotel-chinzanso-tokyo.jp][759]arrow01.svg">
                                        </a>
                                   </div>
                                   <div class="advertisement-inner-b-inner-b-input-b">
                                        <a class="advertisement-inner-b-inner-b-input-b-btn b-hover" href="#">
                                            <span class="b-hover-span-a">Spa by L'OCCITANE</span>
                                            <span class="b-hover-span-b"></span>
                                            <img class="allow" src="/images/[hotel-chinzanso-tokyo.jp][759]arrow01.svg">
                                        </a>
                                   </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article article-screen-c">
                    <h1>ご宴会・会議</h1>
                    <div class="advertisement-inner-a">
                        <img src="/images/[hotel-chinzanso-tokyo.jp][588]intro05.jpg">
                        <div class="advertisement-inner-a-inner">
                            <div class="advertisement-inner-a-inner-a">
                                <h2>目的をかなえるお集まりを、<br>ご提案します。</h2>
                                <div class="advertisement-inner-a-inner-a-p">
                                    <p>緑豊かな庭園が、新しいアイディアへ導いたり、皆様の集中力</p>
                                    <p>を高め、大切な会議を成功へいざないます。また、幹事様の想</p>
                                    <p>像以上の成果に向け、プロフェッショナルがご宴会・会議を心</p>
                                    <p>を込めてお手伝いいたします。</p>
                                </div>
                                <div class="advertisement-inner-c-inner-c-input">
                                   <div class="advertisement-inner-a-inner-a-input-a screen-hover-width-c">
                                        <a class="advertisement-inner-a-inner-a-input-a-btn a-hover" href="#">
                                            <span class="a-hover-span-a">会議・ご宴会のご案内</span>
                                            <span class="a-hover-span-b"></span>
                                            <img class="allow" src="/images/[hotel-chinzanso-tokyo.jp][759]arrow01.svg">
                                        </a>
                                   </div>
                                   <div class="advertisement-inner-a-inner-a-input-a screen-hover-width-c">
                                        <a class="advertisement-inner-a-inner-a-input-a-btn a-hover" href="#">
                                            <span class="a-hover-span-a">ホテル椿山荘東京ならではのご宴会の魅力</span>
                                            <span class="a-hover-span-b"></span>
                                            <img class="allow" src="/images/[hotel-chinzanso-tokyo.jp][759]arrow01.svg">
                                        </a>
                                   </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="article article-screen-b">
                    <h1>庭園・アクティビティ</h1>
                    <div class="advertisement-inner-b">
                        <div class="advertisement-inner-b-img">
                            <img src="/images/[hotel-chinzanso-tokyo.jp][829]intro06.jpg" width="818" height="568">
                        </div>
                        <div class="advertisement-inner-b-inner">
                            <div class="advertisement-inner-b-inner-b">
                                <h2>四季折々の、<br>かけがえのない記憶を。</h2>
                                <div class="advertisement-inner-b-inner-b-p">
                                    <p>さながら森のような庭園は、東京とは思えないオアシス</p>
                                    <p>のような場所。体験型アクティビティもご用意。春の</p>
                                    <p>桜、初夏の蛍、滝音、紅葉、椿に雪景色と、四季折々に</p>
                                    <p>やさしい時間をお過ごしいただけます。</p>
                                </div>
                                <div class="advertisement-inner-d-inner-d-input">
                                   <div class="advertisement-inner-b-inner-b-input-b screen-hover-width-c">
                                        <a class="advertisement-inner-b-inner-b-input-b-btn b-hover" href="#">
                                            <span class="b-hover-span-a">庭園・アクティビティのご案内</span>
                                            <span class="b-hover-span-b"></span>
                                            <img class="allow" src="/images/[hotel-chinzanso-tokyo.jp][759]arrow01.svg">
                                        </a>
                                   </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>   
            <section id="gallery">
                <h1>Guests' Gallery</h1>
                <div class="gallery-instagram height">
                    <div class="gallery-instagram-inner">
                        <img class="img-a" src="/images/christmas-cookies-2918172_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-p">柚子レモンアフターヌーンティー</p>
                                    <p class="gallery-instagram-comment-p">大好きな椿山荘</p>
                                    <p class="gallery-instagram-comment-p">次も予約してある♡♡</p>
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-1" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-1">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/cookie-1832169_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-a" src="/images/cookies-4610859_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-p">柚子レモンアフターヌーンティー</p>
                                    <p class="gallery-instagram-comment-p">大好きな椿山荘</p>
                                    <p class="gallery-instagram-comment-p">次も予約してある♡♡</p>
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-1" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-1">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/cupcake-2749196_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/desserts-1868181_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/macaroons-2178371_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                </div>
                <div class="gallery-instagram height">
                    <div class="gallery-instagram-inner">
                        <img class="img-a" src="/images/christmas-cookies-2918172_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-p">柚子レモンアフターヌーンティー</p>
                                    <p class="gallery-instagram-comment-p">大好きな椿山荘</p>
                                    <p class="gallery-instagram-comment-p">次も予約してある♡♡</p>
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-1" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-1">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/cookie-1832169_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-a" src="/images/cookies-4610859_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-p">柚子レモンアフターヌーンティー</p>
                                    <p class="gallery-instagram-comment-p">大好きな椿山荘</p>
                                    <p class="gallery-instagram-comment-p">次も予約してある♡♡</p>
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-1" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-1">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/cupcake-2749196_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/desserts-1868181_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/macaroons-2178371_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                </div>
                <div class="gallery-instagram height">
                    <div class="gallery-instagram-inner">
                        <img class="img-a" src="/images/christmas-cookies-2918172_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-p">柚子レモンアフターヌーンティー</p>
                                    <p class="gallery-instagram-comment-p">大好きな椿山荘</p>
                                    <p class="gallery-instagram-comment-p">次も予約してある♡♡</p>
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-1" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-1">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/cookie-1832169_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-a" src="/images/cookies-4610859_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-p">柚子レモンアフターヌーンティー</p>
                                    <p class="gallery-instagram-comment-p">大好きな椿山荘</p>
                                    <p class="gallery-instagram-comment-p">次も予約してある♡♡</p>
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-1" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-1">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/cupcake-2749196_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/desserts-1868181_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/macaroons-2178371_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                </div>
                <div class="gallery-instagram height-second">
                    <div class="gallery-instagram-inner">
                        <img class="img-a" src="/images/christmas-cookies-2918172_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-p">柚子レモンアフターヌーンティー</p>
                                    <p class="gallery-instagram-comment-p">大好きな椿山荘</p>
                                    <p class="gallery-instagram-comment-p">次も予約してある♡♡</p>
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-1" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-1">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/cookie-1832169_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-a" src="/images/cookies-4610859_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-p">柚子レモンアフターヌーンティー</p>
                                    <p class="gallery-instagram-comment-p">大好きな椿山荘</p>
                                    <p class="gallery-instagram-comment-p">次も予約してある♡♡</p>
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-1" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-1">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/cupcake-2749196_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/desserts-1868181_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/macaroons-2178371_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                </div>
                <div class="gallery-instagram height-second">
                    <div class="gallery-instagram-inner">
                        <img class="img-a" src="/images/christmas-cookies-2918172_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-p">柚子レモンアフターヌーンティー</p>
                                    <p class="gallery-instagram-comment-p">大好きな椿山荘</p>
                                    <p class="gallery-instagram-comment-p">次も予約してある♡♡</p>
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-1" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-1">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/cookie-1832169_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-a" src="/images/cookies-4610859_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-p">柚子レモンアフターヌーンティー</p>
                                    <p class="gallery-instagram-comment-p">大好きな椿山荘</p>
                                    <p class="gallery-instagram-comment-p">次も予約してある♡♡</p>
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-1" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-1">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/cupcake-2749196_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/desserts-1868181_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/macaroons-2178371_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                </div>
                <div class="gallery-instagram height-second">
                    <div class="gallery-instagram-inner">
                        <img class="img-a" src="/images/christmas-cookies-2918172_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-p">柚子レモンアフターヌーンティー</p>
                                    <p class="gallery-instagram-comment-p">大好きな椿山荘</p>
                                    <p class="gallery-instagram-comment-p">次も予約してある♡♡</p>
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-1" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-1">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/cookie-1832169_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-a" src="/images/cookies-4610859_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-p">柚子レモンアフターヌーンティー</p>
                                    <p class="gallery-instagram-comment-p">大好きな椿山荘</p>
                                    <p class="gallery-instagram-comment-p">次も予約してある♡♡</p>
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-1" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-1">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/cupcake-2749196_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/desserts-1868181_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/macaroons-2178371_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                </div>
                <div class="gallery-instagram height-second">
                    <div class="gallery-instagram-inner">
                        <img class="img-a" src="/images/christmas-cookies-2918172_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-p">柚子レモンアフターヌーンティー</p>
                                    <p class="gallery-instagram-comment-p">大好きな椿山荘</p>
                                    <p class="gallery-instagram-comment-p">次も予約してある♡♡</p>
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-1" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-1">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/cookie-1832169_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-a" src="/images/cookies-4610859_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-p">柚子レモンアフターヌーンティー</p>
                                    <p class="gallery-instagram-comment-p">大好きな椿山荘</p>
                                    <p class="gallery-instagram-comment-p">次も予約してある♡♡</p>
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-1" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-1">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/cupcake-2749196_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/desserts-1868181_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/macaroons-2178371_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                </div>
                <div class="gallery-instagram height-second">
                    <div class="gallery-instagram-inner">
                        <img class="img-a" src="/images/christmas-cookies-2918172_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-p">柚子レモンアフターヌーンティー</p>
                                    <p class="gallery-instagram-comment-p">大好きな椿山荘</p>
                                    <p class="gallery-instagram-comment-p">次も予約してある♡♡</p>
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-1" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-1">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/cookie-1832169_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-a" src="/images/cookies-4610859_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-p">柚子レモンアフターヌーンティー</p>
                                    <p class="gallery-instagram-comment-p">大好きな椿山荘</p>
                                    <p class="gallery-instagram-comment-p">次も予約してある♡♡</p>
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-1" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-1">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/cupcake-2749196_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/desserts-1868181_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/macaroons-2178371_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                </div>
                <div class="gallery-instagram height-second">
                    <div class="gallery-instagram-inner">
                        <img class="img-a" src="/images/christmas-cookies-2918172_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-p">柚子レモンアフターヌーンティー</p>
                                    <p class="gallery-instagram-comment-p">大好きな椿山荘</p>
                                    <p class="gallery-instagram-comment-p">次も予約してある♡♡</p>
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-1" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-1">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/cookie-1832169_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-a" src="/images/cookies-4610859_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-p">柚子レモンアフターヌーンティー</p>
                                    <p class="gallery-instagram-comment-p">大好きな椿山荘</p>
                                    <p class="gallery-instagram-comment-p">次も予約してある♡♡</p>
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-1" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-1">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/cupcake-2749196_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/desserts-1868181_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                    <div class="gallery-instagram-inner">
                        <img class="img-b" src="/images/macaroons-2178371_640.jpg">
                        <img class="img-c" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                        <img class="img-d" src="/images/[hotel-chinzanso-tokyo.jp][3]icoblank.png">
                        <div class="gallery-instagram-inner-hover">
                            <div class="gallery-instagram-inner-hover-inner hover-inner-small">
                                <p class="gallery-instagram-title">@coco_chanco</p>
                                <div class="gallery-instagram-comment">
                                    <p class="gallery-instagram-comment-tag">#ホテル椿山荘東京　#ホテル椿山荘</p>
                                    <p class="gallery-instagram-comment-tag">#アフターヌーンティー</p>
                                </div>
                            </div>
                            <img class="img-e e-2" src="/images/[hotel-chinzanso-tokyo.jp][226]icoinstagram.png">
                            <div class="date d-2">12月4日</div>
                        </div>
                    </div>
                </div>
                <h3>
                    <span id="more">
                        もっと見る
                        <img src="/images/[hotel-chinzanso-tokyo.jp][855]arrow04.png">
                    </span>
                </h3>
            </section>
            <section id="news"></section>
            <section id="acsess"></section>
                <!-- flexboxで作成 -->
            <footer></footer>


        </div>
    </div>
</body>
</html>