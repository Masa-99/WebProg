function printfunction() {
    window.print();
}
function calc(id) {
        var artikel = document.getElementById(id);
       
        var price = artikel.getElementsByClassName("price")[0].value;
        var number = artikel.getElementsByClassName("quantity")[0].value;
        var total = (price * number).toFixed(2);
        if (!isNaN(total)){
        artikel.getElementsByClassName("total")[0].value = total;}
        changesum();				
    }

function changesum(){
    var sum = document.getElementsByClassName("total");
    var totalsum = 0;
    for(var i=0;i<sum.length;i++)
    {
        totalsum += parseFloat(sum[i].value);
    }
    document.getElementById("total").value = totalsum;
}
