<script>
    /* Beginning of async download code. */
    window.onload = function(){
        function loadjscssfile(filename, filetype) {
            if(filetype == "js") {
                var cssNode = document.createElement('script');
                cssNode.setAttribute("type", "text/javascript");
                cssNode.setAttribute("src", filename);
            } else if(filetype == "css") {
                var cssNode = document.createElement("link");
                cssNode.setAttribute("rel", "stylesheet");
                cssNode.setAttribute("type", "text/css");
                cssNode.setAttribute("href", filename);
            }
            if(typeof cssNode != "undefined")
                document.getElementsByTagName("head")[0].appendChild(cssNode);
        }
        function loadiconcdn(filename, integrity, crossorigin, filetype) {
            if(filetype == "css") {
                var cssNode = document.createElement("link");
                cssNode.setAttribute("rel", "stylesheet");
                cssNode.setAttribute("type", "text/css");
                cssNode.setAttribute("href", filename);
                cssNode.setAttribute("integrity", integrity);
                cssNode.setAttribute("crossorigin", crossorigin);
            }
            if(typeof cssNode != "undefined")
                document.getElementsByTagName("head")[0].appendChild(cssNode);
        }
        loadiconcdn("//use.fontawesome.com/releases/v5.7.0/css/all.css", "sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ", "anonymous", "css");
        loadjscssfile("//maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css", "css");
        loadjscssfile("//fonts.googleapis.com/css?family=Open+Sans:300&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek,vietnamese", "css");
        loadjscssfile("assets/css/main.css", "css");
        loadjscssfile("//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js", "js");
        loadjscssfile("//cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js", "js");
        loadjscssfile("//maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", "js");
    };
    /* End of async download code. */
</script>