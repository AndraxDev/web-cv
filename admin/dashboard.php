<!DOCTYPE html>
<html>
    <head>
        <title>Admin panel</title>
        <meta charset = "utf-8">
        <link rel = "stylesheet" href = "https://cdn.teslasoft.org/material/mdl/1.3.0/css/material.purple-red.min.css">
        <link rel = "stylesheet" href = "./css/styles.min.css">
        <link href = "https://travel.teslasoft.org/favicon.png" rel = "icon">
        <script src = "https://cdn.teslasoft.org/material/mdl/1.3.0/js/material.min.js"></script>
        <script src = "https://cdn.teslasoft.org/jquery/3.4.1/js/jquery.min.js"></script>
        <meta name="robots" content="noindex, nofollow" />
    </head>
    <body>
        <div>
            <div class = "action-bar">
                <h1 class = "activity-title">Admin panel</h1>
                <p class = "user" id = "username">Logged in as</p>
                <button class = "btn-logout" id = "logout" onclick = "logout()">Logout</button>
            </div>
            <div id = "loading" class = "loading" onclick = "javascript:void(0)">
                <div class = "l">
                    <div class="progress mdl-spinner mdl-js-spinner is-active"></div>
                </div>
            </div>
            <div class = "modal-important" id = "modal-error">
                <div class = "l">
                    <div class = "modal-bg-alert" id = "modal-bg-error">
                        <h2 class = "modal-title">Error</h2>
                        <p id = "error-text" class = "preview-text"></p>
                        <div class = "action-buttons">
        	                <button class = "btn-remove" onclick = "closeError()">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "layout" id = "content">
                <p>Visits: </p>
            </div>
        </div>
        <script>
            function logout() {
                localStorage.removeItem("token");
                localStorage.removeItem("username");
                window.location.replace("auth.php");
            }
            
            document.getElementById("loading").style.display = "table";
            document.getElementById("modal-error").style.display = "none";
        
            if (localStorage.getItem("token") !== null && localStorage.getItem("username") !== null) {
                document.getElementById("username").innerHTML = "Logged in as <b>" + localStorage.getItem("username") + "</b>";
    
                var url = "https://andrax.teslasoft.org/admin/session.php?token=" + localStorage.getItem("token");
                var ajax = new XMLHttpRequest(); 
                ajax.addEventListener("load", function () {
                    if (this.status == 200) {
                	    var response = JSON.parse(this.responseText);
                	    
                	    if (response.code == 200) {
                	        document.getElementById("loading").style.display = "none";
                	    } else {
                	        document.getElementById("modal-error").style.display = "table";
                            document.getElementById("error-text").innerHTML = "Authentication required"
                	        window.location.replace("auth.php?invsession=1");
                	    }
                    } else {
                        document.getElementById("modal-error").style.display = "table";
                        document.getElementById("error-text").innerHTML = this.responseText
                        document.getElementById("loading").style.display = "none";
                    }
                }); 
                ajax.open("GET", url, true); 
                ajax.send();
            } else {
                window.location.replace("auth.php");
            }
        </script>
    </body>
</html>