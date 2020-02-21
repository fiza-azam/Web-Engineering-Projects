questions =[" HTML stands for?", "www is based on which model?", "HTML is a subset of", "The attribute of form tag?", "Tag for ordered list is?"];
option1 = ["Hyper Text Markup language", "Local server", "SGMT", "Method", "olist"];
option2 = ["High Text Markup Language", "Client server", "SGML", "Action", "OrderedList"];
option3 = ["Hyper Tabular Markup Language", "3-tier", "SGMD", "Method and Action", "ol"];
option4 = ["None of these", "None of these", "None of these", "None of these", "ul"];

answers = ["Hyper Text Markup language", "Client server", "SGML", "Method and Action", "ol"];

label = ["1", "2", "3", "4", "5"];

document.getElementById("question").innerHTML=questions[0];
document.getElementById("badge").innerHTML=label[0]+" out of 5";

document.getElementById("1").innerHTML=option1[0];
document.getElementById("2").innerHTML=option2[0];
document.getElementById("3").innerHTML=option3[0];
document.getElementById("4").innerHTML=option4[0];
var i = 0;
var score = 0;
function prev(){
    i--;
    if(i>=0){
    elements(i);
    }
}
function next(){
    if(i<0){i=0}
    i++;
    if(i>=5){
        i=4;
    }
    elements(i);
}

function first(){
    elements(0);
    i=0;
}

function last(){
    elements(4);
    i=4;
}

function elements(a){

document.getElementById("question").innerHTML=questions[a];
document.getElementById("badge").innerHTML=label[a]+" out of 5";
document.getElementById("1").innerHTML=option1[a];
document.getElementById("2").innerHTML=option2[a];
document.getElementById("3").innerHTML=option3[a];
document.getElementById("4").innerHTML=option4[a];
check();
}

function check(){

    if (document.getElementById("1c").checked == true)
    {
        document.getElementById("1c").checked = false;
        document.getElementById("2c").checked = false;
        document.getElementById("3c").checked = false;
        document.getElementById("4c").checked = false;

    }
    if(document.getElementById("2c").checked == true){
        document.getElementById("1c").checked = false;
        document.getElementById("2c").checked = false;
        document.getElementById("3c").checked = false;
        document.getElementById("4c").checked = false;
    }
    if(document.getElementById("3c").checked == true){
        document.getElementById("1c").checked = false;
        document.getElementById("2c").checked = false;
        document.getElementById("3c").checked = false;
        document.getElementById("4c").checked = false;
    }
    if(document.getElementById("4c").checked == true){
        document.getElementById("1c").checked = false;
        document.getElementById("2c").checked = false;
        document.getElementById("3c").checked = false;
        document.getElementById("4c").checked = false;
    }


}

function submit(){
    alert("Your Total Score is: "+score);
    if(i==4){
        score = 0;
    }
}

function funct1(){
    if(i==0){
            score+=5;
    }
}

function funct2(){
    if(i==1){
        score+=5;
    }
}
function funct3(){
    if(i==2){
      
            score+=5;
    
    }else if(i==3){
        
            score+=5;
       
    } else if(i==4){
      
            score+=5;
      
    }

}