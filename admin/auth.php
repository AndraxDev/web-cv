<!DOCTYPE html>
<html>
    <head>
        <title>Authentication required</title>
        <meta charset = "utf-8">
        <link href = "https://travel.teslasoft.org/favicon.png" rel = "icon">
        <link rel = "stylesheet" href = "https://cdn.teslasoft.org/material/mdl/1.3.0/css/material.purple-red.min.css">
        <link rel = "stylesheet" href = "./css/styles.min.css">
        <script src = "https://cdn.teslasoft.org/material/mdl/1.3.0/js/material.min.js"></script>
        <script src = "https://cdn.teslasoft.org/jquery/3.4.1/js/jquery.min.js"></script>
        <meta name="robots" content="noindex, nofollow" />
    </head>
    <body>
        <div id = "loading" class = "loading" onclick = "javascript:void(0)">
            <div class = "l">
                <div class="progress mdl-spinner mdl-js-spinner is-active"></div>
            </div>
        </div>
        <div class = "action-bar">
            <h1 class = "activity-title">Admin panel</h1>
        </div>
        <div class = "layout">
            <div class = "modal" id = "modal-error" onclick = "closeModals()">
                <div class = "l">
                    <div class = "modal-bg-alert" id = "modal-bg-error">
                        <h2 class = "modal-title">Error</h2>
                        <p id = "error-text" class = "preview-text"></p>
                        <div class = "action-buttons">
        	                <button class = "btn-remove" onclick = "closeModals()">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "modal-login">
                <div class = "l">
                    <div class = "modal-bg-alert">
                        <h2 class = "modal-title">Authentication required</h2>
                        <form id = "auth" class = "edit-form">
                            <label class = "field-label" for = "username">Username: </label>
                            <input class = "field" name = "username" id = "username" type = "name" required>
                            <br>
                            <label class = "field-label" for = "password">Password: </label>
                            <input class = "field" name = "password" id = "password" type = "password" required>
                            <br><br>
                            <div class = "action-buttons">
                                <input class = "btn-save" name = "submit" id = "submit" type = "submit" value = "Login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src = "./js/auth.js"></script>
    </body>
</html>