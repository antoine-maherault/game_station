<!DOCTYPE html>
<html>
 <head>
 <title> Game_station</title>
 </head>
 <style> 

p {
    text-align : center;
    font-size : 30px;
}

h1{
    font-family : monospace;
    font-weight : normal;
}

#one{
    margin-top: 80px;
}

.container{
    background-color : darkslateblue;
    width : 400px;
    height : 400px;
    display : flex;
    flex-direction :row;
    justify-content : center;
    align-items: start;
    padding : 20px;
}

body{
    display : flex;
    flex-direction :column;
    justify-content : center;
    align-items: center;
    gap : 20px;
}

.container1{
    width : 100%;
    height : 100px;
    display : flex;
    flex-direction :row;
    justify-content : center;
    align-items: center;
}

.socle{
    display : flex ; 
    flex-direction : row;
    justify-content: end;
    align-items : end;
    height : 400px;
    width : 200px;
    margin-right : -50px;
    margin-left : -90px;
}

.base{
    width : 20px;
    height : 15px;
    background-color : white;  
}

.traverse{
    display : flex;
    flex-direction :row;
}

.brick{
    width : 20px;
    height : 40px;
    background-color : white;   
}

.brick2{
    width : 20px;
    height : 20px;
    background-color : white;   
}

.tête{
    width : 40px;
    height : 40px;
    background-color : white;  
    border-radius : 1100px;
    margin-left :-8px;
    margin-top: 10px;  
}

.tronc{
    display : flex ; 
    flex-direction : row;
    gap : 6px;
    margin-left : -25px;
}

.one{
    width : 10px; 
}

.two{
    width : 40px; 
}

.three{
    width : 10px; 
}

.thorax{
    width : 40px;
    height : 100px;
    background-color : white;  
    border-radius : 90px;
    margin-top: 10px;  
}

.arm1{
    width : 10px;
    height : 70px;
    background-color : white;  
    border-radius : 90px;
    margin-top: 20px;  
}

.arm2{
    width : 10px;
    height : 70px;
    background-color : white;  
    border-radius : 90px;
    margin-top: 20px;  

}

.legs{
    display : flex ; 
    flex-direction : row;
    gap : 15px;
}

.leg1{
    width : 15px;
    height : 90px;
    background-color : white;  
    border-radius : 90px;
    margin-left :-8px;
    margin-top: 10px;  
}

.leg2{
    width : 15px;
    height : 90px;
    background-color : white;  
    border-radius : 90px;
    margin-left :-8px;
    margin-top: 10px;  
}

.text{
    width : 440px;
    height : 70px;
    background-color : darkslateblue;
    display : flex;
    flex-direction : row;
    justify-content : center;
    align-items : center;
    gap : 10px;
}

.newgame{
    width : 440px;
    height : 70px;
    background-color : darkslateblue;
    display : flex;
    flex-direction : row;
    justify-content : center;
    align-items : center;
    gap : 10px;
    margin-top: 30px;
}

.newgame input{
    padding : 7px;
    background-color : white;
    font-family : monospace;
    border:none;
    font-size : 20px;
}

.text input{
    width : 30px;
    height : 30px;
    text-align :center;
}

</style>
 <body>
 
 <h1 id='one'> ________GAME STATION________ </h1>
 <div class='newgame'> 
    <form method ="post" action="hangman.php">   
        <input type='submit' value='HANGMAN' name='newgame'> </input> 
    </form>   
</div>
<div class='newgame'> 
    <form method ="post" action="ttc.php">   
        <input type='submit' value='TIC TAC TOE' name='newgame'> </input> 
    </form>   
</div>
<div class='newgame'> 
    <form method ="post" action="memory.php">   
        <input type='submit' value='MEMORY' name='newgame'> </input> 
    </form>   
</div>
<h1> ____________________________ </h1>



</body>
</html>