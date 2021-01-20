function calc(){
    var n1 = parseInt(document.getElementById('n1').value);
    var n2 = parseFloat(document.getElementById('n2').value);

    if(n1 != null || n2 != null){
        document.getElementById('result').value = (n1*n2)/1000;
    }
    else{
        return false;
    }
}