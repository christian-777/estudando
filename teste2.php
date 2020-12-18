<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>aprendendo 1</title>
        <script src="jquery-3.5.1.min.js"></script>
        <style type="text/css">
            .div1{
                border-color:black;
                padding-right:200px;
                padding-bottom:200px;
            }
            
        </style>
        <script>
            var campo1="";
            var n=0;
            var i=0;
            var s=0;
            $(document).ready(
                function(){

                    $("#caixa1").keyup(
                        function(){
                            campo1= $("#caixa1").val();
                            $("#caixa2").val(campo1);
                        }
                    );

                    $("#btn1").click(
                        function(){
                            if(i==1){
                                i--;
                                $("#caixa2").css("font-style", "normal");
                            }
                            else{
                                i++;
                                $("#caixa2").css("font-style", "italic");
                            }
                        }
                    );
                    $("#btn3").click(
                        function(){
                            if(n==1){
                                n--;
                                $("#caixa2").css("font-weight", "normal");
                            }
                            else{
                                n++;
                                $("#caixa2").css("font-weight", "bold");

                            }
                        }
                    );
                    $("#btn2").click(
                        function(){
                            if(s==1){
                                s--;
                                $("#caixa2").css("text-decoration", "none");
                            }
                            else{
                                s++;
                                $("#caixa2").css("text-decoration", "underline");
                            }
                        }
                    );
                }
            );
        </script>
    </head>
    <input type="button" id="btn1" value="italico"/>
    <input type="button" id="btn2" value="sublinhado"/>
    <input type="button" id="btn3" value="negrito"/>
    <br></br>
    <textarea id="caixa1" class="div1"></textarea>
    <textarea id="caixa2" class="div1" readonly="readonly"></textarea>
</html>