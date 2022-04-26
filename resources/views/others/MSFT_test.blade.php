<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" href="./MSFT_RWD0.css">
    <link rel="stylesheet" href="./MSFT_RWD1.css">
    <link rel="stylesheet" href="./MSFT_RWD2.css">
    <link rel="stylesheet" href="./MSFT_RWD3.css">
    <link rel="stylesheet" href="./MSFT_RWD4.css">
    <link rel="stylesheet" href="./MSFT_RWD5.css">
    {{-- 改asset方式 --}}
    <link rel="stylesheet" href="{{asset('MSFT_CSS/MSFT_RWD0.css')}}">
    <style>

    </style>
</head>

<body>
    <div class="container">
        <div class="nav">
            <div class="burgerlink">
                <div class="burgerlink_icon">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="burgerlist">
                    <div class="burger_list">
                        <div>Microsoft 365</div>
                    </div>
                    <div class="burger_list">
                        <div>Office</div>
                    </div>
                    <div class="burger_list">
                        <div>Windows</div>
                    </div>
                    <div class="burger_list">
                        <div>Surface</div>
                    </div>
                    <div class="burger_list">
                        <div>Xbox</div>
                    </div>
                    <div class="burger_list">
                        <div>支援</div>
                    </div>
                    <div id="drop1" class="burger_list">
                        <div>軟體</div>
                        <div class="drop"><i class="fa-solid fa-angle-down"></i></div>
                        <div class="dropsub1">
                            <div>Windows 應用程式</div>
                            <div>OneDrive</div>
                            <div>Outlook</div>
                            <div>Skype</div>
                            <div>OneNote</div>
                            <div>Microsoft Teams</div>
                        </div>
                    </div>
                    <div id="drop2" class="burger_list">
                        <div>個人電腦和設備</div>
                        <div class="drop"><i class="fa-solid fa-angle-down"></i></div>
                        <div class="dropsub2">
                            <div>選購 Xbox</div>
                            <div>電腦配件</div>
                        </div>
                    </div>
                    <div id="drop3" class="burger_list">
                        <div>娛樂</div>
                        <div class="drop"><i class="fa-solid fa-angle-down"></i></div>
                        <div class="dropsub3">
                            <div>Xbox Game Pass Ultimate</div>
                            <div>Xbox Live Gold</div>
                            <div>Xbox 與遊戲</div>
                            <div>電腦遊戲</div>
                            <div>Windows 遊戲</div>
                        </div>
                    </div>
                    <div id="drop4" class="burger_list">
                        <div>商務適用</div>
                        <div class="drop"><i class="fa-solid fa-angle-down"></i></div>
                        <div class="dropsub4">
                            <div>Microsoft Cloud</div>
                            <div>Microsoft Azure</div>
                            <div>Microsoft Dynamics 365</div>
                            <div>Microsoft 365</div>
                            <div>Window 365</div>
                            <div>Microsoft Industry</div>
                            <div>選購商務版</div>
                        </div>
                    </div>
                    <div id="drop5" class="burger_list">
                        <div>Developer & IT</div>
                        <div class="drop"><i class="fa-solid fa-angle-down"></i></div>
                        <div class="dropsub5">
                            <div>.NET</div>
                            <div>Visual Studio</div>
                            <div>Windows Server</div>
                            <div>開發 Windows 應用程式</div>
                            <div>文件</div>
                            <div>Power Platform</div>
                            <div>Power Apps</div>
                        </div>
                    </div>
                    <div id="drop6" class="burger_list">
                        <div>其他</div>
                        <div class="drop"><i class="fa-solid fa-angle-down"></i></div>
                        <div class="dropsub6">
                            <div>Microsoft Rewards</div>
                            <div>免費下載與安全性</div>
                            <div>教育</div>
                            <div>禮品卡</div>
                            <div>Licensing</div>
                        </div>
                    </div>
                    <div class="burger_list">
                        <div class="drop">檢視網站地圖</div>
                    </div>
                </div>
            </div>

            <div class="logobox"></div>
            <div class="nav_list">
                <ul>
                    <li>Microsoft 365</li>
                    <li>Office</li>
                    <li>Windows</li>
                    <li>Surface</li>
                    <li>Xbox</li>
                    <li>支援</li>
                </ul>
            </div>
            <div class="profilebox" tabindex="3">
                <div class="navright_menu-profile">
                    <div class="navright_menu-profile-1">
                        <div></div>
                    </div>
                    <div class="navright_menu-profile-2">
                        <div>登出</div>
                    </div>
                    <div class="navright_menu-profile-3">
                        <div></div>
                    </div>
                    <div class="navright_menu-profile-4">
                        <div></div>
                        <div class="navright_menu-profile-4-1">新增您的名稱</div>
                        <div class="navright_menu-profile-4-2">我的Microsoft 帳戶</div>
                    </div>
                </div>
            </div>

            <div class="nav_rightbox1">
                <div class="navshop_font">購物車</div>
                <div class="navshop_icon"><i class="fa-solid fa-cart-shopping"></i></div>

            </div>

            <div class="nav_rightbox2" tabindex="2">
                <div class="navsearch_font">搜尋</div>
                <div class="navsearch_icon"><i class="fa-solid fa-magnifying-glass"></i></div>

                <div class="navright_menu-search">
                    <input type="text" name="" id="" placeholder="搜尋 Microsoft.com">
                    <div class="cancelbox">
                        <button>取消</button>
                    </div>
                </div>

            </div>


            <div class="nav_rightbox3" tabindex="1">
                <div class="navall_font">所有Microsoft</div>
                <div class="navall_icon"><i class="fa-solid fa-angle-down"></i></div>

                <div class="navright_menu-all">
                    <div class="navright_menu-all-top">
                        <div class="navright_menu-all-top-listbox1">
                            <ul>
                                <p><b>軟體</b></p>
                                <li>Windows 應用程式</li>
                                <li>OneDrive</li>
                                <li>Outook</li>
                                <li>Skype</li>
                                <li>OneNote</li>
                                <li>Microsoft Teams</li>
                            </ul>
                        </div>
                        <div class="navright_menu-all-top-listbox2">
                            <ul>
                                <p><b>個人電腦和設備</b></p>
                                <li>選購 Xbox</li>
                                <li>電腦配件</li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                        <div class="navright_menu-all-top-listbox3">
                            <ul>
                                <p><b>娛樂</b></p>
                                <li>Xbox Game Pass Ultimate</li>
                                <li>Xbox Live Gold</li>
                                <li>Xbox 與遊戲</li>
                                <li>電腦遊戲</li>
                                <li>Windows 遊戲</li>
                            </ul>
                        </div>
                        <div class="navright_menu-all-top-listbox4">
                            <ul>
                                <p><b>商務適用</b></p>
                                <li>Microsoft Cloud</li>
                                <li>Microsoft Azure</li>
                                <li>Microsoft Dynamic 365</li>
                                <li>Microsoft 365</li>
                                <li>Windows 365</li>
                                <li>Microsoft Industry</li>
                                <li>選購商務版</li>
                            </ul>
                        </div>
                        <div class="navright_menu-all-top-listbox5">
                            <ul>
                                <p><b>Developer & IT</b></p>
                                <li>.NET</li>
                                <li>Visual Studio</li>
                                <li>Windows Server</li>
                                <li>開發 Windows 應用程式</li>
                                <li>文件</li>
                                <li>Power Platform</li>
                                <li>Power Apps</li>
                            </ul>
                        </div>
                        <div class="navright_menu-all-top-listbox6">
                            <ul>
                                <p><b>其他</b></p>
                                <li>Microsoft Rewards</li>
                                <li>免費下載與安全性</li>
                                <li>教育</li>
                                <li>禮品卡</li>
                                <li>Licensing</li>
                            </ul>
                        </div>

                    </div>
                    <div class="navright_menu-all-btm">
                        <div class="navright_menu-all-btm-fontbox">
                            <div class="navright_menu-all-btm-fontbox-inner">檢視網站地圖 ></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section1">
            <div class="s1fontbox">
                <div class="s1fontbox-1">新上市</div>
                <div class="s1fontbox-2">專為今天和明天的生活而設計</div>
                <div class="s1fontbox-3">新一代遊戲、您的目標、您的好友。Windows 11 是為了讓您更貼近所喜愛的一切。</div>
                <div class="s1fontbox-4">查看您的電腦是否準備就緒</div>
            </div>
        </div>
        <div class="section1v2">
            <div class="s1v2fontbox">
                <div class="s1v2fontbox-1">
                    <div class="s1v2fontbox-1_font">新上市</div>
                </div>
                <div class="s1v2fontbox-2">
                    <div class="s1v2fontbox-2_font">專為今天和明天的生活而設計</div>
                </div>
                <div class="s1v2fontbox-3">
                    <div class="s1v2fontbox-3_font">新一代遊戲、您的目標、您的好友。Windows 11 是為了讓您更貼近所喜愛的一切。</div>
                </div>
                <div class="s1v2fontbox-4">
                    <div class="s1v2fontbox-4_font">查看您的電腦是否準備就緒</div>
                </div>
            </div>
        </div>
        <div class="section2">

            <div class="s2box1">
                <div class="s2box1-0">
                    <div class="s2box1-1"></div>
                    <div class="s2box1-2"></div>
                    <div class="s2box1-3"></div>
                </div>
            </div>
            <div class="s2box2">
                <div class="s2box2-0">
                    <div class="s2box2-1">選擇您的
                        <!-- <br> -->
                        Microsoft 365
                    </div>
                    <div class="s2box2-2">選購 SurFace 裝置</div>
                    <div class="s2box2-3">取得 Windows 11</div>
                </div>
            </div>
        </div>
        <div class="section3">
            <div class="section3_inner">
                <div class="s3box1">
                    <div class="s3box1-top"></div>
                    <div class="s3box1-btm">
                        <b>Microsoft 365</b>
                        <br>
                        進階版 Office 應用程式、額外的雲端儲存空間、進階安全性等功能，全都在一個方便的訂閱中。
                        <br>
                        <b>最多可供 6 人使用 適合 1 人使用</b>
                    </div>
                </div>
                <div class="s3box2">
                    <div class="s3box2-top"></div>
                    <div class="s3box2-btm">
                        <b>Surface Laptop Go</b>
                        <br>
                        運用時尚和效能兼具、最輕巧的 Surface 筆記型電腦，善加利用每一天。
                        <br>
                        <b>立即選購</b>
                    </div>
                </div>
                <div class="s3box3">
                    <div class="s3box3-top"></div>
                    <div class="s3box3-btm"><b>查看更新的內容</b>
                        <br>
                        <b>Surface Pro X</b>
                        <br>
                        隨時隨地以任何角度不間斷工作，而且配備了可拆式鍵盤與內建的 Slim Pen 存放空間和充電功能。 現在搭載 Windows 11。
                        <br>
                        <b>立即選購</b>
                    </div>
                </div>
                <div class="s3box4">
                    <div class="s3box4-top"></div>
                    <div class="s3box4-btm"><b>Xbox Game Pass Ultimate</b>
                        <br>
                        首月會員資格只要 NT$30。 在您擁有的裝置上遊玩。 包含 EA Play。 此優惠僅適用於新訂閱者。
                        <br>
                        <b>立即加入</b>
                    </div>
                </div>
            </div>
        </div>
        <div class="section4">
            <div class="s4fontbox">
                <div class="s4fontbox-1">Microsoft OneDrive</div>
                <div class="s4fontbox-2">將檔案和相片儲存到OneDrive，即可隨時隨地從任何裝置存取</div>
                <div class="s4fontbox-3">深入了解 ></div>
            </div>
        </div>
        <div class="section4v5">
            <div class="s4v5fontbox">
                <div class="s4v5fontbox-1">
                    <div class="s4v5fontbox-1_font">Microsoft OneDrive</div>
                </div>
                <div class="s4v5fontbox-2">
                    <div class="s4v5fontbox-2_font">將檔案和相片儲存到OneDrive，即可隨時隨地從任何裝置存取</div>
                </div>
                <div class="s4v5fontbox-3">
                    <div class="s4v5fontbox-3_font">深入了解 ></div>
                </div>
            </div>
        </div>
        <div class="fontbox">
            <div class="fontbox-inner">適用於商務</div>
        </div>
        <div class="section5">
            <div class="section5_inner">
                <div class="s5box1">
                    <div class="s5box1-top"></div>
                    <div class="s5box1-btm">
                        <b>適用於商務的 Surface</b>
                        <br>
                        無論從事哪種工作，都有一款有助於成功的 Surface。
                        <br>
                        <b>立即選購</b>
                    </div>
                </div>
                <div class="s5box2">
                    <div class="s5box2-top"></div>
                    <div class="s5box2-btm">
                        <b>免費取得 Microsoft Teams</b>
                        <br>
                        線上會議、聊天和共用雲端儲存空間，盡在一處。
                        <br>
                        <b>免費註冊</b>
                    </div>
                </div>
                <div class="s5box3">
                    <div class="s5box3-top"></div>
                    <div class="s5box3-btm">
                        <b>在混合式環境中蓬勃發展</b>
                        <br>
                        探索工具、資源和策略，協助您的員工在靈活辦公的新環境中取得成功。
                        <br>
                        <b>深入了解</b>
                    </div>
                </div>
                <div class="s5box4">
                    <div class="s5box4-top"></div>
                    <div class="s5box4-btm">
                        <b>商務用 Windows 11 登場</b>
                        <br>
                        專為混合式辦公而設計。 為員工帶來實用性。 為 IT 帶來一致性。 為所有人帶來安全性。
                        <br>
                        <b>深入了解</b>
                    </div>

                </div>
            </div>
        </div>
        <div class="msftbox">
            <div class="msftbox-1">關注Microsoft</div>
            <div class="msftbox-2"></div>
            <div class="msftbox-3"></div>
        </div>
        <div class="footer">
            <div class="footerbox1">
                <ul>
                    <p><b>最新動向</b></p>
                    <li>Microsoft 365</li>
                    <li>Surface Go</li>
                    <li>Surface Book 2</li>
                    <li>Surface Pro</li>
                    <li>Windows 11 應用程式</li>
                </ul>
            </div>
            <div class="footerbox2">
                <ul>
                    <p><b>Microsoft Store</b></p>
                    <li>帳戶設定檔</li>
                    <li>下載中心</li>
                    <li>Microsoft Store 支援</li>
                    <li>退貨/退款</li>
                    <li>訂單追蹤</li>
                </ul>
            </div>
            <div class="footerbox3">
                <ul>
                    <p><b>教育</b></p>
                    <li>Microsoft在教育領域的應用</li>
                    <li>學生適用的 Office</li>
                    <li>學校適用的 Office 365</li>
                    <li>Microsoft Azure 在教育領域的應用</li>
                </ul>
            </div>
            <div class="footerbox4">
                <ul>
                    <p><b>企業</b></p>
                    <li>Azure</li>
                    <li>AppSource</li>
                    <li>汽車</li>
                    <li>政府機構</li>
                    <li>醫療保健</li>
                    <li>製造</li>
                    <li>金融服務</li>
                    <li>零售</li>
                </ul>
            </div>
            <div class="footerbox5">
                <ul>
                    <p><b>開發人員</b></p>
                    <li>Microsoft Visual Studio</li>
                    <li>Windows 開發人員中心</li>
                    <li>開發人員中心</li>
                    <li>Microsoft 開發人員計畫</li>
                    <li>Channel 9</li>
                    <li>Microsoft 365 開發人員中心</li>
                    <li>Microsoft 365 開發人員計畫</li>

                </ul>
            </div>
            <div class="footerbox6">
                <ul>
                    <p><b>公司</b></p>
                    <li>人才招募</li>
                    <li>公司新聞</li>
                    <li>Microsoft 隱私權</li>
                    <li>投資者</li>
                    <li>安全性</li>
                </ul>
            </div>
        </div>
        <div class="footerlist">
            <div class="footerlist_left">
                <div><i class="fa-solid fa-earth-americas"></i></div>
                <div>中文(台灣)</div>
            </div>
            <div class="footerlist_right">
                <div>聯絡Microsoft</div>
                <div>隱私權</div>
                <div>使用規定</div>
                <div>商標</div>
                <div>有關我們的廣告訊息</div>
                <div class="copyright">
                    <div><i class="fa-regular fa-copyright"></i></div>
                    <div>Microsoft 2022</div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
