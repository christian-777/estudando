<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>aprendendo 1</title>
        <script src="jquery-3.5.1.min.js"></script>
        
        <script>
        var fruta="";
        var lista="";
            $(document).ready(
                function(){
                    $("#btn").click( function(){
                        fruta = $("#fruta").val();
                        
                        lista = $("#lista").html();
                        lista+= "<li>"+fruta+"</li>";
                        $("#lista").html(lista);
                        $("#fruta").val("");

                    });
                }
            );
        </script>
    </head>
    <input type="text" id="fruta" placeholder="digite o nome de uma fruta..."/>
    <input type="button" id="btn" value="cadastrar"/>
    <br></br>
    <ul>
        <div id="lista">
        </div>
    </ul>
</html>