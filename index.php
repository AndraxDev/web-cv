<!DOCTYPE html>
<html>
<head>
    <title>AndraxDev</title>
    <meta  charset = "utf-8">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu+Mono" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "styles.css">
    <link rel = "icon" href = "icon.png">
</head>
<body>
<div class = "background">
    <div class = "content">
        <div class = "me">
            <img src = "photo.png" class = "photo">
            <h1 class = "header-text">Hello, I'm AndraxDev</h1>
            <h1 class = "header-text">&nbsp;</h1>
            <span><h1 class = "colored header-text" id = "typed">[please enable javascript to display this page correctly]</h1><h1 class = "invisible header-text">█</h1></span>
            <a href = "https://github.com/AndraxDev"><button class = "link-1">Github</button></a>
            &nbsp;
            <a href = "https://www.linkedin.com/in/andraxdev/"><button class = "link-2">Linked In</button></a>
            &nbsp;
            <a href = "mailto:dostapenko82@gmail.com"><button class = "link-3">Email me</button></a>
            &nbsp;
            <a href = "https://teslasoft.org"><button class = "link-4">Teslasoft</button></a>
            <h1 class = "header-text">&nbsp;</h1>
        </div>
        <div class = "projects">
            <h1 class = "title-regular prjs-title header-text">My skills</h1>
            <h1 class = "prjs-title header-text">&nbsp;</h1>
            <div class = "badges">
                <img onclick = "javascript:searchTag('lang:Java')" class = "badge" src="https://img.shields.io/badge/-Java-E02424?style=for-the-badge&logo=java&logoColor=white">
                <img onclick = "javascript:searchTag('lang:Kotlin')" class = "badge" src="https://img.shields.io/badge/-Kotlin-FA3B25?style=for-the-badge&logo=kotlin&logoColor=white">
                <img onclick = "javascript:searchTag('lang:HTML')" class = "badge" src="https://img.shields.io/badge/-HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white">
                <img onclick = "javascript:searchTag('lang:CSS')" class = "badge" src="https://img.shields.io/badge/-CSS3-E0AE24?style=for-the-badge&logo=css3&logoColor=white">
                <img onclick = "javascript:searchTag('lang:JavaScript')" class = "badge" src="https://img.shields.io/badge/-Javascript-E0E024?style=for-the-badge&logo=css3&logoColor=black">
                <img onclick = "javascript:searchTag('lang:c')" class = "badge" src="https://img.shields.io/badge/-C-B4E024?style=for-the-badge&logo=c&logoColor=black">
                <img onclick = "javascript:searchTag('lang:csharp')" class = "badge" src="https://img.shields.io/badge/-C%23-B4E024?style=for-the-badge&logo=c-sharp&logoColor=black">
                <img onclick = "javascript:searchTag('lang:cpp')" class = "badge" src="https://img.shields.io/badge/-C++-5FC740?style=for-the-badge&logo=c%2B%2B&logoColor=white">
                <img onclick = "javascript:searchTag('lang:PHP')" class = "badge" src="https://img.shields.io/badge/-PHP-40C79E?style=for-the-badge&logo=php&logoColor=white">
                <img onclick = "javascript:searchTag('lang:Python')" class = "badge" src="https://img.shields.io/badge/-Python-24D0F2?style=for-the-badge&logo=python&logoColor=white">
            </div>
            <h1 class = "title-regular prjs-title header-text">&nbsp;</h1>
        </div>
        <div class = "projects">
            <h1 class = "title-regular prjs-title header-text">I'm using</h1>
            <h1 class = "prjs-title header-text">&nbsp;</h1>
            <div class = "badges">
                <img onclick = "javascript:searchTag('tag:Android')" class = "badge" src="https://img.shields.io/badge/-Android%20SDK-3DDC84?style=for-the-badge&logo=android&logoColor=white">
                <img onclick = "javascript:searchTag('tag:JWT')" class = "badge" src="https://img.shields.io/badge/-JWT-000000?style=for-the-badge&logo=JSON%20web%20tokens&logoColor=white">
                <img onclick = "javascript:searchTag('tag:Firebase')" class = "badge" src="https://img.shields.io/badge/-Firebase-FCDF03?style=for-the-badge&logo=firebase&logoColor=black">
                <img onclick = "javascript:searchTag('tag:Google Cloud')" class = "badge" src="https://img.shields.io/badge/-Google%20Cloud-03A5FC?style=for-the-badge&logo=Google&logoColor=white">
                <img onclick = "javascript:searchTag('tag:Play integrity')" class = "badge" src="https://img.shields.io/badge/-Play%20Integrity%20API-4EA373?style=for-the-badge&logo=Google+play&logoColor=white">
            </div>
            <h1 class = "prjs-title header-text">&nbsp;</h1>
        </div>
        <div class = "projects">
            <h1 class = "title-regular prjs-title header-text">To make quality projects I'm using</h1>
            <h1 class = "prjs-title header-text">&nbsp;</h1>
            <div class = "badges">
                <img class = "badge" src="https://img.shields.io/badge/-Postman-F54242?style=for-the-badge&logo=postman&logoColor=white">
                <img class = "badge" src="https://img.shields.io/badge/-Sonarlint-6042F5?style=for-the-badge&logo=sonarlint&logoColor=white">
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
        <p class = "copyright">© 2023 Dmytro Ostapenko. All rights reserved.</p>
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
    var empty = "&nbsp;";

    function type() {
        temp += string[i];
        document.getElementById("typed").innerHTML = temp + cursor;
        i++;
        if (i < len) {
            setTimeout(type, 50);
        } else {
            animate();
        }
    }

    function animate() {
        if (c === 0) {
            document.getElementById("typed").innerHTML = string + cursor;
            c = 1;
        } else {
            document.getElementById("typed").innerHTML = string + empty;
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
        var url = "https://andrax.teslasoft.org/api.php?query=" + query;
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
                                            <img src = "` + element.icon + `" class = "prj-icon">
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
</body>
</html>