$("#modal-error").click(function(e) {
    closeModals();
});

$("#modal-bg-error").click(function(e) {
    e.stopPropagation();
});

async function sha256(message) {
    // encode as UTF-8
    const msgBuffer = new TextEncoder().encode(message);                    

    // hash the message
    const hashBuffer = await crypto.subtle.digest('SHA-256', msgBuffer);

    // convert ArrayBuffer to Array
    const hashArray = Array.from(new Uint8Array(hashBuffer));

    // convert bytes to hex string                  
    const hashHex = hashArray.map(b => b.toString(16).padStart(2, '0')).join('');
    return hashHex;
}

function closeModals() {
    document.getElementById("modal-error").style.display = "none";
}

document.getElementById("loading").style.display = "none";

function validate_token(token) {
    document.getElementById("loading").style.display = "table";
    
    var url = "https://andrax.teslasoft.org/admin/session.php?token=" + localStorage.getItem("token");
    var ajax = new XMLHttpRequest(); 
    ajax.addEventListener("load", function () {
        if (this.status == 200) {
    	    var response = JSON.parse(this.responseText);
    	    
    	    if (response.code == 200) {
    	        window.location.replace("dashboard.php");
    	    } else {
    	        document.getElementById("loading").style.display = "none";
    	        localStorage.removeItem("token");
    	        localStorage.removeItem("username");
    	    }
        } else {
            document.getElementById("modal-error").style.display = "table";
            document.getElementById("error-text").innerHTML = "Failed to connect to the server"
            document.getElementById("loading").style.display = "none";
        }
    }); 
    ajax.open("GET", url, true); 
    ajax.send();
}

document.getElementById("submit").addEventListener("click", function(event) {
    event.preventDefault();
    
    if (document.getElementById("username").value !== "" && document.getElementById("password").value !== "") {
        sha256(document.getElementById("password").value).then((response) => {
            document.getElementById("loading").style.display = "table";
            var url = "https://andrax.teslasoft.org/admin/authenticator.php?username=" + document.getElementById("username").value + "&password=" + response;
            var ajax = new XMLHttpRequest(); 
            ajax.addEventListener("load", function () {
                document.getElementById("loading").style.display = "none";
                if (this.status == 200) {
            	    var response = JSON.parse(this.responseText);
            	    
            	    if (response.code == 200) {
            	        localStorage.setItem("token", response.message);
            	        localStorage.setItem("username", document.getElementById("username").value);
            	        validate_token(response.message);
            	    } else {
            	        document.getElementById("modal-error").style.display = "table";
                        document.getElementById("error-text").innerHTML = response.message
                        document.getElementById("loading").style.display = "none";
            	    }
                } else {
                    document.getElementById("modal-error").style.display = "table";
                    document.getElementById("error-text").innerHTML = "Failed to connect to the server"
                    document.getElementById("loading").style.display = "none";
                }
            }); 
            ajax.open("GET", url, true); 
            ajax.send();
        });
    }
});

if (localStorage.getItem("token") !== null && localStorage.getItem("username") !== null) {
    validate_token(localStorage.getItem("token"));
} else {
    closeModals();
}