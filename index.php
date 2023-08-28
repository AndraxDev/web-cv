<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>AndraxDev</title>
        <meta  charset = "utf-8">
        <meta name = "viewport" content="width=device-width, initial-scale=1.0">
        <meta name = "google-site-verification" content="kmCwColgJ7_i73Pzxs3p9aQhMYL9cxf7EtTVuiDX2Lc">
        <meta name = "theme-color" content="#1c1a21">
        <link rel = "stylesheet" href = "styles.css">
        <link rel = "icon" href = "icon.webp">
        <link rel="preload" as="image" href="https://andrax.dev/photo.webp">
        
        <meta name="description" content="AndraxDev - Student of the Technical University of Kosice and Android developer">
        
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-MRNVLYWNRT"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            
            gtag('config', 'G-MRNVLYWNRT');
        </script>
    </head>
    <body>
        <div class = "background">
            <div class = "content">
                <div class = "me">
                    <img fetchpriority="high" src = "photo.webp" class = "photo" width = "160" height = "160" alt = "Photo">
                    <h1 class = "header-text">Hello, I'm AndraxDev</h1>
                    <h1 class = "header-text">&nbsp;</h1>
                    <div class = "typewriter">
                        <span>
                            <span class = "colored header-text" id = "typed"><b></b></span>
                            <span class = "colored header-text" id = "cursor"><b>█</b></span>
                        </span>
                    </div>
                    <span><h1 class = "invisible header-text">█</h1></span>
                    <a href = "https://github.com/AndraxDev"><button class = "link-1">Github</button></a>
                    &nbsp;
                    <a href = "https://www.linkedin.com/in/andraxdev/"><button class = "link-2">Linked In</button></a>
                    &nbsp;
                    <a href = "mailto:dostapenko82@gmail.com"><button class = "link-3">Email me</button></a>
                    &nbsp;
                    <a href = "https://teslasoft.org"><button class = "link-4">Teslasoft</button></a>
		    &nbsp;
                    <a href = "https://www.paypal.com/donate/?hosted_button_id=KR6BRY2BPEQTL"><button class = "link-5">Support me</button></a>
                    <h1 class = "header-text">&nbsp;</h1>
                </div>
                <div class = "projects">
                    <h1 class = "title-regular prjs-title header-text">My skills</h1>
                    <h1 class = "prjs-title header-text">&nbsp;</h1>
                    <div class = "badges">
                        <img loading="lazy" alt = "Java" onclick = "javascript:searchTag('lang:Java')" width = "57" height = "28" class = "badge" src="https://img.shields.io/badge/-Java-E02424?style=for-the-badge&logo=java&logoColor=white">
                        <img loading="lazy" alt = "Kotlin" onclick = "javascript:searchTag('lang:Kotlin')" width = "95" height = "28" class = "badge" src="https://img.shields.io/badge/-Kotlin-FA3B25?style=for-the-badge&logo=kotlin&logoColor=white">
                        <img loading="lazy" alt = "HTML" onclick = "javascript:searchTag('lang:HTML')" width = "88" height = "28" class = "badge" src="https://img.shields.io/badge/-HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white">
                        <img loading="lazy" alt = "CSS" onclick = "javascript:searchTag('lang:CSS')" width = "77" height = "28" class = "badge" src="https://img.shields.io/badge/-CSS3-E0AE24?style=for-the-badge&logo=css3&logoColor=white">
                        <img loading="lazy" alt = "JavaScript" onclick = "javascript:searchTag('lang:JavaScript')" width = "127" height = "28" class = "badge" src="https://img.shields.io/badge/-Javascript-E0E024?style=for-the-badge&logo=css3&logoColor=black">
                        <img loading="lazy" alt = "C" onclick = "javascript:searchTag('lang:c')" width = "52" height = "28" class = "badge" src="https://img.shields.io/badge/-C-B4E024?style=for-the-badge&logo=c&logoColor=black">
                        <img loading="lazy" alt = "C#" onclick = "javascript:searchTag('lang:csharp')" width = "62" height = "28" class = "badge" src="https://img.shields.io/badge/-C%23-B4E024?style=for-the-badge&logo=c-sharp&logoColor=black">
                        <img loading="lazy" alt = "C++" onclick = "javascript:searchTag('lang:cpp')" width = "72" height = "28" class = "badge" src="https://img.shields.io/badge/-C++-5FC740?style=for-the-badge&logo=c%2B%2B&logoColor=white">
                        <img loading="lazy" alt = "PHP" onclick = "javascript:searchTag('lang:PHP')" width = "71" height = "28" class = "badge" src="https://img.shields.io/badge/-PHP-40C79E?style=for-the-badge&logo=php&logoColor=white">
                        <img loading="lazy" alt = "Python" onclick = "javascript:searchTag('lang:Python')" width = "98" height = "28" class = "badge" src="https://img.shields.io/badge/-Python-24D0F2?style=for-the-badge&logo=python&logoColor=white">
                    </div>
                    <h1 class = "title-regular prjs-title header-text">&nbsp;</h1>
                </div>
                <div class = "projects">
                    <h1 class = "title-regular prjs-title header-text">I'm using</h1>
                    <h1 class = "prjs-title header-text">&nbsp;</h1>
                    <div class = "badges">
                        <img loading="lazy" alt = "Android SDK" onclick = "javascript:searchTag('tag:Android')" width = "139" height = "28" class = "badge" src="https://img.shields.io/badge/-Android%20SDK-3DDC84?style=for-the-badge&logo=android&logoColor=white">
                        <img loading="lazy" alt = "JWT" onclick = "javascript:searchTag('tag:JWT')" width = "71" height = "28" class = "badge" src="https://img.shields.io/badge/-JWT-000000?style=for-the-badge&logo=JSON%20web%20tokens&logoColor=white">
                        <img loading="lazy" alt = "Firebase" onclick = "javascript:searchTag('tag:Firebase')" width = "109" height = "28" class = "badge" src="https://img.shields.io/badge/-Firebase-FCDF03?style=for-the-badge&logo=firebase&logoColor=black">
                        <img loading="lazy" alt = "Google Cloud" onclick = "javascript:searchTag('tag:Google Cloud')" width = "147" height = "28" class = "badge" src="https://img.shields.io/badge/-Google%20Cloud-03A5FC?style=for-the-badge&logo=Google&logoColor=white">
                        <img loading="lazy" alt = "Play Integrity" onclick = "javascript:searchTag('tag:Play Integrity')" width = "186" height = "28" class = "badge" src="https://img.shields.io/badge/-Play%20Integrity%20API-4EA373?style=for-the-badge&logo=Google+play&logoColor=white">
                        <img loading="lazy" alt = "ChatGPT" onclick = "javascript:searchTag('tag:GPT')" width = "110" height = "28" class = "badge" src="https://img.shields.io/badge/-ChatGPT-00C98D?style=for-the-badge&logo=openai&logoColor=white">
		    </div>
                    <h1 class = "prjs-title header-text">&nbsp;</h1>
                </div>
                <div class = "projects">
                    <h1 class = "title-regular prjs-title header-text">To make quality projects I'm using</h1>
                    <h1 class = "prjs-title header-text">&nbsp;</h1>
                    <div class = "badges">
                        <img loading="lazy" alt = "Postman" class = "badge" width = "108" height = "28" src="https://img.shields.io/badge/-Postman-F54242?style=for-the-badge&logo=postman&logoColor=white">
                        <img loading="lazy" alt = "SonarLint" class = "badge" width = "121" height = "28" src="https://img.shields.io/badge/-Sonarlint-6042F5?style=for-the-badge&logo=sonarlint&logoColor=white">
                    </div>
                    <h1 class = "prjs-title header-text">&nbsp;</h1>
                </div>
                <div class = "projects">
                    <div>
                        <h2 class = "prj-title header-text">💡 Pro tip</h2>
                        <h1 class = "prjs-title header-text">&nbsp;</h1>
                        <span class = "prj-desc">&nbsp;&nbsp;Click the badges to view related projects.</span>
                    </div>
                </div>
                <div class = "projects" id = "q">
                    <h1 class = "title-regular prjs-title header-text">My projects</h1>
                    <h1 class = "prjs-title header-text">&nbsp;</h1>
                    <div class = "search">
                        <input class = "search-input" id = "query" placeholder = "Project name/tag/programming language">
                        <button class = "search-btn" id = "search" onclick = "javascript:search()">Search</button>
                    </div>
                    <h1 class = "prjs-title header-text">&nbsp;</h1>
                    <div class = "project">
                        <div>
                            <h2 class = "prj-title header-text">💡 Pro tip</h2>
                            <h1 class = "prjs-title header-text">&nbsp;</h1>
                            <span class = "prj-desc">&nbsp;&nbsp;Use <b class = "tip-highlight">tag:<b class = "tip-highlight2">TAG</b></b> to search by tags.</span>
                            <br>
                            <span class = "prj-desc">&nbsp;&nbsp;Use <b class = "tip-highlight">lang:<b class = "tip-highlight2">LANGUAGE</b></b> to search by language.</span>
                            <br><br>
                            <span class = "prj-desc">&nbsp;&nbsp;Query case does not matter.</span>
                            <br>
                            <span class = "prj-desc">&nbsp;&nbsp;Leave searchbar empty and click "Search" to show all projects.</span>
                        </div>
                    </div>
                    
                    <div class = "not-found" id = "err">
                        <h1 class = "prjs-title header-text">&nbsp;</h1>
                        <h1 class = "err header-text" id = "err-text">Nothing was found</h1>
                        <h1 class = "prjs-title header-text">&nbsp;</h1>
                    </div>
                    
                    <div class = "prj-list" id = "pl">
                        
                    </div>
                </div>
                <p class = "copyright">© 2023 Dmytro Ostapenko. All rights reserved. <a href = "https://teslasoft.org/privacy">Privacy Policy</a></p>
                <h1 class = "header-text">&nbsp;</h1>
            </div>
        </div>
        <script>
            var string = "Student and Android developer. ";
            var temp = "";
            var len = string.length;
            var i = 0;
            var c = 0;
            var cursor = "█";
            
            function type() {
                temp += string[i];
                document.getElementById("typed").innerHTML = temp;
                i++;
                if (i < len) {
                    setTimeout(type, 50);
                } else {
                    animate();
                }
            }
            
            function animate() {
                if (c === 0) {
                    document.getElementById("cursor").style.opacity = "1";
                    c = 1;
                } else {
                    document.getElementById("cursor").style.opacity = "0";
                    c = 0;
                }
                
                setTimeout(animate, 500);
            }
            
            type();
        </script>
        <script>
            function search() {
                load(document.getElementById("query").value);
            }
            
            function searchTag(tag) {
                document.getElementById("query").value = tag;
                
                var element = document.querySelector("#q");
                element.scrollIntoView({ behavior: 'smooth', block: 'start'});
                
                load(tag);
            }
        
            function load(query) {
                var url = "https://andrax.dev/api.php?query=" + query;
                var ajax = new XMLHttpRequest(); 
                ajax.addEventListener("load", function () {
                    if (this.status == 200) {
                	    var response = JSON.parse(this.responseText);
                	    
                	    if (response.length == 0) {
                	        document.getElementById("err").style.display = "block";
                	        document.getElementById("pl").style.display = "none";
                            document.getElementById("err-text").innerHTML = "Nothing was found";
                	    } else {
                	        document.getElementById("err").style.display = "none";
                            document.getElementById("pl").style.display = "block";
                            
                            document.getElementById("pl").innerHTML = "";
                            
                    	    response.forEach(element => {
                    	        var buttons = "";
                    	        
                    	        if (element.play !== "") {
                    	            var temp = `<a href = "` + element.play + `"><button class = "link-1">Google Play</button></a>`;
                    	            buttons += temp;
                    	        }
                    	        
                    	        if (element.play !== "" && element.github !== "") {
                    	            buttons += `<div class = "prj-link-divider"></div>`;
                    	        }
                    	        
                    	        if (element.github !== "") {
                    	            var temp = `<a href = "` + element.github + `"><button class = "link-2">Github</button></a>`;
                    	            buttons += temp;
                    	        }
                    	        
                    	        var tags = "";
                    	        
                    	        element.tags.forEach(element => {
                    	            var temp = `<p class = "prj-tag" onclick = "javascript:searchTag('tag:` + element + `')">` + element + `</p>`;
                    	            tags += temp;
                    	        });
                    	        
                    	        var project = 
                    	            `<div class = "project">
                                        <div class = "td-prj-icon">
                                            <img loading="lazy" src = "` + element.icon + `" width = "112" height = "112" class = "prj-icon" alt = "` + element.title + `">
                                        </div>
                                        <div class = "td-prj-card">
                                            <h2 class = "prj-title header-text">` + element.title + `</h2>
                                            <p class = "prj-desc">` + element.desc + `</p>
                                            <div class = "prj-tags">
                                                ` + tags + `
                                            </div>
                                            <div class = "prj-links">
                                                ` + buttons + `
                                            </div>
                                        </div>
                                    </div>`;
                                    
                                document.getElementById("pl").innerHTML += project;
                    	    });
                	    }
                    } else {
                        document.getElementById("err").style.display = "block";
                        document.getElementById("pl").style.display = "none";
                        document.getElementById("err-text").innerHTML = "An error occurred";
                    }
                }); 
                ajax.open("GET", url, true); 
                ajax.send();
            }
            
            document.getElementById("pl").style.display = "none";
            document.getElementById("err").style.display = "none";
            
            var input = document.getElementById("query");

            input.addEventListener("keypress", function(event) {
                if (event.key === "Enter") {
                    event.preventDefault();
                    document.getElementById("search").click();
                }
            });
            
            load("");
        </script>
        <script src="//cookieinfoscript.com/js/cookieinfo.min.js" data-bg="#1c1a21" data-fg="#FFFFFF" data-link="#cbb1ff" data-cookie="GDPRCookieAccept" data-text-align="left" data-font-family="Sans-serif" data-font-size="16px" data-message="We are using cookies to make your experience better." data-linkmsg="Read more" data-moreinfo="https://teslasoft.org/cookies" data-divlink="#1c1a21" data-divlinkbg="#cbb1ff" data-close-text="Accept and close" defer></script>
    </body>
</html>
