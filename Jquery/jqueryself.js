function checkdelete(){
    return confirm('Do you really want to Delete data?');
  }

//function yesnoCheck(that) 
//{
   // if (that.value == "Beverages") 
   // {
    //    document.getElementById("size").style.display = "block";
    //}
    //else
    //{
   ///    document.getElementById("size").style.display = "none";
   // }
   
//}

function Discount(that){
    if (that.value == "None") 
    {
        document.getElementById("Id").style.display = "none";
    }
    else
    {
        document.getElementById("Id").style.display = "block";
    }
   
  }

 
  
